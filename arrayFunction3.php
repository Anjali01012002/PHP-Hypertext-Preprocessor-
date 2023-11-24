<?php

	$a="blue";
	$color=array('a'=>'red','b'=>'black','c'=>'orange');

echo "<h2> extract() </h2>";
	// extract($color);

	// echo "Value of a: $a <br>";
	// echo "Value of b: $b <br>";
	// echo "Value of c: $c <br>";

	// echo "<hr>";

	// extract($color,EXTR_OVERWRITE);
	// echo "Value of a: $a <br>";
	// echo "Value of b: $b <br>";
	// echo "Value of c: $c <br>";

	// echo "<hr>";
	
	// extract($color,EXTR_SKIP);
	// echo "Value of a: $a <br>";
	// echo "Value of b: $b <br>";
	// echo "Value of c: $c <br>";

	// echo "<hr>";
	
	// extract($color,EXTR_PREFIX_SAME,"test");
	// echo "Value of a: $a <br>";
	// echo "Value of a: $test_a <br>";
	// echo "Value of b: $b <br>";
	// echo "Value of c: $c <br>";

	// echo "<hr>";
	
	extract($color,EXTR_PREFIX_ALL,"test");
	echo "Value of a: $a <br>";
	echo "Value of a: $test_a <br>";
	echo "Value of b: $test_b <br>";
	echo "Value of c: $test_c <br>";


echo "<h2> compact() </h2>";
	$firstName="Anjali";
	$lastName="Chaurasiya";
	$age=21;

	$newArr=compact("firstName","lastName","age");
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";


echo "<h2> range() </h2>";	
	$arrRange=range(1, 10);
	echo "<pre>";
	print_r($arrRange);
	echo "</pre>";

	$arrRangeStep=range(0, 100,10);
	echo "<pre>";
	print_r($arrRangeStep);
	echo "</pre>";

	$arrRangeChar=range('a', 'h');
	echo "<pre>";
	print_r($arrRangeChar);
	echo "</pre>";

	foreach (range('h', 'a') as $letter) {
		echo $letter."<br>";
	}

?>