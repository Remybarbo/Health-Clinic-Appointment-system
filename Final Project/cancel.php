<?php
session_start();
$host = "localhost:3307";
$dbname = "appointment_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);


if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql="delete from `clientappointment` where ID=$id";
  $result=mysqli_query($conn, $sql);
  if($result){
    header("Location: adminTable.php");
  }
  else {
    die(mysqli_error($conn));
  }
}


 ?>
