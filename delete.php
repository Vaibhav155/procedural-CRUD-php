<?php 

include 'connect.php';

$id=$_GET['id'];
 
$sql4="delete from student where id='$id'";

$final=mysqli_query($conn,$sql4);
if($fInal)
{
   echo "entry deleted successfully";
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