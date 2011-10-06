
<?php

//asignment (and implicit declaration)
$myVariable1 = "Test Value";

echo ($myVariable1);

$anotherString = "Test Value 2";
$myNumber = 1;
$myOtherNumber = 2;

$myTotal = $myNumber + $myOtherNumber;
?>

<br/>
    <br/>
    <br/>
    <br/>
    <br/>
<?php
//
//echo($myTotal);

//concatenation, put any number of things together as a string
//shorthand works for this too, .=
$myFullText = $myVariable1 . " " . $anotherString;

?>


<html>
<head>
    <title><?php echo $myFullText?></title>
</head>
<body>
    <h1><?=$myFullText?></h1>
</body>
</html>



