<?php

require_once('image.php');


$qids=array();

$qids=array("Q55798509",
"Q58889085",
"Q58889086",
"Q58889087",
"Q58889089",
"Q58889092",
"Q58889094",
"Q58889097",
"Q54557112",
"Q58889098",
"Q58889099",
"Q58889101",
"Q58889102",
"Q58889103",
"Q58889105",
"Q58889108",
"Q58889110",
"Q58889111",
"Q58889113",
"Q58889115",
"Q58889116",
"Q58889119",
"Q58889121",
"Q58889123",
"Q58889124",
"Q58889126",
"Q58889127",
"Q56639410",
"Q58889129",
"Q58889130",
"Q58889131",
"Q58889133",
"Q58889134",
"Q58889136",
"Q58889137",
"Q58889140",
"Q58889142",
"Q58889144",
"Q58889146",
"Q58889148",
"Q54552636",
"Q58889150",
"Q58889153",
"Q58889154",
"Q58889156",
"Q58889158",
"Q58889159",
"Q58889160",
"Q58889163",
"Q58889166",
"Q58889167",
"Q58889169",
"Q58889170",
"Q58889173",
"Q58889176",
"Q58889178",
"Q58889179",
"Q58889181",
"Q58889182",
"Q58889184",
"Q58889187",
"Q58889189",
"Q55798516",
"Q54546703",
"Q55798517",
"Q55798520",
"Q55798519",
"Q58889190",
"Q58889192",
"Q58889193",
"Q58889194",
"Q58889197",
"Q56700490",
"Q58889200",
"Q58889202",
"Q58889203",
"Q58889204",
"Q58889205",
"Q58889207",
"Q58889209",
"Q55798514",
"Q58889212",
"Q58885367",
"Q58889213",
"Q58889215",
"Q58889217",
"Q58889219",
"Q58889220",
"Q58889222",
"Q58889223",
"Q58889224",
"Q58889225",
"Q58889228",
"Q58889230",
"Q58889231",
"Q58889233",
"Q58889234",
"Q58889235",
"Q58889236",
"Q58889238",
"Q58889239",
"Q58889240",
"Q58889241",
"Q58889244",
"Q58889246",
"Q58889247",
"Q58889249",
"Q58889250",
"Q58889251",
"Q58889253",
"Q58889255",
"Q58889257",
"Q58889258",
"Q58889259",
"Q58889261",
"Q58889263",
"Q58889264",
"Q55798508",
"Q58889265",
"Q58889266",
"Q55798503",
"Q55798497",
"Q58889267",
"Q55798507",
"Q58889268",
"Q58889269",
"Q58889271",
"Q55798501",
"Q58889272",
"Q55798500",
"Q54644632",
"Q55798505",
"Q54643897",
"Q58889273",
"Q58889274",
"Q58889275",
"Q58889277",
"Q58889278",
"Q58889279",
"Q58889280",
"Q58889282",
"Q58889283",
"Q58889285",
"Q58889286",
"Q58889287",
"Q58889289",
"Q58889290",
"Q58889291",
"Q58889292",
"Q58889295",
"Q58889296",
"Q58889298",
"Q58889299",
"Q58889301",
"Q58889302",
"Q58889304",
"Q58889306",
"Q105020400",
"Q105020403",
"Q105020406",
"Q105020407",
"Q105020410",
"Q105020411",
"Q105020413",
"Q105020416",
"Q105020417",
"Q105020420",
"Q105020422",
"Q105020423",
"Q105020425",
"Q105020427",
"Q105020429",
"Q105020432",
"Q105020436",
"Q105020439",
"Q105020442",
"Q105020443",
"Q105020445",
"Q105020448",
"Q105020449",
"Q105020451",
"Q105020452",
"Q105020453",
"Q105020456",
"Q105020458",
"Q105020460",
"Q105020463",
"Q105020466",
"Q105020468",
"Q105020470",
"Q105020472",
"Q105020475",
"Q105021182",
"Q105020479",
"Q105020481",
"Q105020483",
"Q105020485",
"Q105020487",
"Q105020489",
"Q105021185",
"Q105020493",
"Q105020495",
"Q105020498",
"Q105020501",
"Q105020504",
"Q105020509",
"Q105020513",
"Q105020515",
"Q105020525",
"Q105020531",
"Q105020535",
"Q105020538",
"Q105020540",
"Q105020542",
"Q105020545",
"Q105020548",
"Q105020549",
"Q105020553",
"Q105020554",
"Q105020556",
"Q105020558",
"Q105020561",
"Q105020563",
"Q105020565",
"Q105020566",
"Q105020568",
"Q105020569",
"Q105020572",
"Q105020574",
"Q105020577",
"Q105020578",
"Q105020583",
"Q105020585",
"Q105020587",
"Q105020590",
"Q105020592",
"Q105020595",
"Q105020597",
"Q105020600",
"Q105020602",
"Q105020604",
"Q105020606",
"Q105020609",
"Q105020611",
"Q105020613",
"Q105020614",
"Q105020616",
"Q105020619",
"Q105020622",
"Q105020623",
"Q105020625",
"Q105020626",
"Q105020632",
"Q105020634",
"Q105020637",
"Q105020638",
"Q105020641",
"Q105020644",
"Q105020646",
"Q105020649",
"Q105020651",
"Q105020653",
"Q105020655",
"Q105020658",
"Q105020660",
"Q105020663",
"Q105020668",
"Q105020670",
"Q105020673",
"Q105020674",
"Q105020677",
"Q105020680",
"Q105020682",
"Q105020684",
"Q105020685",
"Q105020688",
"Q105020689",
"Q105020691",
"Q105020693",
"Q105020694",
"Q105020697",
"Q105020699",
"Q105020701",
"Q105020703",
"Q105020706",
"Q105020708",
"Q105020710",
"Q105020712",
"Q105020715",
"Q105020718",
"Q105020719",
"Q105020720",
"Q105020723",
"Q105020724",
"Q105020726",
"Q105020728",
"Q105020730",
"Q105020732",
"Q105020734",
"Q105020736",
"Q105020738",
"Q105020740",
"Q105020742",
"Q105020744",
"Q105020745",
"Q105020747",
"Q105020748",
"Q105020749",
"Q105020750",
"Q105020751",
"Q105020753",
"Q105020756",
"Q105020758",
"Q105020759",
"Q105020761",
"Q105020764",
"Q105020765",
"Q105020767",
"Q105020770",
"Q105020772",
"Q105020776",
"Q105020778",
"Q105020780",
"Q105020783",
"Q105020784",
"Q105020786",
"Q105020788",
"Q105020790",
"Q105020791",
"Q105020793",
"Q105020795",
"Q105020796",
"Q105020799",
"Q105020800",
"Q105020802",
"Q105020803",
"Q105020806",
"Q105020808",
"Q105020810",
"Q105020812",
"Q105020814",
"Q105020816",
"Q105020818",
"Q105020819",
"Q105020822",
"Q105020823",
"Q105020825",
"Q105020826",
"Q105020829",
"Q105020830",
"Q105020832",
"Q105020833",
"Q105020834",
"Q105020837",
"Q105020838",
"Q105020840",
"Q105020843",
"Q105020845",
"Q105020846",
"Q105020849",
"Q105020850",
"Q105020852",
"Q105020854",
"Q105020856",
"Q105020858",
"Q105020859",
"Q105020860",
"Q105020861",
"Q105020863",
"Q105020865",
"Q105020867",
"Q105020869",
"Q105020871",
"Q105020873",
"Q105020875",
"Q105020877",
"Q105020879",
"Q105020883",
"Q105020884",
"Q105020886",
"Q105020888",
"Q105020891",
"Q105020892",
"Q105020894",
"Q105020895",
"Q105020896",
"Q105020898",
"Q105020901",
"Q105020902",
"Q105020904",
"Q105020906",
"Q105020908",
"Q105020911",
"Q105020913",
"Q105020915",
"Q105020916",
"Q105020918",
"Q105020920",
"Q105020922",
"Q105020923",
"Q105020925",
"Q105020927",
"Q105020928",
"Q105020930",
"Q105020932",
"Q105020934",
"Q105020935",
"Q105020937",
"Q105020939",
"Q105020941",
"Q105021188",
"Q105020943",
"Q105020946",
"Q105020947",
"Q105020950",
"Q105020951",
"Q105020953",
"Q105020954",
"Q105020956",
"Q105020957",
"Q105020959",
"Q105020961",
"Q105020963",
"Q105020965",
"Q105020966",
"Q105020969",
"Q105020971",
"Q105020974",
"Q105020975",
"Q105020977",
"Q105020979",
"Q105020980",
"Q105020981",
"Q105020982",
"Q105020983",
"Q105020985",
"Q105020986",
"Q105020987",
"Q105020989",
"Q105020992",
"Q105020994",
"Q105020995",
"Q105020996",
"Q105020998",
"Q105021000",
"Q105021002",
"Q105021003",
"Q105021005",
"Q105021007",
"Q105021008",
"Q105021010",
"Q105021011",
"Q105021012",
"Q105021014",
"Q105021015",
"Q105021017",
"Q105021020",
"Q105021021",
"Q105021023",
"Q105021025",
"Q35173442",
"Q105021027",
"Q105021028",
"Q105021031",
"Q105021035",
"Q105021038",
"Q105021040",
"Q105021041",
"Q105021042",
"Q105021043",
"Q105021045",);


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

