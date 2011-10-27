<?php
// #3
// write a function that takes an array of strings as an argument and returns the number of spaces
function numSpaces($myStrings)
{
	return substr_count(implode('', $myStrings), ' ');
}