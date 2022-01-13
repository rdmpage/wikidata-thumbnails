<?php

require_once('image.php');


$qids=array();

$qids=array(
'Q86980835',	
'Q86983342',
'Q90161228',	
'Q90161296',	
'Q90161388',	
'Q97683652',	
'Q97683687',	
'Q97683746',	
'Q97683762',	
'Q97683864',	
'Q104256175',	
'Q104455997',	
'Q104458256',
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

