<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUPID'S CREW|SIGNUP</title>
    <link rel="stylesheet" href="sign.css">
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
                <a href="Login.php">Admin Login</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="Gallery.php">Gallery</a>
                <a href="Home.php">Home</a>
                
            </div>
    </header>
    <main>
        <div class="signup_form">
            <h1>Register</h1>
            <form id="form" name="f" action="signup.php" method="POST">
                <div>
                    <label>Name</label><br>
                    <input type="text" name="Name" placeholder="Enter your name" required>
                </div>
                <div>
                    <label>Email</label> <br>
                    <input type="email" name="Email" placeholder="Enter your email" required>
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" name="Password" id="Password" placeholder="Enter Password" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div>
                    <label>Contact</label><br>
                    <input type="tel" name="Contact" placeholder="Enter your phone number" required>
                </div>
                <div>
                    <label>Event Date</label><br>
                    <input type="date" name="Event_Date" placeholder="Enter event date" required>
                </div>
                <div>
                    <label>Package</label><br>
                    <select name="Package">
                        <option value="Silver-30,00,000">Silver</option>
                        <option value="Gold-45,00,000">Gold</option>
                        <option value="Platinum-75,00,000">Platinum</option>
                    </select>
                </div>
                <div>
                    <label>Location</label><br>
                    <input type="text" name="Location" placeholder="Enter event location" required>
                </div>
                <div class="button">
                        <input type="submit" id="btn" value="Submit">
                </div>
            </form>

        </div>
    </main>

    <?php require_once("footer.php"); ?>

    <script src="js/pass-show-hide.js"></script>

    <script>
        function validation() {
            var id = document.f.username.value;
            var pw = document.f.password.value;
            if (id.length == "" || pw.length == "") {
                alert("Please Enter Username and Password");
                return false;
            }
            else {
                if (id.length == "") {
                    alert("Please Enter Username");
                    return false;
                }
                if (pw.length == "") {
                    alert("Please Enter Password");
                    return false;
                }
            }
        }
    </script>
</body>

</html>