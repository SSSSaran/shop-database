<?php

$con=mysqli_connect("localhost","root","Prabjot","shop");

$sql = "UPDATE `shop` SET `Name`='demo2' WHERE id = '3'";

mysqli_query($con,$sql); 

?>
