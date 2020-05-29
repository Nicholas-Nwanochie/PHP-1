<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="file.css">
</head>

<body>

   


    <?php

    $dayofweek = date("w");


    switch ($dayofweek) {


        case 1:
            echo "Monday";
            break;

        case 2:
            echo "tuesday";
            break;

        case 3:
            echo "<p>wednsday</p>";
            break;

        case 4:
            echo "thursday";
            break;

        case 5:
            echo "friday";
            break;

        case 6:
            echo "saturday";
            break;

        case 7:
            echo "sunday";
            break;

        default:
            echo "Thats not a correct input";
            break;
    }
    ?>


</body>

</html>