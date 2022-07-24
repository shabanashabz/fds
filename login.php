<?php
include "db.php";

$error = '';
if (isset($_POST["btn"])) {
    $email_id = $_POST["email_id"];
    $password = $_POST["password"];

    $eml = "select * from registration where email_id='$email_id' AND password='$password'";
    $result = mysqli_query($db, $eml);
    $error = '';
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_array($result);

        $_SESSION['id'] = base64_encode($user['reg_id']);
        if ($user['type'] == "organization") {
            header("location:orghome.php");
        } else {
            header("location:eventmanagement.php");
        }
        $error = '';
    } else {
        $error = "invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FDS | Login</title>
    <link rel="stylesheet" href="./static/css/font-awesom.css" />
    <link rel="stylesheet" href="./static/css/linearicons.css" />
    <link rel="stylesheet" href="./static/css/animate.css" />
    <link rel="stylesheet" href="./static/css/animistion.css" />
    <link rel="stylesheet" href="./static/css/login.css" />
    <link rel="stylesheet" href="./static/css/navbar.css" />
</head>
<body id="login">
<nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>
          <div class="logo">

          </div>
          <div class="menu-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Help</a></li>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
    <span class="title">Account Login</span>
    <form class="validate-form" action="login.php" method="POST" enctype="multipart/form-data">
            <?php echo $error != null && $error != '' ? "<p style='color:red;text-align:center'>$error</p>" : '' ?>
            <div class="form-field" data-validate="Enter email">
                <input type="email" placeholder="Email" name="email_id" />
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="form-field" data-validate="Enter password">
                <input type="password" placeholder="Password" name="password" />
                <span class="focus-input100" data-placeholder=""></span>
            </div>

            <div class="button-container">
                <button type="submit" name="btn">LOGIN</button>

                <p>dont have account?<a href="registration.php">Register here</a></p>
            </div>
        </form>
    </div>


    <script src="./static/js/jquery.js"></script>
    <script src="./static/js/animistion.js"></script>
    <script src="./static/js/login.js"></script>
    <!-- <script src="js/main.js"></script> -->

</body>
</html>
