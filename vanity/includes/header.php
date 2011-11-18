<html>
<head>
    <title>Vanity</title>
    <link rel="stylesheet" type="text/css" href="css/global.css"/>
</head>
<body>
<div id="header">
    <p>Vanity</p>
</div>
<div id="main">
    <div id="nav">
        [ <a href="index.php">Home</a> | <a href="submitpost.php">Submit New Post</a> |

        <?if (getLoggedInUsername()) {?>
            Welcome, <?=getLoggedInUsername()?> (<a href="logout.php">Log Out</a>)
        <?}else{?>
            <a href="login.php">Login</a>
        <?}?>
        ]
    </div>
<?
    $message = flashMessage();
?>
    <?if ($message) {?>
        <div id="flashmessage"><?=$message?></div>
    <?}?>