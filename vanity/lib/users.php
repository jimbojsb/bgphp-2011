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

        $hashPassword = sha1($password);
        if ($username == $storedUsername &&
            $hashPassword == $storedPassword) {
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

function logout()
{
    session_start();
    unset($_SESSION['username']);
}

function createUser($username, $password)
{
    $hashedPassword = sha1($password);
    $userData = $username . USER_SEPARATOR . $hashedPassword . PHP_EOL;
    file_put_contents(USERS_FILE, $userData, FILE_APPEND);
}