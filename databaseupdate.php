<?php

$con=mysqli_connect("localhost","root","Prabjot!23","shop");

$sql = "UPDATE `shop` SET `Name`='demo2' WHERE id = '3'";

mysqli_query($con,$sql); 

?>
