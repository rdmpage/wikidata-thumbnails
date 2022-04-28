<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q111740334',
'Q111746575',
'Q111746577',
'Q111746759',
'Q111746760',
'Q111746761',
'Q111746762',
'Q111746763',
'Q111746764',
'Q111746765',
'Q111746766',
'Q111746767',
'Q111746768',
'Q111746769',
'Q111746771',
'Q111746772',
'Q111746773',
'Q111746774',
'Q111746775',
'Q111746776',
'Q111746777',
'Q111746778',
'Q111746779',

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

