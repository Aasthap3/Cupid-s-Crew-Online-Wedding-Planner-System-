<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUPID'S CREW|CONTACT</title>
    <link rel="stylesheet" href="Contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="bg-img">
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
                    <a href="About.php">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="Gallery.php">Gallery</a>
                    <a href="home.php">Home</a>
                </div>
            </div>
        </div>
    </header>


    <main>

        <div class="container">
            <div class="image-stack">
              <div class="image-stack__item image-stack__item--top">
                <img src="contact1.jpg" alt="">
              </div>
              <div class="image-stack__item image-stack__item--bottom">
                <img src="slide2.jpg" alt="">
              </div>
              <div class="but">
                <button type="button"><a href="sign.php">START PLANNING</a></button>
              </div>
            </div>
        </div>


        <div class="title">
            <h2> Contact </h2>
        </div>

        <div class="contact">
            <h4> Address </h4>
            <p> Minsk, 17 First Street, 2200000 </p>
            <h4> Open Hours </h4>
            <p> Monday-Thursday 8:00-22:00 </p>
            <p>Friday-Sunday 10:00-00:00 </p>
            <h4> Reservation </h4>
            <p> +91 XXXXX-XXXXX </p>
            <p> +91 XXXXX-XXXXX </p>
            <h4> Email </h4>
            <p> Coffee@coffeemail.com </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.0779788015984!2d-81.47612082462487!3d28.47719817574985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77fb1d67a00bd%3A0x38e8e28a6f90f2ee!2sHogsmeade%20Village!5e0!3m2!1sen!2sin!4v1683968527046!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>

    <?php require_once "footer.php"; ?>
    
    <script src="js/topnav.js"></script>

</body>
</html>