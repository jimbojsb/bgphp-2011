<?php
// #2
// write a function that takes an array of strings as an argument and returns the number of words
function numWords($myStrings)
{
	$count = 0;
	foreach ($myStrings as $string) {
		$count += str_word_count($string);
	}
	return $count;
}