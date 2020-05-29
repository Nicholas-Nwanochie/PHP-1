<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /*
$GLOBALS
$_COOKIE
$_GET
$_POST
$_SESSION

*/
    $x = 25;

    function something()
    {
        $y = 10;
        echo  $GLOBALS['x'];
    }

    
    something();
    ///if method is POST not GET
    echo $_POST['name'];
    ?>


<form method="POST">
<input type="hidden" name="name" value="nick">
<button type="submit">Press Me!</button>


</form>
</body>

</html>