<?php

require_once('image.php');


$qids=array();

$qids=array('Q111068610',
'Q111068629',
'Q111068622',
'Q111068600',
'Q111068621',
'Q111068639',
'Q111068633',
'Q111068643',
'Q111068617',
'Q111068641',
'Q111068625',
'Q111068644',
'Q111068605',
'Q111068428',
'Q111068432',
'Q111068430',
'Q111068435',
'Q111068437',
'Q111068440',
'Q111068442',
'Q111068450',
'Q111068448',
'Q111068444',
'Q111068455',
'Q111068462',
'Q111068460',
'Q111068453',
'Q111068446',
'Q111068457',
'Q111068451',
'Q111068471',
'Q111068476',
'Q111068472',
'Q111068467',
'Q111068469',
'Q111068478',
'Q111068474',
'Q111068498',
'Q111068480',
'Q111068485',
'Q111068506',
'Q111068491',
'Q111068483',
'Q111068487',
'Q111068503',
'Q111068489',
'Q111068497',
'Q111068505',
'Q111068495',
'Q111068493',
'Q111068501',
'Q111068508',
'Q111068510',
'Q111068513',
'Q111068512',
'Q111068515',
'Q111068519',
'Q111068517',
'Q111068522',
'Q111068520',
'Q111068524',
'Q111068526',
'Q111068530',
'Q111068528',
'Q111068535',
'Q111068533',
'Q111068539',
'Q111068532',
'Q111068542',
'Q111068540',
'Q111068537',
'Q111068543',
'Q111068547',
'Q111068545',
'Q111068551',
'Q111068549',
'Q111068553',
'Q111068559',
'Q111068555',
'Q111068556',
'Q111068562',
'Q111068566',
'Q111068564',
'Q111068569',
'Q111068571',
'Q111068573',
'Q111068577',
'Q111068580',
'Q111068578',
'Q111068584',
'Q111068586',
'Q111068575',
'Q111068582',
'Q111068594',
'Q111068588',
'Q111068601',
'Q111068615',
'Q111068598',
'Q111068590',
'Q111068612',
'Q111068596',
'Q111068619',
'Q111068592',
'Q111068607',
'Q111068631',
'Q111068603',
'Q111068635',
'Q111068412',
'Q111068465',
'Q111068379',
'Q111068382',
'Q111068385',
'Q111068387',
'Q111068390',
'Q111068393',
'Q111068397',
'Q111068395',
'Q111068399',
'Q111068389',
'Q111068410',
'Q111068403',
'Q111068401',
'Q111068417',
'Q111068406',
'Q111068423',
'Q111068414',
'Q111068421',
'Q111068426',
'Q111068408',
'Q111068419',
'Q111068415',
'Q111068433',
'Q111068424',
'Q111068839',
'Q111068796',
'Q111068827',
'Q111068831',
'Q111068835',
'Q111068809',
'Q111068803',
'Q111068849',
'Q111068805',
'Q111068840',
'Q111068818',
'Q111068833',
'Q111068846',
'Q111068851',
'Q111068858',
'Q111068821',
'Q111068870',
'Q111068847',
'Q111068868',
'Q111068854',
'Q111068853',
'Q111068842',
'Q111068856',
'Q111068837',
'Q111068875',
'Q111068844',
'Q111068886',
'Q111068872',
'Q111068862',
'Q111068879',
'Q111068864',
'Q111068888',
'Q111068861',
'Q111068882',
'Q111068892',
'Q111068884',
'Q111068877',
'Q111068890',
'Q111068893',
'Q111068899',
'Q111068897',
'Q111068900',
'Q111068902',
'Q111068906',
'Q111068910',
'Q111068908',
'Q111068914',
'Q111068912',
'Q111068866',
'Q111068655',
'Q111068650',
'Q111068648',
'Q111068653',
'Q111068662',
'Q111068671',
'Q111068667',
'Q111068656',
'Q111068658',
'Q111068672',
'Q111068682',
'Q111068687',
'Q111068660',
'Q111068664',
'Q111068669',
'Q111068680',
'Q111068674',
'Q111068678',
'Q111068676',
'Q111068691',
'Q111068684',
'Q111068685',
'Q111068689',
'Q111068693',
'Q111068698',
'Q111068696',
'Q111068699',
'Q111068701',
'Q111068703',
'Q111068706',
'Q111068705',
'Q111068874',
'Q111068708',
'Q111068710',
'Q111068712',
'Q111068714',
'Q111068715',
'Q111068716',
'Q111068720',
'Q111068723',
'Q111068721',
'Q111068725',
'Q111068730',
'Q111068728',
'Q111068731',
'Q111068734',
'Q111068733',
'Q111068738',
'Q111068736',
'Q111068740',
'Q111068742',
'Q111068916',
'Q111068744',
'Q111068745',
'Q111068750',
'Q111068748',
'Q111068754',
'Q111068752',
'Q111068759',
'Q111068757',
'Q111068763',
'Q111068761',
'Q111068767',
'Q111068765',
'Q111068771',
'Q111068769',
'Q111068772',
'Q111068774',
'Q111068779',
'Q111068786',
'Q111068783',
'Q111068789',
'Q111068798',
'Q111068801',
'Q111068792',
'Q111068791',
'Q111068776',
'Q111068777',
'Q111068781',
'Q111068813',
'Q111068825',
'Q111068829',
'Q111068823',
'Q111068807',
'Q111068794',
'Q111068811',
'Q111068651',
'Q111071394',
'Q111071398',
'Q111071396',
'Q111071406',
'Q111071412',
'Q111071411',
'Q111071408',
'Q111071400',
'Q111071414',
'Q111071416',
'Q111071421',
'Q111071429',
'Q111071418',
'Q111071423',
'Q111071420',
'Q111071425',
'Q111071427',
'Q111071404',
'Q111069064',
'Q111069057',
'Q111069066',
'Q111069068',
'Q111069074',
'Q111069069',
'Q111069078',
'Q111069076',
'Q111069081',
'Q111069080',
'Q111069087',
'Q111069094',
'Q111069090',
'Q111069092',
'Q111069098',
'Q111069088',
'Q111069096',
'Q111069099',
'Q111069105',
'Q111069115',
'Q111069119',
'Q111069117',
'Q111069121',
'Q111069123',
'Q111069128',
'Q111069125',
'Q111069127',
'Q111069134',
'Q111069132',
'Q111069130',
'Q111069136',
'Q111069085',
'Q111069038',
'Q111069103',
'Q111068919',
'Q111068917',
'Q111068921',
'Q111068923',
'Q111068926',
'Q111069101',
'Q111068924',
'Q111068930',
'Q111068928',
'Q111068933',
'Q111068938',
'Q111068936',
'Q111068941',
'Q111068943',
'Q111068945',
'Q111068947',
'Q111068950',
'Q111068949',
'Q111069007',
'Q111069009',
'Q111069011',
'Q111069014',
'Q111069012',
'Q111069016',
'Q111069018',
'Q111069022',
'Q111069025',
'Q111069139',
'Q111069020',
'Q111069028',
'Q111069024',
'Q111069030',
'Q111069031',
'Q111069033',
'Q111069035',
'Q111069036',
'Q111069040',
'Q111069042',
'Q111069046',
'Q111069047',
'Q111069054',
'Q111069044',
'Q111069059',
'Q111069049',
'Q111069062',
'Q111069053',
'Q111068932',
'Q105626872',
'Q56010741',
'Q56010736',
'Q56010735',
'Q56010737',
'Q56010734',
'Q56010738',
'Q56010740',
'Q111069273',
'Q111069277',
'Q111069283',
'Q111069281',
'Q111069280',
'Q111069287',
'Q111069285',
'Q111069289',
'Q111069291',
'Q111069294',
'Q111069298',
'Q111069296',
'Q111069299',
'Q111069301',
'Q111069257',
'Q111069255',
'Q111069146',
'Q111069142',
'Q111069140',
'Q111069144',
'Q111069148',
'Q111069149',
'Q111069151',
'Q111069153',
'Q111069157',
'Q111069161',
'Q111069159',
'Q111069164',
'Q111069166',
'Q111069169',
'Q111069174',
'Q111069173',
'Q111069176',
'Q111069178',
'Q111069182',
'Q111069183',
'Q111069185',
'Q111069180',
'Q111069189',
'Q111069187',
'Q111069191',
'Q111069195',
'Q111069199',
'Q111069197',
'Q111069193',
'Q111069202',
'Q111069206',
'Q111069204',
'Q111069208',
'Q111069210',
'Q111069214',
'Q111069219',
'Q111069217',
'Q111069216',
'Q111069223',
'Q111069221',
'Q111069227',
'Q111069225',
'Q111069229',
'Q111069231',
'Q111069233',
'Q111069236',
'Q111069235',
'Q111069246',
'Q111069238',
'Q111069241',
'Q111069254',
'Q111069245',
'Q111069252',
'Q111069248',
'Q111069266',
'Q111069263',
'Q111069259',
'Q111069268',
'Q111069271',
'Q111069261',
'Q111069275',
'Q111069264',
'Q111069155',
'Q111069211',
'Q111069171',
'Q56010742',
'Q56008628',
'Q111069492',
'Q111069512',
'Q111069520',
'Q111069496',
'Q111069490',
'Q111069526',
'Q111069524',
'Q111069501',
'Q111069509',
'Q111069510',
'Q111069507',
'Q111069528',
'Q111069533',
'Q111069339',
'Q111069333',
'Q111069331',
'Q111069342',
'Q111069337',
'Q111069335',
'Q111069340',
'Q111069344',
'Q111069350',
'Q111069346',
'Q111069348',
'Q111069353',
'Q111069354',
'Q111069358',
'Q111069356',
'Q111069360',
'Q111069361',
'Q111069366',
'Q111069371',
'Q111069375',
'Q111069373',
'Q111069379',
'Q111069377',
'Q111069380',
'Q111069383',
'Q111069385',
'Q111069389',
'Q111069394',
'Q111069393',
'Q111069387',
'Q111069390',
'Q111069396',
'Q111069398',
'Q111069400',
'Q111069402',
'Q111069410',
'Q111069404',
'Q111069415',
'Q111069416',
'Q111069413',
'Q111069418',
'Q111069422',
'Q111069420',
'Q111069423',
'Q111069426',
'Q111069428',
'Q111069431',
'Q111069429',
'Q111069433',
'Q111069435',
'Q111069438',
'Q111069436',
'Q111069442',
'Q111069443',
'Q111069453',
'Q111069448',
'Q111069457',
'Q111069451',
'Q111069459',
'Q111069456',
'Q111069446',
'Q111069449',
'Q111069468',
'Q111069472',
'Q111069464',
'Q111069473',
'Q111069440',
'Q111069461',
'Q111069466',
'Q111069479',
'Q111069470',
'Q111069488',
'Q111069475',
'Q111069494',
'Q111069498',
'Q111069503',
'Q111069486',
'Q111069499',
'Q111069517',
'Q111069515',
'Q111069477',
'Q111069482',
'Q111069484',
'Q111069505',
'Q111069365',
'Q111069363',
'Q111069408',
'Q111069406',
'Q56017025',
'Q56017018',
'Q56017028',
'Q14760326',
'Q56017007',
'Q56017011',
'Q108265275',
'Q56017013',
'Q56017014',
'Q56017012',
'Q111069539',
'Q111069547',
'Q111069542',
'Q111069535',
'Q111069537',
'Q111069554',
'Q111069544',
'Q111069548',
'Q111069556',
'Q111069559',
'Q111069561',
'Q111069564',
'Q111069574',
'Q111069582',
'Q111069587',
'Q111069576',
'Q111069586',
'Q111069589',
'Q111069592',
'Q111069594',
'Q111069584',
'Q111069597',
'Q111071753',
'Q111071657',
'Q111071679',
'Q111071677',
'Q111071680',
'Q111071683',
'Q111071691',
'Q111071687',
'Q111071694',
'Q111071685',
'Q111071689',
'Q111071696',
'Q111071698',
'Q111071693',
'Q111071703',
'Q111071702',
'Q111071700',
'Q111071710',
'Q111071707',
'Q111071709',
'Q111071715',
'Q111071712',
'Q111071718',
'Q111071720',
'Q111071717',
'Q111071722',
'Q111071724',
'Q111071725',
'Q111071729',
'Q111071731',
'Q111071732',
'Q111071734',
'Q111071736',
'Q111071739',
'Q111071737',
'Q111071743',
'Q111071747',
'Q111071746',
'Q111071741',
'Q111071751',
'Q111071749',
'Q111071754',
'Q111071757',
'Q111071756',
'Q111071763',
'Q111071760',
'Q111069550',
'Q111071727',
'Q56007780',
'Q56007781',
'Q56007782',
'Q56007784',
'Q56009499',
'Q56009497',
'Q56007783',
'Q56009500',
'Q56009501',
'Q105725199',
'Q101635674',
'Q56012927',
'Q56012944',
'Q56012938',
'Q56012909',
'Q56012954',
'Q56012914',
'Q56012921',
'Q56012932',
'Q56012949',
'Q14830504',
'Q106345454',
'Q99618551',
'Q56016019',
'Q56016015',
'Q56016023',
'Q56016022',
'Q56016021',
'Q56016026',
'Q56016025',
'Q56016017',
'Q56016018',
'Q56016024',
'Q56016016',
'Q93462644'
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

