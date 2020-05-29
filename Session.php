<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <li><a href="session.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>

    </ul>
    <?php
    $_SESSION['username'] = "nick1212";
    echo  $_SESSION['username'];
if (!isset($_SESSION['username'])){
    echo "you are not logged in";
}else{

    echo "you are logged in";
}



    ?>
</body>

</html>