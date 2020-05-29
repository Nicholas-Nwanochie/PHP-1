
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php

$x = 7;


do{
   echo $x;
echo " good job<br>  ";
$x ++; 
}
while($x <= 20);


for($i = 0; $i <12; $i++){
    echo $i ;
    echo "<br>";
}

$array = array("nick","nicky","nicholas");
foreach($array as $loopdata){
    echo " My name is ". $loopdata."<br>";

}

    $array1 = array("first", "second", "third");
echo $array1[2];

?>  
</body>
</html>

