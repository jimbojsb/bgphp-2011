<?php
$cars = array(array("name" => "honda accord", "year" => 2011),
              array("name" => "honda civic", "year" => 1995),
              array("name" => "toyota camry", "year" => ""));
?>
<html>
    <table border="1">
        <?foreach ($cars as $car) {?>
            <tr>
                <?foreach ($car as $key => $val){?>
                    <td class="<?=$class?>"><?=$key?> : <?=$val?></td>
                <?}?>
            </tr>
 
        <?}?>
    </table>
</html>

<html>
    <table border="1">
        <?php
            foreach ($cars as $car) {
                echo '<tr>';
                foreach ($car as $key => $val){
                    echo '<td class="' . $class . '">';
                    echo $key;
                    echo ':';
                    echo $val;
                    echo '</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
</html>