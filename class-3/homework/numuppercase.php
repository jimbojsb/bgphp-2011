<?php
// #4
// write a function that takes an array of strings as an argument and returns the number of capital letters are contained in $strings
function numUpperCase($myStrings)
{
	$count = 0;
	foreach ($myStrings as $string) {
		for ($c = 0; $c < strlen($string); $c++) {
			if (ctype_upper($string{$c})) {
				$count++;
			}
		}
	}
	return $count;
}