<?php

// database details

$server = "localhost";
$user = "root";
$password = "123456";
$dbname = "task";


// connecting mysql with php

$conn = mysqli_connect($server, $user, $password, $dbname);
if (!$conn) {
   die("connection failed" . mysqli_connect_error());
}

// echo "connection successful";

"<br>";

// fetching data from form.php

if (isset($_POST['submit']))                     //  need to focus here case sensitivity is important
{
   // print_r($_POST);
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $birthday = $_POST['birthday'];
   $course = $_POST['course'];
   $education = $_POST['education'];            // array fetching values from checkbox
   $new = implode(",", $education);             // implode function makes a string of elements of array
   $state = $_POST['state'];
   $address = $_POST['address'];
}

"<br>";



if (isset($_POST['editId'])) 
{
   $ied = $_POST['editId'];
   //echo " hi hello";
   $sql4 = "update student set `fname`='$fname', `lname`='$lname' , `email`='$email' , `password`='$password' , `dob`='$birthday', `course`='$course' , `education`='$new', `state`='$state', `address`='$address'  where `id`='$ied'";
   $res = mysqli_query($conn, $sql4);
   if ($res) {
      echo " entries successfully updated";
   }
} 

else {
   // query that would insert data
   $sql = "INSERT INTO student(`fname`,`lname`,`email`,`password`,`dob`,`course`,`education`,`state`,`address`) values('$fname','$lname','$email','$password','$birthday','$course','$new','$state','$address')";

   // this function actually runs the query against the database and hit the above statement of sql
   $check = mysqli_query($conn, $sql);
   if ($check) {
      echo " entries added successfully";
   }
}

mysqli_close($conn);
?>

<html>

<head>

</head>

<body>
   <br>
   <a href="show.php"><button type="button" style="background-color:aqua; display:inline-block; margin-right:auto; margin-left:auto; color:black;">Click here</button></a>
</body>

</html>

<?php




mysqli_close($conn);                                 // closing the connection


?>