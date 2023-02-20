<?php

$con=mysqli_connect("localhost","root","Prabjot","shop");

$sql = "INSERT INTO `shop` (`name`, 'id') VALUES('mazza', '3');

mysqli_query($con,$sql); 

?>
