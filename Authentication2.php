<?php
include('connection2.php');
$username= $_POST['username'];
$password= $_POST['password'];

//to prevent from mysqli injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);

$sql="select * from admin where Username='$username' and Password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
    echo "<script> alert('Login Successful');</script>";
    include_once "Admin.php";

}
else{
    echo "<script> alert('Login Failed. Invalid Username or Password.');</script>";
    include_once "ALogin.php";

}
?>