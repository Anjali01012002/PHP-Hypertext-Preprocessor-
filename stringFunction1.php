<?php

echo "<h2> explode() , join() and implode()</h2>";	
	$str="Hello world. It's a beautiful day.";

	$arrExplode=explode(" ", $str);
	echo "<pre>";
	print_r($arrExplode);
	echo "</pre>";

	$arrExplode1=explode(" ", $str,3);
	echo "<pre>";
	print_r($arrExplode1);
	echo "</pre>";

	$array=array("Hello","world!","Beautiful","Day");
	$str=implode(" ", $array);
	echo "$str";
	echo "<br>";
	echo implode(",", $array);
	echo "<br>";
	echo implode("<br>", $array);
	echo "<br>";
	echo join("-", $array);


echo "<h2> str_split() , chunk_split()</h2>";
	$str1="Anjali chaurasiya";

	$strSplit=str_split($str1);		
	echo "<pre>";
	print_r($strSplit);
	echo "</pre>";

	$strSplit1=str_split($str1,2);		
	echo "<pre>";
	print_r($strSplit1);
	echo "</pre>";

	$chunkSplit=chunk_split($str1,2,"...");		
	echo "<pre>";
	print_r($chunkSplit);
	echo "</pre>";


echo "<h2> uppercase and lowercase function</h2>";	
	echo strtolower($str1)."<br>";
	echo strtoupper($str1)."<br>";
	echo ucfirst($str1)."<br>";
	echo lcfirst($str1)."<br>";
	echo ucwords($str1)."<br>";


echo "<h2> length and count function</h2>";	
	echo strlen($str1)."<br>";	
	echo str_word_count($str1)."<br>";	
	echo str_word_count($str1,0)."<br>";

	$arrWord=str_word_count($str1,1);
	echo "<pre>";
	print_r($arrWord);
	echo "</pre>";	

	$arrWord1=str_word_count($str1,2);
	echo "<pre>";
	print_r($arrWord1);
	echo "</pre>";

	$substr="hello we are playing playing";
		echo substr_count($substr, "playing")."<br>";

	$substr1="hello we are playing playing";
		echo substr_count($substr, "playing",10,15)."<br>";	


echo "<h2> find position function</h2>";
	$sPos="I love php, I love php too!";
	echo strpos($sPos, 'php')."<br>";	
	echo strpos($sPos, 'php',-20)."<br>";	
	echo strrpos($sPos, 'php')."<br>";	
	echo strrpos($sPos, 'php',10)."<br>";	
	echo stripos($sPos, 'PHP')."<br>";
	echo stripos($sPos, 'php',10)."<br>";
	echo strripos($sPos, 'PHP')."<br>";	
	echo strripos($sPos, 'php',2)."<br>";	



echo "<h2> find search string function</h2>";
	echo strstr($sPos, "php")."<br>";	
	echo strstr($sPos, "php",true)."<br>";
	echo strchr($sPos, "php")."<br>";
	echo strchr($sPos, "php",true)."<br>";
	echo strrchr($sPos, "php")."<br>";
	echo stristr($sPos, "PHP")."<br>";
	echo stristr($sPos, "php",true)."<br>";
	echo strpbrk($sPos, "ph")."<br>";


echo "<h2> substr() function</h2>";	
	echo substr($sPos, 5)."<br>";
	echo substr($sPos, -10)."<br>";
	echo substr($sPos,0,10)."<br>";
	echo substr($sPos,10,20)."<br>";
	echo substr($sPos,10,-10)."<br>";


echo "<h2> replace function</h2>";	
	echo str_replace("php", "java", $sPos)."<br>";	
	echo str_replace("php", "", $sPos)."<br>";	

	$find=["I","love"];
	$replace=['i',"like"];
	echo str_replace($find,$replace, $sPos."<br>");	


echo "<h2> compare function</h2>";	
	echo strcmp("Hello world!","Hello world! Hello")."<br>";	
	echo strncmp("Hello world!","Hello world! Hello",6)."<br>";
	echo strcasecmp("HELLO world!","hello world!")."<br>";
	echo strncasecmp("HELLO world!","hello world! hello",5)."<br>";
	echo strnatcmp("hello world!","hello world!")."<br>";
	echo strnatcmp("2hello world!","10hello world!")."<br>";
	echo strnatcasecmp("2hello world!","2hello WORLD!")."<br>";
	echo substr_compare("hello world!","world!",6)."<br>";
	echo substr_compare("hello world!","world!",0)."<br>";
	echo substr_compare("hello world!","world!",0,3)."<br>";
?>