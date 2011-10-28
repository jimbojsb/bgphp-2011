<? if ($_POST) {?>
    <? print_r($_POST); ?>
<?} else {?>
<html>
<body>
    <form action="post.php" method="POST">
        <input name="email">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?}?>
