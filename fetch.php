<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q111651756',
'Q95998164',
'Q95998162',
'Q111651763',
'Q111651765',
'Q111651770',
'Q111651771',
'Q111651772',
'Q111651773',
'Q111651774',
'Q111651775',
'Q111651776',
'Q111651779',
'Q111651781',
'Q111651782',
'Q111651783',
'Q111651785',
'Q111651795'
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

