<?php
include('connection.php');
$email= $_POST['email'];
$password= $_POST['password'];

//to prevent from mysqli injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);

$sql="select *from wedding where email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
    echo "<script> alert('Login Successful') </script>";
    include_once("users.php");
    
}
else{
    echo "<script> alert(Login Failed. Invalid Email or Password.)</script>";
    include_once "ULogin.php";
}
?>