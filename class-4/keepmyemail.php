<?php
    $email = $_GET['email'];
?>
<html>
<body>
    <form action="keepmyemail.php" method="GET">
        <input name="email" value="<?=$email?>">
        <input type="submit" name="submit">
    </form>
</body>
</html>