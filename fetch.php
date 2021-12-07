<?php

require_once('image.php');


$qids=array();

$qids=array(
'Q104901834',
'Q104901843',
'Q104901845',
'Q104901846',
'Q104901848',
'Q104901849',
'Q104901851',
'Q104901853',
'Q104901854',
'Q104901855',
'Q104901857',
'Q104901858',
'Q104901859',
'Q104901860',
'Q104901861',
'Q104901862',
'Q104901863',
'Q104901864',
'Q104901865',
'Q104901866',
'Q104901867',
'Q104901868',
'Q104901870',
'Q104901871',
'Q104901872',
'Q104901873',
'Q104901874',
'Q104901875',
);


$count = 1;

foreach ($qids as $qid)
{
	echo "$qid $count\n";
	$image = fetch_image($qid, $count, false);	
	
	// Give server a break every 10 items
	if (($count % 10) == 0)
	{
		$rand = rand(1000000, 3000000);
		echo "\n...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}

}



?>

