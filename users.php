<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUPID'S CREW|LOGIN</title>
    <link rel="stylesheet" href="userlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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
                <a href="About.php">About</a>
                <a href="Contact.php">Contact</a>
                <a href="Gallery.php">Gallery</a>
                <a href="Home.php">Home</a>
            </div>
    </header>

    <div>
        <h1>"Welcome To The User Page"</h1>
    </div>

    <div class="pera">
        <p>Your Work is in Process.</p>
        <p>We will let you know when your work gets DONE!</p>
        <p>Stay connected with us. Hope you co-operate.</p>
        <p>Your CO-OPERATION is must.</p>
        <br>
        <p>We are doing our best!</p>

        <h2>Have a nice day!</h2>
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
              <li><a href="ULogin.php">Login</a></li>
                </ul>
            </div>
            <div class="wwu">
                <p><a href="wwu.php">Work with us</a></p>
              </div>
              <div class="copy">
                <p>Copyright &copy; <a href="Home.php">Cupid's Crew</a>  </p>
              </div>
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
