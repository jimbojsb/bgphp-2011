<html>
<head>
    <style>
        .green {
            background-color: green;
        }
        .red {
            background-color: red;
        }
        .yellow {
            background-color: yellow;
        }
        div {
            color: white;
        }
    </style>
</head>
<?php
    // do something really groundbreaking to find the Dow index
    // ...
    // ...
    $djIndex = 10000;
    if ($djIndex > 12000) {
        $class = 'green';
    } else if ($djIndex > 10000) {   
        $class = 'yellow';
    } else {
        $class = 'red';
    }

?>


<div class="<?=$class?>">
    The Dow is at: <?=$djIndex?>.
</div>

<?php


?>

</html>