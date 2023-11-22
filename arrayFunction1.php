<?php
	$arr=["anjali", "2", 9, 9, "anything"];

	$multiArr=[
		[1,"Anjali", "student"],
		[2,"Anju", "student"],
		[3,"Abhi", "HR"],
		[4,"Gaurav", "manager"]
	];


echo "<h2> sizeof() and count()</h2>";
	echo ("using count():-".count($arr));
	echo "<br>";
	echo ("using sizeof():-".sizeof($arr));
	echo "<br>";
	echo( "count for multidimensional array: ".count($multiArr,1));


echo "<h2>array_count_values()</h2>";
	echo "<pre>";
	print_r(array_count_values($arr));	
	echo "</pre>";


echo "<h2>in_array()</h2>";
	echo in_array("anjali", $arr);


echo "<h2>array_search()</h2>";
	echo array_search(9, $arr);


echo "<h2>array_replace()</h2>";

	$fruit=["banana","mango","apple",2=>"plum"];
	$veggie=["carrot","pea"];
	$color=['a'=>"red",'b'=>"green",'c'=>"orange"];

	$newArray1=array_replace($fruit, $veggie);
	print_r($newArray1);
	echo "<br>";
	$newArray2=array_replace($veggie,$color);
	print_r($newArray2);


echo "<h2>array_replace_recursive()</h2>";
	$array1=array("a"=>array("red"),"b"=>array("green","pink"));
	$array2=array("a"=>array("yellow"),"b"=>array("black"));
	$newArr=array_replace_recursive($array1, $array2);
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";


echo "<h2>array_push() and array_pop()</h2>";	
	$student=["Nitu","Anjali","Gaurav","Rajnandani","Rocky","Rupa"];
	array_pop($student);
	print_r($student);

	echo "<br>";

	array_push($student, "Chhoti");
	print_r($student);

	echo "<br>";

	array_push($student, "Rupa","Komal","Saurav");
	print_r($student);


echo "<h2>array_shift() and array_unshift()</h2>";
	$arrShift=array_shift($student);
	print_r($arrShift);

	echo "<br>";

	$arrUnshift=array_unshift($student, "Rahul");
	print_r($student);


echo "<h2>array_merge() and array_combine() and array_merge_recursive()</h2>";	
	$fruits=["mango","plum","banana","apple"];
	$vegetables=["cucumber","pea","chilli","onion"];

	print_r(array_merge($fruits,$vegetables));

	echo "<br>";

	print_r(array_combine($fruits, $vegetables));

	echo "<br>";
	print_r(array_merge_recursive($fruits,$vegetables));


echo "<h2>array_slice() and array_splice()</h2>";	
	$colors=["red","green","blue","black","violet","white","orange"];
	print_r(array_slice($colors, 1,2));
	echo "<br>";
	print_r(array_slice($colors, -2,1));
	echo "<br>";
	print_r(array_slice($colors, -2,2,true));

	echo "<br>";
	print_r(array_splice($colors, 1));
	echo "<br>";
	$arrSplice=array_splice($colors, 2,1);
	print_r($colors);
	echo "<br>";
	print_r(array_splice($fruits, 2,4));
	echo "<br>";


echo "<h2>array_keys()</h2>";	
	$color1=[
		"first"=>"red",
		"second"=>"green",
		"third"=>"yellow"
	];
	$newArr=array_keys($color1);
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";

	$newArr1=array_key_first($color1);
	echo "<pre>";
	print_r($newArr1);
	echo "</pre>";

	$newArr2=array_key_last($color1);
	echo "<pre>";
	print_r($newArr2);
	echo "</pre>";

	print_r(array_key_exists("third", $color1));

	echo "<br>";

	$arrKey=key_exists("fifth",$color1);
	if ($arrKey) {
		echo "key exists in array";
	}else{
		echo "key does not exists in array";
	}


