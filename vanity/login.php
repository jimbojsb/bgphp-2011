<?php
require_once 'lib/users.php';
require_once 'lib/utility.php';

if ($_POST) {
    $success = loginUser($_POST['username'], $_POST['password']);

    if ($success) {
        redirect('/vanity/index.php');
    }

}


include 'includes/header.php';
?>
<?if (isset($success) && !$success){?>
    <h2>INVALID USERNAME OR PASSWORD</h2>
<?}?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>username:</label>
    <input type="text" name="username"/><br/>
    <label>password:</label>
    <input type="password" name="password"/><br/>
    <input type="submit"/>
</form>

<?
include 'includes/footer.php';
?>