<?php

$colors = array('red', 'green', 'blue', 'yellow', 'purple');

$numbers = array("lessthan10" => array(1,2,3,4,5,6,7,8,9),
                 "lessthan20" => array(10,11,12,13,14,15,16,17,18,19));

// References
// http://us3.php.net/manual/en/ref.array.php
// You shouldn't need anything more than booleans, arrays, and operators to accomplish this

// #1
// update your list of colors to be sorted in alphabetical order
sort($colors);

// #2
// print out the 3rd element in the $colors array, after you sorted it
echo $colors[2] . '<br/>';

// #3
// create another array of colors that are available as M&Ms
// create a new array that contains only the items from $colors that 
// are available as M&M's
$mms = array('green', 'blue', 'yellow', 'red', 'brown', 'orange');
$newArray = array_intersect($mms, $colors);

// #4
// calculate the sum of all the numbers contained in $numbers and print it out
$bigArray = array_merge($numbers["lessthan10"], $numbers["lessthan20"]) . '<br/>';
echo array_sum($bigArray);

// #5
// print out the total number of array slots in $colors and $numbers. Then print if that total number is less than 10.
// array_keys($numbers) == array('lessthan10', 'lessthan20');
$totalNum = count($colors) + count(array_keys($numbers));
echo $totalNum < 10 . '<br/>';
