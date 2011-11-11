<?php
define('USERS_FILE', 'users.txt');
define('USER_SEPARATOR', ':');

function loginUser($username, $password)
{
    $users = file(USERS_FILE);
    $foundUser = false;
    foreach ($users as $user) {
        $user = trim($user);
        list($storedUsername, $storedPassword) = explode(USER_SEPARATOR, $user);

        if ($username == $storedUsername &&
            $password == $storedPassword) {
            $foundUser = true;
            break;
        }
    }

    if ($foundUser) {
        session_start();
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }

}


function getLoggedInUsername()
{
    session_start();
    if ($_SESSION['username']) {
        return $_SESSION['username'];
    }
    return false;
}