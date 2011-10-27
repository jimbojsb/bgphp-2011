<?php
function changeMyName($name, $whatToDo = 'reverse')
{
    switch($whatToDo) {
        case 'reverse':
            return strrev($name);
            break;
        case 'uppercase':
            return strtoupper($name);
            break;
        default:
            return $name;
    }
}

$myNewName = changeMyName("josh", "titlecase");
echo 'My new name is: $myNewName';