<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUPID'S CREW</title>
    <link rel="stylesheet" href="home.css">
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
                <a href="ULogin.php">Login</a>
                <a href="About.php">About</a>
                <a href="Contact.php">Contact</a>
                <a href="Gallery.php">Gallery</a>
                <a href="Home.php">Home</a>
            </div>
    </header>

    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="slideshow1.jpg" style="width: 100%;">
                <div class="text">1 of 5</div>
            </div>
        
            <div class="mySlides fade">
                <img src="slideshow2.jpg" style="width:100%">
                <div class="text">2 of 5</div>
            </div>
        
            <div class="mySlides fade">
                <img src="slideshow3.jpg" style="width:100%">
                <div class="text">3 of 5</div>
            </div>
        
            <div class="mySlides fade">
                <img src="slideshow4.jpg" style="width:100%">
                <div class="text">4 of 5</div>
            </div>
        
            <div class="mySlides fade">
                <img src="slideshow5.jpg" style="width:100%">
                <div class="text"> 5 of 5 </div>
            </div>
        </div>
        <div class="quote-text">
            <div class="first"> Keep some room in your heart for the </div>
            <div class="second"> unimaganable </div>
            <div class="third"> - MARY OLIVER</div>
        </div>
        <div class="abtus">
            <div class="column">
                <img src="aboutus.jpg"> 
            </div>
            <div class="column">
                <h1>
                    <span style="font-family: DomaineSansTextFine-Regular;"> LET'S CREATE </span> <span class="halinum"> magic! </span>
                </h1>
                <p>
                    Cupid's Crew delights in creating stunning weddings and events to capture hearts and imaginations.
                </p>
                <p>
                    We plan, design and style your celebration from top to bottom, help with the finest of details and ensure you are
                    over-the-moon with the outcome.
                </p>
                <p>
                    Our passion, commitment and readiness to help is crystal clear throughout the whole process and will ensure your
                    special occasion is perfect for you. There is nothing else we would rather do!
                </p>
                <p>
                    We share our time between Auckland and Wanaka and love to explore the regions in between.
                </p>
                <p>
                    Take a wander through our galleries, check out our services, pop over to our love page and then drop a line to say
                    hello!
                </p>
            </div>
        </div>

        <h1 class="halinum"> 
            It All Starts here!
        </h1>

        <div class="slider-container">

            <div class="Slides fade">
              <a href="Contact.html"><img src="slide1.jpg" style="width:100%"></a>
              <div class="caption">
                <div class= "capb">
                    Wedding & Events
                </div>
                <div class="cap">
                    Design A Flawless Celebration
                </div>
              </div>
              <div class="numtext"><i>1 of 3</i></div>
            </div>
            
            <div class="Slides fade">
              <a href="AboutUs.html"><img src="slide2.jpg" style="width:100%"></a>
              <div class="caption">
                <div class= "capb">
                    Inspirational
                </div>
                <div class="cap">
                    To Make Your Heart Skip
                </div>
              </div>
              <div class="numtext"><i>2 of 3</i></div>
            </div>
            
            <div class="Slides fade">
              <a href="Gallery.html"><img src="slide3.jpg" style="width:100%"></a>
              <div class="caption">
                <div class= "capb">
                    Love
                </div>
                <div class="cap">
                    A Few Beautiful Memories
                </div>
              </div>
              <div class="numtext"><i>3 of 3</i></div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            </div>

            <div class="heading">
                <h1>Wedding Packages</h1>
            </div>

            <div class="pkg">
            
                <div class="detail">
                    <img src="silver.jpg">
                    <h3>Silver Package</h3>
                    <p>Price : 30,00,000 Rs</p>
                    <p>Rooms - 60 rooms</p>
                    <p>Food Veg - Breakfast, Lunch, Hi Tea, Starters and Dinner</p>
                    <p>Decor - Sangeet, Wedding or Ring ceremony, Reception</p>
                </div>
            
                <div class="detail">
                    <img src="platinum.jpg">
                    <h3>Gold Package</h3>
                    <p>Price : 45,00,000 Rs</p>
                    <p>Rooms - 100 rooms</p>
                    <p>Food Veg - Breakfast, Lunch, Hi Tea, Starters and Dinner</p>
                    <p>Decor - Sangeet, Wedding or Ring ceremony, Reception</p>
                </div>
            
                <div class="detail">
                    <img src="gold.jpg">
                    <h3>Platinum Package</h3>
                    <p>Price : 75,00,000 Rs</p>
                    <p>Rooms - 150 rooms</p>
                    <p>Food Veg - Breakfast, Lunch, Hi Tea, Starters and Dinner</p>
                    <p>Decor - Sangeet, Wedding or Ring ceremony, Reception</p>
                </div>
            </div>

            <div class="but">
            <a href="sign.php"><button type="button">BOOK NOW</button></a>
            </div>
    </main>

    <?php require_once "footer.php"; ?>

    <script src="js/topnav.js"></script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 4 seconds
        }

        let sliderIndex = 1;
        show(sliderIndex);

        function plusSlides(n) {
            show(sliderIndex += n);
        }

        function currentSlide(n) {
            show(sliderIndex = n);
        }

        function show(n) {
            let i;
            let slides = document.getElementsByClassName("Slides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { sliderIndex = 1 }
            if (n < 1) { sliderIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[sliderIndex - 1].style.display = "block";
            dots[sliderIndex - 1].className += " active";
        }

    </script>
</body>

</html>