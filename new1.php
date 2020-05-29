<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="GET">
        <input name="person" type="text">
        <button>SUBMIT</button>
    </form>

    <?php

    //STRING//
    $word = "Coding is ok i guess ";

    ///integer//
    $num = 20;


    //boolean//
    $iswhat = true;

    //array//
    $list = array("nick", "nicky", "nicholas");
    echo $list['0'];


    ////$variable///
    ///use . as a seperator///
    $name = $_GET['person']; ///sets the variable equal to the inout box
    echo $name . " is a nice looking guy";



    $a = 10;
    $b = "10";

    if ($a === $b xor $a == 50 and $b < 1) {
        echo "False";
    } else {
        echo "True";
    }
    ?>




</body>

</html>