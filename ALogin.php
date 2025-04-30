<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUPID'S CREW|LOGIN</title>
    <link rel="stylesheet" href="alogin.css">
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
        <div class="login_form">
            <h1>Login</h1>
            <form id="form" name="f" action="Authentication2.php" method="POST">
                <fieldset>
                    <legend>Admin Login</legend>
                    <div>
                        <label>Username</label><br>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field">
                        <label>Password</label><br>
                        <input type="password" name="password" id="password" required>
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="button">
                        <input type="submit" id="btn" value="Login">
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <?php require_once "footer.php"; ?>

    <script src="js/topnav.js"></script>
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