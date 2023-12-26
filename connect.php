<?php

// database details

$server="localhost";
$user="root";
$password="123456";
$dbname="task";


// connecting mysql with php

$conn = mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
   die("connection failed".mysqli_connect_error());
}

// echo "connection successful";

?>
