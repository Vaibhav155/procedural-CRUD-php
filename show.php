<!DOCTYPE html>
<html>
<head>
   <style>
     
      th{
        padding: 20px;
        border: 1px solid black;
        height:100px;
        background-color:aquamarine;
        width:20px;
      }
      
      td{
        padding: 10px;
        border: 1px solid black;
        font-size: 12px;
        background-color:DarkSeaGreen;
        white-space:pre-wrap; 
        word-wrap:break-word
      }

   </style>

</head>

<body>
   <table style="border: 1px solid black; ">
   <tr >
      <th> Unique id </th>
      <th> first name </th>
      <th> last name</th>
      <th> email </th>
      <th> password </th>
      <th> birthday </th>
      <th> course</th>
      <th> education </th>
      <th> state </th>
      <th> address </th>
      <th> edit </th>
      <th> delete </th>
   </tr>
</body>



</html>

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

$id=$_GET['id'];
if(isset($id))
{ 
  
$sql4="delete from student where id='$id'";
$final=mysqli_query($conn,$sql4);
header("Refresh:0; url=show.php");
}

else
{

//query that would select data from database

$sql2=" select * from student " ;
$result=mysqli_query($conn,$sql2);                   // this function actually runs query against the database

if(mysqli_num_rows($result)>0)                       // if no. of rows are not empty 
{
     while($row=mysqli_fetch_assoc($result))         // fetching data row by row 
     {
      echo 
      "<tr>
         <td>".$row['id']."</td>
         <td>".$row['fname']."</td>
         <td>".$row['lname']."</td>
         <td>".$row['email']."</td>
         <td>".$row['password']."</td>
         <td>".$row['dob']."</td>
         <td>".$row['course']."</td>
         <td>".$row['education']."</td>
         <td>".$row['state']."</td>
         <td>".$row['address']."</td>
         <td> <a href='form.php?id=$row[id]'> <input type='submit' value='Edit'> </a> </td>
         <td> <a href='show.php?id=$row[id]'> <input type='submit' value='Delete'> </a> </td> 

       </tr>" ;
     
     
       
     }
} 
}
   mysqli_close($conn);                                 // closing the connection


?>

