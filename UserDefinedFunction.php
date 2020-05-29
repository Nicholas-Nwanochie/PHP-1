<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
$x = 100;
    function newCalc($x) {
        $new = $x * 0.75;
echo "here is 75% of your input: "."<br>".$new."<br>";

    }
    newCalc($x);
    $a = 1000;
newCalc($a);
    ?>



</body>

</html>