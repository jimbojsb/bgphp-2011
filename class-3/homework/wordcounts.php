<?php
// #6
// write a function that prints out a table of information about the words contained in an array of strings. the table should
// have 2 columns, once which contains the word, and one which contains how many times the word appears in the array.
//
// Example:
// | Austin  | 1 |
// | talking | 1 |
// | muffins | 2 |
function wordCounts($myStrings)
{
    $wordCounts = array();
    foreach ($myStrings as $string) {
        $words = explode(" ", $string);
        foreach ($words as $word) {
            $bareWord = strtolower(str_replace(array(".", " ", ",", ":", "'", ":"), "", $word));
            $wordCounts[$bareWord]++;
        }
    }
    arsort($wordCounts);
    echo '<pre>';
    foreach ($wordCounts as $word => $count) {
        echo "|\t$word\t|\t$count\t|" . PHP_EOL;
    }
    echo '</pre>';
}