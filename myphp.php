<!DOCTYPE html>
<html>
		<head>
			<title>php</title>
		</head>
	<body>

		<!-- <p>this is the paragraph</p> -->

	<?php
			// this is the single line commenting;
			/*
			this is multi line commenting...
			*/

			// // variable decleration
			// $name = "bhaskar";
			// $age = "21";
			// echo $name,$age;

	// operators

			// $num1 = 15;
			// $num2 = 15;
			// $sum = $num1+$num2;		//// arthimetic operators
			// $sum = $num1-$num2;
			// // $sum = $num1*$num2;
			// $sum = $num1%$num2;
			// echo "the total values is:-",$sum;

			// echo $num1+=$num2; // assignment operator

			// echo $num1<=>$num2; // special comparision operator

			// $a = "my name is "; // string operator
			// $b = "bhaskar";

			// echo $a.$b;

			
	// conditional operators
			// if(1==1){
			// 	echo "correct";
			// }
			// else {
			// 	echo "wrong";
			// }


			// $a = 1;
			// $b = 2;
			// if ($a == 1){
			// 	if($b == 1){
			// 		echo "both are correct!";
			// 	}
			// 	echo "only one is correct!";
			// }
	// swich condition!

			// $x = "1";

			// switch ($x) {
			// 	case 1: echo "yes this is correct!";
			// 	break;
			// 	case "number": echo "yes this is correcguihhht!";
			// 	break;
			// }

		
	// loops 
	/*
	while 
	do-while 
	for
	for in
	*/

				// for($i = 0;$i<=10;$i++){
				// 	echo $i."\n";
				// }

				// $i = 0;
				// while($i<=10){
				// 	if($i%2 == 0){
				// 		echo $i."\n";
				// 	}
				// 	$i++;
				// }

				// do{
				// 	if($i%2==0){
				// 		echo $i;
				// 	}
				// 	$i++;
				// }
				// while ($i<=10);

	//continue and break

				// for($i=1;$i<=10;$i++){
				// 	if($i == 1){
				// 		continue;
				// 	}
				// 	echo $i."\n";
				// }

					// for($i=1;$i<=10;$i++){
					// 	if($i == 7){
					// 		break;
					// 	}
					// 	echo $i."\n";
					// }

				// while (true){
					// echo "hello world";
				// }

	// arrays
			// $myArray = array("bhaskar","23","male");
			// $h = ["html","css","javascript"];
			// foreach ($h as $elem) {
			// 	echo $elem."\n";
			// }

	// array operations

			// $myarray = ["html","css","javascript","php","ajax","node","react"];
			// $key = array_search("html", $myarray);
			// echo "the index is ".$key;

			// unset($myarray[0]); // for deleting elements in array

			// foreach ($myarray as $key) {
			// 	echo $key."\n";
			// }

			// for($i = 1;$i<5;$i++){
			// 	echo $myarray[$i]."\n";
			// }

	// functions
			// function hai($array){
			// 	foreach ($array as $key) {
			// 		echo $key."\n";
			// 	}
			// }

			// hai(["html","css","javascript","php","ajax","node","react","hello2"]);

			// // optional arguments
			// function FunctionName($a,$b,$c=4)
			// {
			// 	echo $a+$b+$c;
			// }
			// FunctionName(1,2);

			// function FunctionName(...$mynum)

			// {
			// 	$sum = 0;
			// 	foreach ($mynum as $n) {
			// 		$sum+=$n;
			// 	}
			// 	echo $sum;
			// }
			// FunctionName(1,2,3,4,5,6,7,8,9,10);
	// var_dump and print_r
			// $myarray = ["html","css","javascript","php","ajax","node","react","hello2"];

			// var_dump($myarray);
			// echo "\n";
			// print_r($myarray);
	//return a value from a function:-

			// function he($num2,$num1){
			// 	return [$num1,$num2];
			// }
			// $x = he(10,18);
			// print_r($x)


	//include and require
			// echo "my name is bhaskar!<br>";
			// include('file.php')  // including the other files into the main file 
			// require('file.php')

	// include_once and required_once
			// include('file.php');

			// echo "chal mar!!!!";
			
			// $GLOBALS['myvar'];

			// function name(){
			// 	echo $GLOBALS['myvar'];
			// }
			// name("blady");

		// echo str_split("Hello",3);

			// echo $myArray[1];

			// $myarray = ["html","css","javascript","php","ajax","node","react","hello2"];
			// $s = ["html","hai","javascript","msdhoni","virat","swami viveka nanda","node"];
			// foreach ($s as $key) {
			// 	if(in_array($key, $myarray)){
			// 		echo "present in that array:-",$key."<br>";
			// 	}
			// 	else{
			// 		echo "not there in that array:-1",$key."<br>";
			// 	}
			// }
			// echo sizeof($myarray);
// how to connect to database:-
	// $jsondata = file_get_contents('englishwords.json');
	// $data = json_decode($jsondata,true);
	// if (in_array("am", $data)){
	// 	echo "present";
	// }
	// else{
	// 	echo "not";
	// }
// removing of white spaces:-
	// $var1 = " my name is ";
	// $var2 = "bhaskar";

	// echo $var2.$var1."<br>";
	// echo $var2.trim($var1);

	?>
	</body>
</html>