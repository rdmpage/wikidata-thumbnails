<?php

error_reporting(E_ALL);

$config['cache'] 	= dirname (__FILE__) . '/images';
$config['wayback'] 	= dirname (__FILE__) . '/wayback';


//----------------------------------------------------------------------------------------
// get
function get($url, $accept = '')
{
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
	
	if ($accept != '')
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, 
		array(
			"Accept: " . $accept 
			)
		);
	}
	  	
	$response = curl_exec($ch);
	if($response == FALSE) 
	{
		$errorText = curl_error($ch);
		curl_close($ch);
		die($errorText);
	}
	
	$info = curl_getinfo($ch);
	$http_code = $info['http_code'];
	
	switch ($http_code)
	{
		case 404:
			$response = '';
			break;
			
		default:
			break;
	}
	
	curl_close($ch);
	
	return $response;
}


//----------------------------------------------------------------------------------------
function get_image($qid, $force = false)
{
	global $config;
	
	$image = null;
		
	$filename = get_image_path($qid);

	if (!file_exists($filename))
	{
		$filename = $config['cache'] . '/EEEEEE.png';
	}	
	
	if (file_exists($filename))
	{
		$image = new stdclass;
			
		$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
		$image->mimetype  = finfo_file($finfo, $filename);
		finfo_close($finfo);
		
		$image->filesize  = filesize($filename);
		$image->filename  = $filename;
	}
	
	// print_r($image);
	return $image;
}


