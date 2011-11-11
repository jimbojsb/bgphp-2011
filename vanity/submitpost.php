<?php
require_once 'lib/posts.php';

if ($_POST) {
    createPost($_POST['username'], $_POST['content']);
}

include 'includes/header.php';

?>

<h1>Submit a new post:</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>Username:</label>
    <input type="text" name="username"/><br/><br/>
    <label>Post: </label>
    <textarea rows="5" cols="30" name="content"></textarea><br/><br/>
    <input type="submit"/>
</form>

<? include 'includes/footer.php'; ?>