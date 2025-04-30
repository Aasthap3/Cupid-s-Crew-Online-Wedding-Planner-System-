<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gallery</title>
    <link rel="stylesheet" href="Gallery.css">
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
                    <a href="Contact.php">Contact</a>
                    <a href="Gallery.php">Gallery</a>
                    <a href="Home.php">Home</a>
                </div>
            </div>
        </div>

    </header>

    <main>
        <div class="abtus">
            <div class="box">
                <img src="gallery.png"> 
            </div>
            <div class="box">
                <h1>
                    Cupid's Crew
                </h1>
                <p>
                    Cupid's Crew works to a meticulous standard, planning beautiful, creative and involved events alongside a team of the best local suppliers.                </p>
                <p>
                    Pulling off an exceptional celebration generally requires 200 hours of planning, communicating and designing -made up of a combination of budget tracking, in-depth research on vendors and hundreds of emails… and then all the exciting stuff like dress fittings and hunting for inspiration.
                </p>
            </div>
        </div>

        <div class="heading">
            <h1>
                GALLERY
            </h1>
        </div>

        <div class="row">
            <div class="column">
              <img src="decor5.jpg">
              <img src="cake1.jpg">
              <img src="decor4.jpg">
              <img src="bride5.jpg">
              <img src="decor3.jpg">
              <img src="couple5.jpg">
              <img src="couple6.jpg">
            </div>
            <div class="column">
              <img src="couple1.jpg">
              <img src="decor1.jpg">
              <img src="groom1.jpg">
              <img src="couple10.jpg">
              <img src="cake2.jpg">
              <img src="couple4.jpg">
            </div>
            <div class="column">
              <img src="decor2.jpg">
              <img src="couple3.jpg">
              <img src="decor6.jpg">
              <img src="bride3.jpg">
              <img src="couple2.jpg">
              <img src="couple7.jpg">
            </div>
            <div class="column">
              <img src="bride1.jpg">
              <img src="decor7.jpg">
              <img src="cake3.jpg">
              <img src="couple8.jpg">
              <img src="bride2.jpg">
              <img src="couple9.jpg">
            </div>
          </div>

          <div class="but">
            <button type="button"><a href="sign.php">START PLANNING</a></button>
        </div>
    </main>

    <?php require_once "footer.php"; ?>
    
    <script src="js/topnav.js"></script>

</body>
</html>