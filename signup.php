<?php

$servername="localhost";
$username="root";
$password="";
$database="wedding";
$con=mysqli_connect($servername, $username, $password, $database);
if(mysqli_error($con)){
    die("connection failed:". mysqli_error($con));
}


$name=$_POST['Name'];
$email=$_POST['Email'];
$password= $_POST['Password'];
$contact=$_POST['Contact'];
$event=$_POST['Event_Date'];
$pkg=$_POST['Package'];
$location=$_POST['Location'];

$sql="insert into wedding values('$name', '$email','$password', '$contact', '$event','$pkg', '$location')";
if(mysqli_query($con, $sql)){
    echo "<script> alert('You are registererd successfully')</script>";
    include_once("Ulogin.php");
    
}
else{
    echo "<script> alert('This Email Address already exist')</script>";
    include_once "sign.php";
}
mysqli_close($con);
?>