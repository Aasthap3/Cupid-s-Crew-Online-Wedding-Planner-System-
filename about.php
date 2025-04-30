<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupid's Crew | About</title>
    <link rel="stylesheet" href="about.css">
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
                    <a href="Ulogin.php">Login</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                    <a href="Gallery.php">Gallery</a>
                    <a href="home.php">Home</a>
                </div>
            </div>
        </div>
    </header>

    <!-- <img class="topimg" src="slideshow4.jpg" alt="bodyimage"> -->

    <div class="box">
        <h1>Who's <span>Cupid Crew?</span></h1>
        <br>
        <p>
            Hello! I’m Steph. Cupid is a play on my family name, but I’ll give you a free-pass if your first
            few messages address me as Cupid – it comes with the territory. 😉
            <br><br>

            I am a hopeless romantic, a fresh flower enthusiast and a big believer in brewing a hot cup of tea to soothe
            the soul,
            whatever the circumstance. You’ll find me flicking through home-style magazines, taking my puppy on
            adventures
            around Queenstown and obsessing over any and all wedding photos. Also, I’ll definitely tear up during your
            vows and squeal with delight when I see your wedding dress for the first time
            (refer back to: hopeless romantic).
            <br><br>

            I became a wedding planner because I love seeing people happy. What better thing, than helping to create the
            day that many people remember as one of the best days of their lives? I love the excitement of creating
            something new and delighting clients and their guests with how perfectly executed everything is on the day.
            <br><br>

            I’ve pursued this same goal for 10 years, heading straight from university to immerse myself full-time as a
            Queenstown wedding planner before stepping out to launch my own business, Cupid's Crew. I’ve personally
            planned
            over 100 weddings and been involved in twice that number as an assistant coordinator and stylist.
            <br><br>

            I’m currently splitting my time between Auckland and Queenstown but am available nationwide.
        </p>
    </div>

    <div class="abtus">
        <div class="column">
            <img src="about2.jpg" class="img1">
        </div>

        <div class="column">
            <p>
                Let us help you <br>
                plan your perfect event!
            </p>

            <div class="button">
                <button type="button"><a href="sign.php">GET IN TOUCH</a></button>
            </div>

        </div>
    </div>

    <div class="events">

        <div class="event1">
            <h3> OUR EVENTS!</h3>
            <br>

            <div class="event2">
                <img src="about5.jpg" class="a">
                <img src="about1.jpg" class="b">
                <img src="about3.jpg" class="c">
                <img src="about4.jpg" class="d">
            </div>

        </div>

    </div>

    <?php require_once "footer.php"; ?>

    <script src="js/topnav.js"></script>

</body>

</html>