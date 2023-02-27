<?php

require_once('image.php');


$qids=array();


$qids=array(
'Q107537204',
'Q107592703',
'Q108825991',

'Q100979281',
'Q100979282',
'Q100979283',
'Q100979284',
'Q100979285',
'Q100979286',
'Q100979287',
'Q100979289',
'Q100979290',
'Q100979291',
'Q100979292',
'Q100979293',
'Q100979294',
'Q100979297',
'Q100979296',
'Q100979298',
'Q100979299',

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

