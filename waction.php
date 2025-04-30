<?php
$servername="localhost";
$username="root";
$password="";
$database="vendors";

$con=mysqli_connect($servername, $username, $password, $database);
if(mysqli_error($con)){
    die("connection failed:". mysqli_error($con));
}

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['Email'];
    $contact=$_POST['Contact'];
    $role=$_POST['Role'];
        
    $sql="insert into vendors values('$fname','$lname','$email', '$contact', '$role','$resume')";
    if(mysqli_query($con, $sql)){
        echo "<script> alert('You are registererd successfully')</script>";
        //changes
        include_once("home.php");
    }else{
        echo "<script> alert('You are registererd successfully')</script>";
        include("wwu.php");
    }
    
?>