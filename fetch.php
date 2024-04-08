<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q117357207');



$count = 1;

$force = false;
$force = true;

foreach ($qids as $qid)
{
	echo "$qid $count\n";
	$image = fetch_image($qid, $count, $force);	
	
	// Give server a break every 10 items
	if (($count % 2) == 0)
	{
		$rand = rand(3000000, 10000000);
		echo "\n...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}

}



?>

