<pre>
<?php
$lines = file('test.txt');
print_r($lines);

echo "The number of lines in test.txt is: " . count($lines) . PHP_EOL;

echo PHP_EOL;

$fileData = file_get_contents('test.txt');

echo $fileData;