<?php
require_once 'lib/users.php';
require_once 'lib/utility.php';

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($confirmPassword === $password) {
        $passwordIsOk = true;
        if (strlen($password) < 6) {
            $passwordIsOk = false;
        }
        if (strtoupper($password) == $password) {
            $passwordIsOk = false;
        }
        if (strtolower($password) == $password) {
            $passwordIsOk = false;
        }
        if (str_replace(range(0,9), '', $password) == $password) {
            $passwordIsOk = false;
        }
        if ($passwordIsOk) {
            createUser($username, $password);
            redirect('/vanity/login.php');
        }
        // output a useful error message
    }
}


?>


<?include 'includes/header.php'?>


<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>username:</label>
    <input type="text" name="username"/><br/>
    <label>password:</label>
    <input type="password" name="password"/><br/>
    <label>confirm password:</label>
    <input type="password" name="confirm_password"/><br/>
    <input type="submit"/>
</form>

<?include 'includes/footer.php'?>