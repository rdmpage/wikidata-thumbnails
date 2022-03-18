<?php

require_once('image.php');


$qids=array();

// redo
$qids=array(
'Q111244912',
'Q111243939',
'Q111243946',
'Q65562332',
);



$count = 1;

$force = false;
$force = true;

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

