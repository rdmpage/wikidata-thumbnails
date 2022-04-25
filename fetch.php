<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q111651780',
"Q111655992",
"Q111655998",
"Q111656005",
"Q111656008",
'Q111651776',
);



$count = 1;

$force = false;
//$force = true;

foreach ($qids as $qid)
{
	echo "$qid $count\n";
	$image = fetch_image($qid, $count, $force);	
	
	// Give server a break every 10 items
	if (($count % 10) == 0)
	{
		$rand = rand(1000000, 3000000);
		echo "\n...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}

}



?>

