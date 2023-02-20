<?php

$con=mysqli_connect("localhost","root","Prabjot","shop");

$sql = "UPDATE `shop` SET `name`='steve' WHERE 'id' = '0'";
$sql = "UPDATE `shop` SET `id`='1' WHERE name = 'bob'";
$sql = "UPDATE `shop` SET `id`='2' WHERE name = 'alan'";
$sql = "UPDATE `shop` SET `id`='3' WHERE name = 'billy'";
$sql = "UPDATE `shop` SET `id`='4' WHERE name = 'gary'";

mysqli_query($con,$sql); 

?>
