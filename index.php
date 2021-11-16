<?php

error_reporting(E_ALL);

require_once (dirname (__FILE__) . '/image.php');

// problems 
// Q95565816 seems to be missing from IA

$qid = '';

if (isset($_GET['qid']))
{
	$qid = $_GET['qid'];
}

if ($qid != '')
{

	$image = get_image($qid);

	if ($image)
	{
		header("Content-Type: " . $image->mimetype);	
		header("Content-Length: " . $image->filesize);
	
		ob_start();
		readfile($image->filename);
		ob_end_flush();

	}
}
else
{
	echo "Please supply a Wikidata item ID as the parameter 'qid'";
}

?>