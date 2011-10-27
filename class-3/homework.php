<?php
require_once 'homework/numalphanumeric.php';
require_once 'homework/numspaces.php';
require_once 'homework/numuppercase.php';
require_once 'homework/numwords.php';
require_once 'homework/stringcount.php';
require_once 'homework/wordcounts.php';
require_once 'homework/strings.php';

echo "The answer to #1 is: " . numAlphanumeric($strings) . '<br>';
echo "The answer to #2 is: " . numWords($strings) . '<br>';
echo "The answer to #3 is: " . numSpaces($strings) . '<br>';
echo "The answer to #4 is: " . numUpperCase($strings) . '<br>';
echo "The answer to #5 is: " . stringCount($strings, 'the') . '<br>';
echo "The answer to #6 is: ";
wordCounts($strings);




