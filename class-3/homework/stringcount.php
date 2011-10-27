<?php
// #5
// write a function that takes an array of strings as an argument, and a string as a second argument. return the number
// of times the second string appears in the array of strings
function stringCount($myStrings, $search)
{
    $count = 0;
    foreach ($myStrings as $string) {
        $noMoreFound = false;
        $offset = 0;
        while (!$noMoreFound) {
            $position = strpos($string, $search, $offset);
            if ($position !== false) {
                $count++;
                $offset += $position + 1;
            } else {
                $noMoreFound = true;
            }
        }
    }
    return $count;
}