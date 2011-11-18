<?php
require_once 'lib/users.php';
require_once 'lib/utility.php';
logout();
flashMessage("You've been logged out");
redirect('/vanity/login.php');
