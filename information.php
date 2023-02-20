<?php 

// Connect to the database is stored within $con
// localhost = serer, username = root, password = "Prabjot", DBname = "shop"

$con=mysqli_connect("localhost","root","Prabjot","shop");


// Checking connection
// If it doesn't connect to the database, it will show this error = "Failed to conect to MySQL"
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sqlone = "UPDATE shop SET name = 'bobert' WHERE name = 'bob'";
mysqli_query($con, $sqlone);


$sql = "SELECT name, id FROM shop ORDER BY id";

// Will store name, id e.g. SQL query as a array
$result = mysqli_query($con,$sql);


// This will fetch the array, and is stored in $row
// This takes two parameters which is $result, MYSQLI_NUM
$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

// Same this as above except you type in name and id
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["name"], $row["id"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>
