<?php
require_once 'lib/posts.php';
require_once 'lib/users.php';
require_once 'lib/utility.php';

$username = getLoggedInUsername();
if (!$username) {
    redirect('/vanity/login.php');
}

if ($_POST) {
    createPost($username, $_POST['content']);
    redirect('/vanity/index.php');
}

include 'includes/header.php';

?>

<h1>Submit a new post:</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>Post: </label>
    <textarea rows="5" cols="30" name="content"></textarea><br/><br/>
    <input type="submit"/>
</form>

<? include 'includes/footer.php'; ?>