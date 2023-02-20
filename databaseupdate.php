<?php

$con=mysqli_connect("localhost","root","Prabjot","shop");

$sql = "UPDATE `shop` SET `id`= '5' WHERE 'name' = 'gary'";

mysqli_query($con,$sql); 

?>
