<?php
include_once './databaseconnect.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$sql = "SELECT * FROM users where user_first = 'nick';";
$result = mysqli_query($conn,$sql);



$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
while($row= mysqli_fetch_assoc($result)){
echo $row['user_uid']. "<br>";

}
}
    ?>
</body>
</html>