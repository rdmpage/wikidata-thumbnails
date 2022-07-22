<?php

require_once('image.php');


$qids=array();


$qids=array("Q113193315",
"Q113193316",
"Q113193320",
"Q113193321",
"Q113193323",
"Q113193324",
"Q113193326",
"Q113193327",
"Q113193329",
"Q113193331",
"Q113193333",
"Q113193334",
"Q113193336",
"Q113193337",
"Q113193338",
"Q113193342",
"Q113193343",
"Q113193345",
"Q113193346",
"Q113193347",
"Q113193362",
"Q113193430",
"Q113193480",
"Q113193496",);



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

