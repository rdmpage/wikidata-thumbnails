<?php

require_once('image.php');


$qids=array();


$qids=array('Q111599435',
'Q111599436',
'Q111599437',
'Q111599438',
'Q111596454',
'Q111599439',
'Q111599440',
'Q111599441',
'Q111599442',
'Q111599443',
'Q111599444',
'Q111599445',
'Q111599446',
'Q111599447',
'Q111599448',
'Q111599449',
'Q111599450',
'Q111599451',
'Q111599452',
'Q111599453',
'Q111599454',
'Q111599455',
'Q111599456',
'Q111599457',
'Q111599458',
'Q111599459',
'Q111599460',
'Q111599721',
'Q111599722',
'Q111599723',
'Q111599724',
'Q111599725',
'Q111599726',
'Q111599727',
'Q111599728',);



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

