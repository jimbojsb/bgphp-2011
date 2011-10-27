<?php
// #1
// write a function that takes an array of strings as an argument and returns the number of alphanumeric characters
function numAlphanumeric($myStrings)
{
	$count = 0;
	foreach ($myStrings as $string) {
		for ($c = 0; $c < strlen($string); $c++) {
			if (ctype_alnum($string{$c})) {
				$count++;
			}
		}
	}
	return $count;
}