echo "<h2>array_intersect()</h2>";	
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"yellow");
	$a2=array("a"=>"red","f"=>"green","d"=>"purple");
	$a3=array("a"=>"red","f"=>"black","d"=>"yellow");

	$newArray=array_intersect($a1, $a2,$a3);
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";

	$newArray1=array_intersect_key($a1, $a2);
	echo "<pre>";
	print_r($newArray1);
	echo "</pre>";

	$newArray2=array_intersect_assoc($a1, $a2);
	echo "<pre>";
	print_r($newArray2);
	echo "</pre>";

	function compareFunction($a,$b)
	{
		if ($a===$b) {
			return 0;
		}
		return ($a>$b)?1:-1;
	}

	function compareValue($a,$b)
	{
		if ($a===$b) {
			return 0;
		}
		return ($a>$b)?1:-1;
	}
	$newArray1=array_intersect_uassoc($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($newArray1);
	echo "</pre>";

	$newArray1=array_uintersect_assoc($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($newArray1);
	echo "</pre>";
	
	$newArray1=array_intersect_ukey($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($newArray1);
	echo "</pre>";

	$newArray1=array_uintersect($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($newArray1);
	echo "</pre>";

	$newArray1=array_uintersect_uassoc($a1, $a2,"compareFunction","compareValue");
	echo "<pre>";
	print_r($newArray1);
	echo "</pre>";


echo "<h2>array_diff()</h2>";	
	$arrDiff=array_diff($a1, $a2);
	echo "<pre>";
	print_r($arrDiff);
	echo "</pre>";

	$arrDiff1=array_diff($a1, $a2,$a3);
	echo "<pre>";
	print_r($arrDiff1);
	echo "</pre>";

	$arrDiffKey=array_diff_key($a1, $a2);
	echo "<pre>";
	print_r($arrDiffKey);
	echo "</pre>";

	$arrDiffAssoc=array_diff_assoc($a1, $a2);
	echo "<pre>";
	print_r($arrDiffAssoc);
	echo "</pre>";

	$arrDiffUassoc=array_diff_uassoc($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($arrDiffUassoc);
	echo "</pre>";

	$arrUdiffassoc=array_udiff_assoc($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($arrUdiffassoc);
	echo "</pre>";

	$arrUdiff=array_udiff($a1, $a2,"compareFunction");
	echo "<pre>";
	print_r($arrUdiff);
	echo "</pre>";

	$arrUDiffUassoc=array_udiff_uassoc($a1, $a2,"compareFunction","compareValue");
	echo "<pre>";
	print_r($arrUDiffUassoc);
	echo "</pre>";


echo "<h2>array_values() nd array_unique()</h2>";	
	$arrVal=array_values($a1);
	echo "<pre>";
	print_r($arrVal);
	echo "</pre>";

	$arrUnique=array_unique($a1);
	echo "<pre>";
	print_r($arrUnique);
	echo "</pre>";


echo "<h2>array_column() nd array_chunk()</h2>";	
	$array=array(
		array(
			'id'=>2201,
			'first_name'=>'Anil',
			'last_name'=>'kapoor',
		),
		array(
			'id'=>2202,
			'first_name'=>'Anu',
			'last_name'=>'kapoor',
		),
		array(
			'id'=>2203,
			'first_name'=>'Anju',
			'last_name'=>'singh',
		)
	);

	$arrColumn=array_column($array, 'first_name');
	echo "<pre>";
	print_r($arrColumn);
	echo "</pre>";

	$arrColumn1=array_column($array, 'last_name','id');
	echo "<pre>";
	print_r($arrColumn1);
	echo "</pre>";

	$cars=["Volvo","BMW","Toyota","Honda","Opel"];
	$arrChunk=array_chunk($cars, 2);
	echo "<pre>";
	print_r($arrChunk);
	echo "</pre>";

	$age=array(
		"Nisha"=>"18",
		"Maina"=>"16",
		"Komal"=>"17",
		"Salu"=>10
	);
	$arrChunk1=array_chunk($age, 3);
	echo "<pre>";
	print_r($arrChunk1);
	echo "</pre>";

	$arrChunk2=array_chunk($age, 3,true);
	echo "<pre>";
	print_r($arrChunk2);
	echo "</pre>";


?>