<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q111482790',
'Q111482791',
'Q111482792',
'Q111482793',
'Q111482794',
'Q111482795',
'Q111482796',
'Q111482797',
'Q111482798',
'Q111482799',
'Q111482800',
'Q111482801',
'Q111482802',
'Q111482803',
'Q111482804',
'Q111482805',

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

