<?php

error_reporting(E_ALL);

require_once (dirname (__FILE__) . '/image.php');


$dirs = scandir($config['cache']);

foreach ($dirs as $dir)
{
	if (preg_match('/\d+/', $dir))
	{
		$files = scandir($config['cache'] . '/' . $dir);

		foreach ($files as $filename)
		{
			if (preg_match('/Q\d+/', $filename))
			{
				$image_filename = $config['cache'] . '/' . $dir . '/' . $filename;
		
				$finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension
				$mimetype  = finfo_file($finfo, $image_filename);
				finfo_close($finfo);
		
				echo $filename . ' ' . $mimetype . "\n";
		
				$new_filename = $image_filename  . str_replace('image/', '.', $mimetype);
		
				rename($image_filename, $new_filename);
		
				$command = 'convert ' . $new_filename . ' -resize 100x100 ' . $new_filename;
		
				echo $command . "\n";
		
				system($command);
		
				rename($new_filename, $image_filename);

	
			}
		}
	}

}


?>