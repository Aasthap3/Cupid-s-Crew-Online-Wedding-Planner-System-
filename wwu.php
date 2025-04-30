<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUPID'S CREW|SIGNUP</title>
    <link rel="stylesheet" href="wwu.css">
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
    <main>
        <div class="signup_form">
            <h1>Apply Now</h1>
            <form id="form" name="f" action="waction.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Enter your first name" required>
                </div>
                <div>
                    <label>Last Name</label><br>
                    <input type="text" name="lname" placeholder="Enter your last name" required>
                </div>
                <div>
                    <label>Email</label> <br>
                    <input type="email" name="Email" placeholder="Enter your email" required>
                </div>
                <div>
                    <label>Contact</label><br>
                    <input type="tel" name="Contact" placeholder="Enter your phone number" required>
                </div>
                <div>
                    <label>Occupation/Role</label><br>
                    <input type="text" name="Role" placeholder="Enter your occupation/role" required>
                </div>
                <div class="button">
                    <a href="Home.css">
                        <input type="submit" id="btn" value="Submit">
                    </a>
                </div>
            </form>

        </div>
    </main>

    <?php require_once "footer.php"; ?>

    <script src="js/topnav.js"></script>
    <script src="js/pass-show-hide.js"></script>

</body>

</html>