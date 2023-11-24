<?php

$a=array(
	"Bill"=>10,
	"Joe"=>20,
	"Peter"=>30
);

echo "<h2> array_flip() and array_change_key_case() </h2>";
	$arrFlip=array_flip($a);
	echo "<pre>";
	print_r($arrFlip);
	echo "</pre>";

	$arrChangeKeyCaseUpper=array_change_key_case($a,CASE_UPPER);
	echo "<pre>";
	print_r($arrChangeKeyCaseUpper);
	echo "</pre>";

	$arrChangeKeyCaseLower=array_change_key_case($a,CASE_LOWER);
	echo "<pre>";
	print_r($arrChangeKeyCaseUpper);
	echo "</pre>";


echo "<h2> array_sum() and array_product() </h2>";	
	$arr1=[10,20,30,40,50];
	echo "sum is:  ".array_sum($arr1);
	echo "<br>";
	echo "product is: ".array_product($arr1);
	echo "<br>";
	echo "sum is:  ".array_sum($a);
	echo "<br>";
	echo "product is: ".array_product($a);


echo "<h2> array_rand() and shuffle() </h2>";	
	$color=array("red","green","blue","white","black","orange","purple");
	$color1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"white","e"=>"black","f"=>"orange","g"=>"purple");
	$arrRand=array_rand($color);
	echo "<pre>";
	print_r($arrRand);
	echo "</pre>";
	echo $color[$arrRand];

	$arrRandMultiple=array_rand($color,2);
	echo "<pre>";
	print_r($arrRandMultiple);
	echo "</pre>";
	echo $color[$arrRandMultiple[0]];
	echo "<br>";
	echo $color[$arrRandMultiple[1]];

	$arrRandMultipleAssoc=array_rand($color,2);
	echo "<pre>";
	print_r($arrRandMultipleAssoc);
	echo "</pre>";
	echo $color[$arrRandMultipleAssoc[0]];
	echo "<br>";
	echo $color[$arrRandMultipleAssoc[1]];

	shuffle($color);
	echo "<pre>";
	print_r($color);
	echo "</pre>";


echo "<h2> array_fill() and array_fill_values() </h2>";	
	$arrFill=array("a","b","c","d","e","f")	;

	$arrFillNew=array_fill_keys($arrFill, "anjali");
	echo "<pre>";
	print_r($arrFillNew);
	echo "</pre>";

	$arrFillNew1=array_fill(3,4,"chaurasiya");
	echo "<pre>";
	print_r($arrFillNew1);
	echo "</pre>";


echo "<h2> array_walk() and array_walk_recursive() </h2>";
	$fruits=array(
		"a"=>"Lemon",
		"b"=>"Orange",
		"c"=>"Banana",
		"d"=>"Apple"
	);	
	$veggie=array("1"=>"carrot","2"=>"tomatoes");
	$fruits1=array(
		$veggie,
		"a"=>"Lemon",
		"b"=>"Orange",
		"c"=>"Banana",
		"d"=>"Apple"
	);	

	function myFunction($value,$key,$param){
		echo "$key $param $value <br>";
	}

	array_walk($fruits, "myFunction","is a key of ");

	echo "<br>";
	array_walk_recursive($fruits1, "myFunction","is a key of ");


echo "<h2> array_map() </h2>";	
	$arr=[1,2,3,4,5];
	$arr2=['lemon','orange','banana','apple','guava'];
	function square($n)
	{
		return $n*$n;
	}

	function square1($n,$m)
	{
		return "$n for $m";
	}

	function square2($n,$m)
	{
		//for multidimensional array
		return [$n => $m];
	}

	$arrMap=array_map('square', $arr);
	echo "<pre>";
	print_r($arrMap);
	echo "</pre>";

	$arrMap1=array_map('square1', $arr,$arr2);
	echo "<pre>";
	print_r($arrMap1);
	echo "</pre>";

	$arrMap2=array_map('square2', $arr,$arr2);
	echo "<pre>";
	print_r($arrMap2);
	echo "</pre>";

	//no function call only null then it creates associative array
	$arrMap3=array_map(null, $arr,$arr2);
	echo "<pre>";
	print_r($arrMap3);
	echo "</pre>";

	//for asssociative array
	$arrAssoc=array("one"=>"Apple","two"=>"banana","three"=>"orange");

	function upper($n)
	{
		return strtoupper($n);
	}
	$arrMap4=array_map('upper', $arrAssoc);
	echo "<pre>";
	print_r($arrMap4);
	echo "</pre>";


echo "<h2> array_reduce() </h2>";	

	function myFunction2($n,$m)
	{
		return $n."-".$m;
	}

		$arrRed=['orange','pea','banana'];
		$newArrRed=array_reduce($arrRed, 'myFunction2');
		echo "<pre>";
		print_r($newArrRed);
		echo "</pre>";

		//third parameter as a initial value
		$newArrRed1=array_reduce($arrRed, 'myFunction2','lemon');
		echo "<pre>";
		print_r($newArrRed1);
		echo "</pre>";


echo "<h2> array sorting functions </h2>";
	$food=array('orange','banana','grapes','apple');
	$numbers=array(100,3,58,102);

	sort($food);
	echo "<pre>";
	print_r($food);
	echo "</pre>";

	rsort($numbers);
	echo "<pre>";
	print_r($numbers);
	echo "</pre>";

	$foods=array(
		"d"=>"lemon",
		"a"=>"orange",
		"b"=>"banana",
		"c"=>"apple"
	);
	asort($foods);
	echo "<pre>";
	print_r($foods);
	echo "</pre>";

	arsort($foods);
	echo "<pre>";
	print_r($foods);
	echo "</pre>";

	ksort($foods);
	echo "<pre>";
	print_r($foods);
	echo "</pre>";

	krsort($foods);
	echo "<pre>";
	print_r($foods);
	echo "</pre>";

	$natSort=array("Img12.png","Img10.png","img2.png","img1.png");
	natcasesort($natSort);
	echo "<pre>";
	print_r($natSort);
	echo "</pre>";

	natsort($natSort);
	echo "<pre>";
	print_r($natSort);
	echo "</pre>";

	array_multisort($food,$numbers);
	
	echo "<pre>";
	print_r($food);
	echo "</pre>";

	
	echo "<pre>";
	print_r($numbers);
	echo "</pre>";

	$rev=[4,2,7,1,0];
	$arrRev=array_reverse($rev);
	echo "<pre>";
	print_r($arrRev);
	echo "</pre>";


echo "<h2> array sorting functions </h2>";	
	$fruitFood=array('orange','banana','grapes','apple');
	echo "<b>Current: </b>".current($fruitFood)."<br>";
	echo "<b>Key: </b>".key($fruitFood)."<br>";
	echo "<b>Pos: </b>".pos($fruitFood)."<br>";
	echo "<b>Next: </b>".next($fruitFood)."<br>";
	echo "<b>Prev: </b>".prev($fruitFood)."<br>";
	echo "<b>End: </b>".end($fruitFood)."<br>";

	// echo "<pre>";
	// print_r(each($fruitFood));
	// echo "</pre>";

	echo "<b>reset: </b>".reset($fruitFood)."<br>";


echo "<h2> array sorting functions </h2>";	
	list($a,$b,$c,$d)=$fruitFood;
	echo "Value of a: $a <br>";
	echo "Value of b: $b <br>";
	echo "Value of c: $c <br>";
	echo "Value of d: $d <br>";
?>