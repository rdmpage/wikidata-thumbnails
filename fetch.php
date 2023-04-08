<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q117469039',
'Q117469040',
'Q117469041',
'Q117469042',
'Q117469043',
'Q117469044',
'Q117469045',

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

