<?php

$con=mysqli_connect("localhost","root","Prabjot","shop");

$sql = "UPDATE `shop` SET `name`='steve' WHERE 'id' = '0'";

mysqli_query($con,$sql); 

?>
