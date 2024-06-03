<?php

require_once('image.php');


$qids=array();


$qids=array(

'Q126327505',
'Q126327506',
'Q126327507',
'Q126327508',
'Q126327509',
'Q126327511',
'Q126327512',
'Q126327513',
'Q126327514',
'Q126327515',
'Q126327516',
'Q126327517',
'Q126327518',
'Q126327519',
'Q126327520',
'Q126327521',
'Q126327523',
'Q126327524',

);



$count = 1;

$force = false;
//$force = true;

foreach ($qids as $qid)
{
	echo "$qid $count\n";
	$image = fetch_image($qid, $count, $force);	
	
	// Give server a break every 10 items
	if (($count % 2) == 0)
	{
		$rand = rand(3000000, 10000000);
		echo "\n...sleeping for " . round(($rand / 1000000),2) . ' seconds' . "\n\n";
		usleep($rand);
	}

}



?>

