<?php
$myString = "My name is Josh and my favorite color is red.";

// substr can use negative indexes as well
$firstTwoLetters = substr($myString, 0, 2);
$lastTwoLetters = substr($myString, -2);
$everythingButFirstTwo = substr($myString, 3);


$myString = "My name is Josh and my favorite color is red.";
$nameLocation = strpos($myString, "is");
$stringContainsMy = (strpos($myString, "My") !== FALSE); // because position is

if ($stringContainsMy) {
    //echo "Yes, it contains My";
}


$myString = "My name is Josh and my favorite
color is red.";
$lengthOfMyString = strlen($myString);
//echo $lengthOfMyString;



$myString = "my name is Josh";

// My name is Josh"
$newString = ucfirst($myString);

// my name is josh
$newString = strtolower($myString);

// MY NAME IS JOSH
$newString = strtoupper($myString);

// My Name Is Josh
$newString = ucwords($myString);

// $pieces = array('split', 'this', 'string', 'up');
$myString = "split this string up";
$pieces = explode(' ', $myString);

// $newstring = "my_name_is_josh";
$pieces = array('my', 'name', 'is', 'josh');
$newString = implode('_', $pieces);




$myString = "apples are red";
// $newString = "apples are fruit";
//$newString = str_replace("red", "fruit", $myString);

$newString = str_replace(array("apples"), array("bananas", "yellow"), $myString);
//echo $newString;

for ($c = 0; $c < strlen($myString); $c++) {
    echo substr($myString, $c, 1);
}

































