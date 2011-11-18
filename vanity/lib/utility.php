<?php
function redirect($url)
{
    header("Location: $url");
    exit();
}

function flashMessage($message = null)
{
    session_start();
    if ($message) {
        $_SESSION['message'] = $message;
    } else {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
        return $message;
    }
}