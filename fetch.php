<?php

require_once('image.php');


$qids=array();

$qids=array("Q109908167",
"Q109908168",
"Q109908169",
"Q109908170",
"Q109908171",
"Q109908172",
"Q109908173",
"Q109908175",
"Q104465359",
"Q109908176",
"Q109908177",
"Q109908178",
"Q109908179",
"Q104465357",
"Q104465365",
"Q109908180",
"Q104465371",
"Q109908181",
"Q104465363",
"Q99654971",
"Q104465355",
"Q109908182",
"Q109908183",
"Q109908184",
"Q104465372",
"Q109908185",
"Q104465358",
"Q104465374",
"Q109908186",
"Q104465366",
"Q104465368",
"Q99660644",
"Q104465383",
"Q60729008",
"Q104465392",
"Q109908187",
"Q109908188",
"Q109908189",
"Q109908190",
"Q109908191",
"Q109908192",
"Q109908193",
"Q109908194",
"Q109908195",
"Q109908196",
"Q104465376",
"Q104465389",
"Q104465386",
"Q109908197",
"Q104465400",
"Q109908198",
"Q104465388",
"Q99660645",
"Q109908199",
"Q109908200",
"Q104465403",
"Q109908201",
"Q109908202",
"Q104465361",
"Q104465394",
"Q104465401",
"Q109908204",
"Q109908205",
"Q104465381",
"Q109908207",
"Q109908208",
"Q109908209",
"Q109908210",
"Q109908211",
"Q109908212",
"Q109908213",
"Q104465399",
"Q109908214",
"Q57276345",
"Q56521116",
"Q109908215",
"Q55886161",
"Q109908216",
"Q104465391",
"Q109908217",
"Q109908218",
"Q109908219",
"Q109908220",
"Q109908221",
"Q104465378",
"Q61572832",
"Q109908222",
"Q109908223",
"Q104465395",
"Q104465397",
"Q109908225",
"Q109908227",
"Q104465404",
"Q109908229",
"Q109908230",
"Q109908231",
"Q109908232",
"Q109908234",
"Q109908235",
"Q104465380",
"Q104465377",
"Q109908236",
"Q109908237",
"Q109908238",
"Q109908239",
"Q109908240",
"Q109908241",
"Q109908242",
"Q67240199",
"Q109908243",
"Q56521033",
"Q109908244",
"Q109908245",
"Q67240184",
"Q109908246",
"Q109908247",
"Q104465427",
"Q99647385",
"Q109908249",
"Q109908250",
"Q109908251",
"Q109908252",
"Q104465409",
"Q104465408",
"Q109908253",
"Q104465415",
"Q109908254",
"Q109908255",
"Q104465430",
"Q109908256",
"Q104465423",
"Q104465433",
"Q109908257",
"Q109908258",
"Q109908259",
"Q109908260",
"Q109908261",
"Q109908262",
"Q109908263",
"Q104465428",
"Q109908264",
"Q109908266",
"Q109908267",
"Q104465407",
"Q104465416",
"Q109908268",
"Q109908269",
"Q104465432",
"Q109908270",
"Q109908271",
"Q109908272",
"Q109908273",
"Q104465418",
"Q109908274",
"Q99660652",
"Q109908275",
"Q109908277",
"Q104465405",
"Q109908278",
"Q109908280",
"Q104465425",
"Q109908281",
"Q99660655",
"Q109908282",
"Q99660646",
"Q104465431",
"Q109908284",
"Q99647314",
"Q109908285",
"Q63467907",
"Q63071502",
"Q109908286",
"Q99660647",
"Q109908287",
"Q104465414",
"Q99660650",
"Q109908288",
"Q109908289",
"Q104465419",
"Q104465421",
"Q109908290",
"Q109908291",
"Q109908292",
"Q104465411",
"Q109908293",
"Q106698470",
"Q109908294",
"Q109908295",
"Q104465440",
"Q109908296",
"Q104625040",
"Q109908297",
"Q104624718",
"Q109908298",
"Q109908299",
"Q109908300",
"Q104465443",
"Q99647436",
"Q106699761",
"Q104624245",
"Q109908301",
"Q106700023",
"Q104625069",
"Q109908302",
"Q108863599",
"Q104625092",
"Q109908303",
"Q104625063",
"Q104623530",
"Q104624846",
"Q104624586",
"Q104624689",
"Q104624520",
"Q104624806",
"Q104625094",
"Q104624789",
"Q109908304",
"Q106698929",
"Q109908305",
"Q109908306",
"Q106700039",
"Q109908307",
"Q109908308",
"Q104623573",
"Q109908309",
"Q104465435",
"Q104465438",
"Q109908310",
"Q109908311",
"Q109908312",
"Q109908313",
"Q104624929",
"Q106701072",
"Q109908315",
"Q109908316",
"Q104624225",
"Q109908317",
"Q109908318",
"Q104623529",
"Q108863598",
"Q104624341",
"Q104465434",
"Q106699495",
"Q109908319",
"Q104624151",
"Q104624110",
"Q109908320",
"Q109908321",
"Q104465437",
"Q109908322",
"Q104465441",
"Q106699849",
"Q109908324",
"Q106699901",
"Q106701004",
"Q106700307",
"Q109908325",
"Q109908326",
"Q109908327",
"Q109908328",
"Q109908329",
"Q109908331",
"Q109908332",
"Q109908333",
"Q109908334",
"Q109908335",
"Q109908336",
"Q109908337",
"Q109908338",
"Q109908339",
"Q109908341",
"Q109908342",
"Q109908343",
"Q109908344",
"Q109908345",
"Q106700797",
"Q109908346",
"Q109908347",
"Q109908348",
"Q109908349",
"Q109908351",
"Q109908352",
"Q109908353",
"Q109908354",
"Q109908355",
"Q109908356",
"Q106700239",
"Q109908358",
"Q109908359",
"Q109908360",
"Q109908361",
"Q109908362",
"Q109908363",
"Q109908364",
"Q109908365",
"Q109908366",
"Q109908367",
"Q106698993",
"Q109908368",
"Q106699896",
"Q106698922",
"Q106701052",
"Q109908369",
"Q109908370",
"Q109908371",
"Q106700360",
"Q109908372",
"Q109908374",
"Q106698433",
"Q109908375",
"Q109908376",
"Q109908377",
"Q109908378",
"Q109908379",
"Q109908380",
"Q106701702",
"Q109908382",
"Q109908383",
"Q109908384",
"Q109908385",
"Q109908386",
"Q109909403",
"Q109909404",
"Q109909405",
"Q109909407",
"Q109909408",
"Q109909409",
"Q109909411",
"Q109909412",
"Q109909413",
"Q109909414",
"Q109909415",
"Q109909416",
"Q109909418",
"Q109909419",
"Q109909420",
"Q109909421",
"Q109909422",
"Q109909423",
"Q109909425",
"Q109909426",
"Q109909427",
"Q109909428",
"Q109909429",
"Q109909430",
"Q109909431",
"Q109909433",
"Q109909434",
"Q109909435",
"Q109909436",
"Q109909437",
"Q109909438",
"Q109909439",
"Q109909440",
"Q109909441",
"Q109909443",
"Q109909444",
"Q109909445",
"Q109909446",
"Q109909448",
"Q109909449",
"Q109909450",
"Q109909451",
"Q109909452",
"Q109909453",
"Q109909454",
"Q109909455",
"Q109909456",
"Q109909457",
"Q109909458",
"Q109909459",
"Q109909460",
"Q109909461",
"Q109909463",
"Q109909464",
"Q109909465",
"Q109909466",
"Q109909467",
"Q109909468",
"Q109909469",
"Q109909470",
"Q109909471",
"Q109909472",
"Q109909473",
"Q109909474",
"Q109909475",
"Q109909476",
"Q109909477",
"Q109909478",
"Q109909480",
"Q109909482",
"Q109909483",
"Q109909484",
"Q109909486",
"Q109909487",
"Q109909488",
"Q109909489",
"Q109909490",
"Q109909491",
"Q109909492",
"Q109909493",
"Q109909494",
"Q109909495",
"Q109909496",
"Q109909497",
"Q109909498",
"Q109909499",
"Q109909500",
"Q109909501",
"Q109909502",
"Q109909503",
"Q109909504",
"Q109909505",
"Q109909506",
"Q109909507",
"Q109909508",
"Q109909509",
"Q109909510",
"Q109909511",
"Q109909512",
"Q109909513",
"Q109909514",
"Q109909515",
"Q109909516",
"Q109909518",
"Q109909520",
"Q109909521",
"Q109909522",
"Q109909523",
"Q109909524",
"Q109909525",
"Q109909526",
"Q109909527",
"Q109909528",
"Q109909529",
"Q109909530",
"Q109909531",
"Q109909532",
"Q109909533",
"Q109909534",
"Q109909535",
"Q109909536",
"Q109909537",
"Q109909538",
"Q109909540",
"Q109909541",
"Q109909542",
"Q109909543",
"Q109909544",
"Q109909545",
"Q109909546",
"Q109909547",
"Q109909548",
"Q109909549",
"Q109909550",
"Q109909551",
"Q109909552",
"Q109909553",
"Q109909555",
"Q109909556",
"Q109909557",
"Q109909558",
"Q109909559",
"Q109909560",
"Q109909561",
"Q109909562",
"Q109909563",
"Q109909564",
"Q109909565",
"Q109909567",
"Q109909568",
"Q109909569",
"Q109909570",
"Q109909571",
"Q109909573",
"Q109909574",
"Q109909575",
"Q109909576",
"Q109909577",
"Q109909578",
"Q109909579",
"Q109909580",
"Q109909581",
"Q109909582",
"Q109909583",
"Q109909584",
"Q109909585",
"Q109909586",
"Q109909587",
"Q109909588",
"Q109909589",
"Q109909591",
"Q109909592",
"Q109909593",
"Q109909594",
"Q109909595",
"Q109909596",
"Q109909597",
"Q109909598",
"Q109909599",
"Q109909600",
"Q109909601",
"Q109909602",
"Q109909603",
"Q109909604",
"Q109909605",
"Q109909606",
"Q109909607",
"Q109909608",
"Q109909610",
"Q109909611",
"Q109909612",
"Q109909613",
"Q109909614",
"Q109909615",
"Q109909616",
"Q109909617",
"Q109909618",
"Q109909619",
"Q109909620",
"Q109909621",
"Q109909622",
"Q109909623",
"Q109909624",
"Q109909625",
"Q109909626",
"Q109909627",
"Q109909628",
"Q109909629",
"Q109909630",
"Q109909631",
"Q109909632",
"Q109909633",
"Q109909634",
"Q109909635",
"Q109909636",
"Q109909637",
"Q109909638",
"Q109909639",
"Q109909640",
"Q109909641",
"Q109909642",
"Q109909643",
"Q109909644",
"Q109909645",
"Q109909647",
"Q109909648",
"Q109909649",
"Q109909650",
"Q109909651",
"Q109909652",
"Q109909653",
"Q109909654",
"Q109909655",
"Q109909656",
"Q109909657",
"Q109909658",
"Q109909659",
"Q109909660",
"Q109909661",
"Q109909662",
"Q109909665",
"Q109909666",
"Q109909667",
"Q109909668",
"Q109909669",
"Q109909670",
"Q109909671",
"Q109909672",
"Q109909673",
"Q109909674",
"Q109909675",
"Q109909676",
"Q109909677",
"Q109909678",
"Q109909679",
"Q109909680",
"Q109909682",
"Q109909683",
"Q109909684",
"Q109909685",
"Q109909686",
"Q109909687",
"Q109909688",
"Q109909689",
"Q109909690",
"Q109909691",
"Q109909692",
"Q109909693",
"Q109909694",
"Q109909695",
"Q109909696",
"Q109909697",
"Q109909698",
"Q109909700",
"Q109909701",
"Q109909702",
"Q109909703",
"Q109909704",
"Q109909705",
"Q109909706",
"Q109909707",
"Q109909708",
"Q109909709",
"Q109909710",
"Q109909711",
"Q109909712",
"Q109909713",
"Q109909714",
"Q109909715",
"Q109909716",
"Q109909717",
"Q109909718",
"Q109909719",
"Q109909720",
"Q109909721",
"Q109909722",
"Q109909723",
"Q109909724",
"Q109909725",
"Q109909726",
"Q109909727",
"Q109909728",
"Q109909729",
"Q109909730",
"Q109909731",
"Q109909732",
"Q109909733",
"Q109909734",
"Q109909735",
"Q109909736",
"Q109909737",
"Q109909738",
"Q109909739",
"Q109909740",
"Q109909741",
"Q109909742",
"Q109909743",
"Q109909744",
"Q109909745",
"Q109909746",
"Q109909747",
"Q109909748",
"Q109909749",
"Q109909751",
"Q109909752",
"Q109909753",
"Q109909755",
"Q109909756",
"Q109909757",
"Q109909758",
"Q109909759",
"Q109909760",
"Q109909761",
"Q109909762",
"Q109909763",
"Q109909764",
"Q109909765",
"Q109909766",
"Q109909767",
"Q109909768",
"Q109909770",
"Q109909771",
"Q109909772",
"Q109909773",
"Q109909774",
"Q109909775",
"Q109909776",
"Q109909777",
"Q109909778",
"Q109909779",
"Q109909780",
"Q109909781",
"Q109909782",
"Q109909783",
"Q109909784",
"Q109909785",
"Q109909787",
"Q109909788",
"Q109909789",
"Q109909790",
"Q109909791",
"Q109909792",
"Q109909793",
"Q109909794",
"Q109909795",
"Q109909796",
"Q109909798",
"Q109909799",
"Q109909800",
"Q109909801",
"Q109909802",
"Q109909804",
"Q109909805",
"Q109909806",
"Q109909807",
"Q109909808",
"Q109909809",
"Q109909810",
"Q109909811",
"Q109910257",
"Q109909813",
"Q109909814",
"Q109909815",
"Q109909816",
"Q109909817",
"Q109909818",
"Q109909819",
"Q109909820",
"Q109909821",
"Q109909822",
"Q109909823",
"Q109909824",
"Q109909825",
"Q109909826",
"Q109909827",
"Q109909828",
"Q109909829",
"Q109909830",
"Q109909831",
"Q109909832",
"Q109909833",
"Q109909834",
"Q109909835",
"Q109909836",
"Q109909837",
"Q109909838",
"Q109909839",
"Q109909841",
"Q109909842",
"Q109909843",
"Q109909844",
"Q109909845",
"Q109909846",
"Q109909847",
"Q109909848",
"Q109909849",
"Q109909850",
"Q109909851",
"Q109909852",
"Q109909853",
"Q109909854",
"Q109909855",
"Q109909856",
"Q109909857",
"Q109909858",
"Q109909859",
"Q109909861",
"Q109909864",
"Q109909865",
"Q109909866",
"Q109909867",
"Q109909868",
"Q109909869",
"Q109909870",
"Q109909871",
"Q109909872",
"Q109909873",
"Q109909874",
"Q109909875",
"Q109909876",
"Q109909877",
"Q109909878",
"Q109909879",
"Q109909881",
"Q109909882",
"Q109909883",
"Q109909884",
"Q109909885",
"Q109909886",
"Q109909887",
"Q109909888",
"Q109909889",
"Q109909892",
"Q109909893",
"Q109909895",
"Q109909896",
"Q109909897",
"Q109909898",
"Q109909899",
"Q109909901",
"Q109909902",
"Q109909903",
"Q109909904",
"Q109909905",
"Q109909906",
"Q109909907",
"Q109909908",
"Q109909910",
"Q109909911",
"Q109909912",
"Q109909914",
"Q109909915",
"Q109909916",
"Q109909918",
"Q109909919",
"Q109909921",
"Q109909922",
"Q109909923",
"Q109909925",
"Q109909926",
"Q109909927",
"Q109909929",
"Q109909930",
"Q109909931",
"Q109909932",
"Q109909933",
"Q109909934",
"Q109909935",
"Q109909936",
"Q109909937",
"Q109909938",
"Q109909939",
"Q109909940",
"Q109909941",
"Q109909942",
"Q109909943",
"Q109909944",
"Q109909945",
"Q109909946",
"Q109909947",
"Q109909948",
"Q109909949",
"Q109909950",
"Q109909951",
"Q109909952",
"Q109909953",
"Q109909954",
"Q109909955",
"Q109909956",
"Q109909957",
"Q109909958",
"Q109909959",
"Q109909960",
"Q109909961",
"Q109909962",
"Q109909963",
"Q109909964",
"Q109909965",
"Q109909966",
"Q109909967",
"Q109909968",
"Q109909969",
"Q109909970",
"Q109909971",
"Q109909972",
"Q109909974",
"Q109909975",
"Q109909976",
"Q109909977",
"Q109909978",
"Q109909979",
"Q109909980",
"Q109909981",
"Q109909982",
"Q109909983",
"Q109909984",
"Q109909985",
"Q109909986",
"Q109909987",
"Q109909989",
"Q109909990",
"Q109909992",
"Q109909993",
"Q109909994",
"Q109909995",
"Q109909997",
"Q109909998",
"Q109909999",
"Q109910001",
"Q109910002",
"Q109910003",
"Q109910004",
"Q109910005",
"Q109910006",
"Q109910007",
"Q109910008",
"Q109910009",
"Q109910011",
"Q109910012",
"Q109910013",
"Q109910014",
"Q109910015",
"Q109910016",
"Q109910017",
"Q109910018",
"Q109910019",
"Q109910020",
"Q109910021",
"Q109910022",
"Q109910023",
"Q109910024",
"Q109910025",
"Q109910026",
"Q109910027",
"Q109910029",
"Q109910030",
"Q109910031",);


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