//----------------------------------------------------------------------------------------
function fetch_image($qid, &$count, $force = false)
{
	global $config;
	
	$image = null;
		
	$filename = get_image_path($qid, true);
	
	//echo $filename . "\n";
	
	if (!file_exists($filename) || $force)
	{
		$count++;

		$image_url = '';

		$json = get('https://www.wikidata.org/w/api.php?action=wbgetentities&ids=' . $qid . '&format=json');
		
		if ($json != '')
		{	
			$obj = json_decode($json);
			
			//print_r($obj);
			
			
			$image_url == '';
			foreach ($obj->entities->{$qid}->claims as $k => $v)
			{
				switch ($k)
				{
					// image
					case 'P18':
						foreach ($v as $c)
						{
							$value = $c->mainsnak->datavalue->value;
							
							$image_url = 'https://commons.wikimedia.org/w/thumb.php?f=' . urlencode($value) . '&w=200';
						}
						break;
						
					// biostor
					case 'P5315':
						if ($image_url == '')
						{
							$mainsnak = $v[0]->mainsnak;					
							$value = $mainsnak->datavalue->value;

							// could use simple rule but I don't have all of BioStor in IA yet
							$ia_id = 'biostor-' . $value;
							
							$ia_url = 'https://archive.org/metadata/' . $ia_id;
			
							$ia_json = get($ia_url);
			
							$ia_obj = json_decode($ia_json);
							if ($ia_obj)
							{
								if (isset($ia_obj->files ))
								{
									foreach ($ia_obj->files as $file)
									{
										if ($file->format == 'Text PDF')
										{
											// guess the thumbnail
											$image_url = 'https://archive.org/download/' . $ia_id . '/page/cover_thumb.jpg';
										}						
									}
								}
							}
						}
						break;					
					
					// internet archive
					case 'P724':
						if ($image_url == '')
						{
							$mainsnak = $v[0]->mainsnak;					
							$value = $mainsnak->datavalue->value;

							// We can't always rely on simple rules as some archives (e.g. PubMed Central)
							// have their own rules for files
					
							if (preg_match('/pubmed-PMC/', $value))
							{
								$ia_url = 'https://archive.org/metadata/' . $value;
				
								$ia_json = get($ia_url);
				
								$ia_obj = json_decode($ia_json);
								if ($ia_obj)
								{
									foreach ($ia_obj->files as $file)
									{
										if ($file->format == 'Text PDF')
										{
											// guess the thumbnail
											$image_url = 'https://archive.org/download/' . $value . '/page/cover_thumb.jpg';
										}						
									}
								}
							}
							else
							{
								// Standard Internet Archive (guess)
								$image_url = 'https://archive.org/download/' . $value . '/page/cover_thumb.jpg';
							}
						}
						break;
						
					case 'P953': // fulltext 
						if ($image_url == '')
						{
							foreach ($v as $c)
							{
								$link = new stdclass;
								// $link->URL = $c->mainsnak->datavalue->value->value;
					
								if (isset($c->qualifiers))
								{
									// PDF?
									if (isset($c->qualifiers->{'P2701'}))
									{
										if ($c->qualifiers->{'P2701'}[0]->datavalue->value->id == 'Q42332')
										{
											$link->{'content-type'} = 'application/pdf';
										};
									}
						
									// Archived?
									if (isset($c->qualifiers->{'P1065'}))
									{
										$link->URL = $c->qualifiers->{'P1065'}[0]->datavalue->value;
										// direct link to PDF
										$link->URL = str_replace("/http", "if_/http", $link->URL);
									}						
								}
					
								if (isset($link->URL) && (isset($link->{'content-type'}) && $link->{'content-type'} == 'application/pdf'))
								{					
									// There is an archived PDF
								
									// fetch PDF
									$pdf_filename = $config['wayback'] . '/' . $qid . '.pdf';
								
									if (!file_exists($pdf_filename))
									{
										$command =  "wget --timeout=20 --tries=4 --no-check-certificate '" . $link->URL . "' -O $pdf_filename";
										system($command);
									}
								
									// get first page as image
									$dir = get_image_dir($qid);
									$command = "pdftopng -f 1 -l 1 -r 12 $pdf_filename  $dir/$qid";
									echo $command . "\n";
									system($command);
								
									// clean up
									$img_filename = "$dir/$qid-000001.png";
									rename ($img_filename, $filename);
								
					
								}
							}	
						}	
						break;
	
					default:
						break;
				}
			}
		}	
		
		echo "image url = $image_url\n";
		
		if ($image_url != '')
		{
			$image_content = get($image_url, '*/*');
			if ($image_content != '')
			{
				file_put_contents($filename, $image_content);
				
				// make small
				$image_filename = $filename;
		
				$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
				$mimetype  = finfo_file($finfo, $image_filename);
				finfo_close($finfo);
				
				$new_filename = $image_filename  . str_replace('image/', '.', $mimetype);
		
				rename($image_filename, $new_filename);
		
				$command = 'convert ' . $new_filename . ' -resize 100x100 ' . $new_filename;
		
				echo $command . "\n";
		
				system($command);
		
				rename($new_filename, $image_filename);
				
			}
		}
		
		
	
		
	}
	
	if (!file_exists($filename))
	{
		$filename = $config['cache'] . '/EEEEEE.png';
	}	
	
	if (file_exists($filename))
	{
		$image = new stdclass;
			
		$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
		$image->mimetype  = finfo_file($finfo, $filename);
		finfo_close($finfo);
		
		$image->filesize  = filesize($filename);
		$image->filename  = $filename;
	}
	
	// print_r($image);
	return $image;
}

//----------------------------------------------------------------------------------------
function get_image_dir($qid, $create_missing = false)
{
	global $config;

	$number = str_replace('Q', '', $qid);

	$dir = floor($number / 1000);	
	$dir = $config['cache'] . '/' . $dir;
	
	if (!file_exists($dir) && $create_missing)
	{
		$oldumask = umask(0); 
		mkdir($dir, 0777);
		umask($oldumask);
	}
	
	return $dir;


}

//----------------------------------------------------------------------------------------
function get_image_path($qid, $create_missing = false)
{
	global $config;
	
	$dir = get_image_dir($qid, $create_missing);

	$filename = $dir . '/' . $qid;
	
	return $filename;


}




?>