<?php
$host="localhost";
$user="root";
$password="123456";
$db_name="website";
$db_name1="vendors";

$con= mysqli_connect($host,$user,$password,$db_name);

$con1= mysqli_connect($host,$user,$password,$db_name1);

if(mysqli_connect_errno()){
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$sql="select * from wedding";
$result= mysqli_query($con, $sql);

$sql1="select * from vendors";
$result1= mysqli_query($con1, $sql1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupid's Crew|admin</title>
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-dark">
<header>
            <div class="topnav" id="myTopnav">
                <picture>
                    <source media="(min-width: 1920px)" srcset="logo.png">
                    <source media="(max-width: 760px)" srcset="logo-alt.png">
                    <img src="logo.png" width="130px" />
                </picture>
                <div class="menu">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="ULogin.php">Login</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="Gallery.php">Gallery</a>
                    <a href="home.php">Home</a>
                </div>
            </div>
    </header>

<div class="heading">
    <h1 style="font-family:'Halinum';">Administrator Page</h1>
</div>
    <div class="container">
        <h2 class="display" style="font-family:'DomaineSansTextFine-Regular';"><center>Data Of User</center> </h2>
    </div>

    <div class="card-body">
                        <table class="t">
                            <tr>
                                <td style=" padding: 10px;">Name</td>
                                <td style=" padding: 10px;">Email</td>
                                <td style=" padding: 10px;">Contact</td>
                                <td style=" padding: 10px;">EventDate</td>
                                <td style=" padding: 10px;">Package</td>
                                <td style=" padding: 10px;">Location</td>
                            </tr>

                            <tr>
                                <?php
                                
                                while($row=mysqli_fetch_assoc($result)){

                                ?>

                                <td style=" padding: 10px;"><?php echo $row['Name']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row['Email']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row['Contact']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row['EventDate']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row['Package']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row['Location']; ?></td>
                                



                            </tr>

                                <?php
                                }
                                
                                ?>
                            
                        </table>
    </div>

    <br> <br>
        
    
    <div class="container">
        <h2 class="display" style="font-family:'DomaineSansTextFine-Regular';"><center>Data of Vendors</center>  </h2>
    </div>

    <div class="card-body">
                        <table class="t">
                            <tr>
                                <td style=" padding: 10px;">Fname</td>
                                <td style=" padding: 10px;">Lname</td>
                                <td style=" padding: 10px;">Email</td>
                                <td style=" padding: 10px;">Contact</td>
                                <td style=" padding: 10px;">Role</td>
                            </tr>

                            <tr>
                                <?php
                                
                                while($row1=mysqli_fetch_assoc($result1)){

                                ?>

                                <td style=" padding: 10px;"><?php echo $row1['fname']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row1['lname']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row1['Email']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row1['Contact']; ?></td>
                                <td style=" padding: 10px;"><?php echo $row1['Role']; ?></td>
                                



                            </tr>

                                <?php
                                }
                                
                                ?>
                            
                        </table>
    </div>



    <footer>
    <div class="footer-content">
        <img src="logo-ft.png" width="150px">
        <p> Cupid's Crew is a small creative business dedicated to helping you design and host a stunning event for the ones you love. </p>
        <ul class="socials">
            <li><a href=”#”><i class="fa fa-facebook"></i></a></li>
            <li><a href=”#”><i class="fa fa-twitter"></i></a></li>
            <li><a href=”#”><i class="fa fa-google-plus"></i></a></li>
            <li><a href=”#”><i class="fa fa-youtube"></i></a></li>
            <li><a href=”#”><i class="fa fa-linkedin-square"></i></a></li>
         </ul>
    </div>
    <div class="footer-bottom">
        <div class="footer-menu">
            <ul class="f-menu">
              <li><a href="home.html">Home</a></li>
              <li><a href="Gallery.html">Gallery</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="about.html">About</a></li>
            </ul>
          </div>
        <p>Copyright &copy; <a href="#">Cupid's Crew</a>  </p>
    </div>
</footer>


        <script>
            
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>



</body>
</html>


<?php
mysqli_close($con);
mysqli_close($con1);
?>

