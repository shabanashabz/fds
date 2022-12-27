<?php
include "db.php";
if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email_id = $_POST["email_id"];
    $phn_number = $_POST["phn_number"];
    $type = $_POST["type"];

    $eml = "select * from registration where email_id='$email_id'";
    $result = mysqli_query($db, $eml);
    if (mysqli_num_rows($result) == 0) {

        $license = $_FILES["license"];
        $temp = $license["tmp_name"];
        $temptype = pathinfo($license["name"], PATHINFO_EXTENSION);
        $file = "uploads/";
        $file_name = "license_" . time() . "." . $temptype;
        $up = move_uploaded_file($temp, $file . $file_name);

        if ($up) {
            $sql = "INSERT INTO registration (name,password,email_id,phn_number,type,license)VALUES('$name','$password','$email_id','$phn_number','$type','$file_name')";
            $result = $db->query($sql);
        }
         else
         {
            echo "file not uploaded ";
         }
    }
     else
    {
        echo "already registered";
     }
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
                header("location:organisation.php");
            } else {
                header("location:eventmanagement.php");
            }
            $error = '';
        } else {
            $error = "invalid email or password";
        }
    }

}
?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="style.css" />
    <title>Registration/fds</title>
    <link rel="stylesheet" href="./static/css/registration.css" />
    <link rel="stylesheet" href="./static/css/navbar4.css" />
    <style>
         .navbar .menu-items{
          box-shadow: rgba(255, 255, 255, 0.5);
          width: 200px;
        }
    </style>
</head>

<body>
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
    <form action="registration.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="column1">
            <form id="form" class="form">
                <h2>Register with us</h2>
                <div class="form-control">
                    <label for='username' data-validate="Enter email">Username</label>
                    <input type="text" id="username" placeholder="Enter username" name="name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='email'>Email</label>
                    <input type="text" id="email" placeholder="Enter email" name="email_id">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='password'>Password</label>
                    <input type="password" id="password" placeholder="Enter password" name="password">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label>Mobile </label>
                <input type="number" placeholder="Enter Phone number" name="phn_number" required>
                <small>Error message</small>
                </div>
                <div class="form-control">
                    <label>license  </label>
                    <input type="file" placeholder="attach file" name="license" >
                <small>Error message</small>
                </div>
                <div class="form-control">
                    <label>Sign up as  </label>
            <select name="type" required>
                <option value=""></option>
                <option value="Event">event</option>
                <option value="Organization">organization</option>
            </select>
                <small>Error message</small>
                </div>

                <div class="login-box">
                <button type="submit" name="btn">Submit</a></button><br><br>
                </div>
                <div class="login">
                <h3>Have an account ?</h3>
                <a href="login.php">Login</a>
                </div>

            </form>
        </div>
        </form>
        <div class="column2">

          <img src="https://i.ibb.co/k5NNz4F/pablo-sign-up.png" alt="pablo-sign-up" border="0" class='signup-image'>
        </div>

    </div>
    <script src="./static/js/registration.js"></script>
</body>


</html>
