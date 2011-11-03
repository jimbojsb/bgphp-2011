<?php
$oneDay = 86400;
if ($_COOKIE['my_test_cookie']) {
    echo "my_test_cookie: " . $_COOKIE['my_test_cookie'];
    setcookie('my_test_cookie', null, time() - 10);

} else {
    setcookie('my_test_cookie', 'test_value', time() + (5 * $oneDay));
}
