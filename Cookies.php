<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/*

$_COOKIE
saves info on the user on the browser side can have a max of 20
ends when the time limit you set is over or you tell it to

$_SESSION
save info on the user on the server side
ends as soon as browser is off

*/


///milliseconds in a day 86400
//if you want to destroy it now then just set the time to be negative or subtract a number from it

setcookie("name","nicky",time() + 86400);

$_SESSION['name'] = "nicky" ;


    ?>
</body>
</html>