<?php

$con=mysqli_connect("localhost","root","Prabjot","shop");

$sql = "UPDATE `shop` SET `id`='2' WHERE name = 'bob'";

mysqli_query($con,$sql); 

?>
