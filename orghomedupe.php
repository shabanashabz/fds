<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="style.css" />
    <title>organisation</title>
    <link rel="stylesheet" href="./static/css/organisation.css" />
    <link rel="stylesheet" href="./static/css/navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <script src="https://kit.fontawesome.com/a781033fbc.js" crossorigin="anonymous"></script>

    <style>
       .navbar .menu-items{
            box-shadow: rgba(255, 255, 255, 0.5);
            width: 200px;
        }
    </style>
</head>
<body>
  <header>
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
            <div class="button"><li>
              <a href="organisation.php"><i class="fa-solid fa-user"></i>  Profile</a></li>
            <li><a href="order.php"><i class="fa-solid fa-bookmark"></i>  Events</a></li>
            <li><a href="#"><i class="fa-solid fa-user-group"></i>  About Us</a></li>
            <li><a href="#"><i class="fa-solid fa-circle-question"></i>  Help</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
          </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="titles">

    <h1>FDS</h1>
    <p></p>

  </section>

  <section class="container-boxes">
    <div class="box">

      <div class="icon">
        <a href=""><i class="fa-solid fa-bowl-rice"></i></a>
      </div>

      <div class="text">
        <a href="">
          <p>THERE IS NO SINCERE LOVE THAN THE LOVE OF FOOD.</p><br>
          <H3>-GEORGE BERNARD </H3>
        </a>
      </div>

    </div>

    <div class="box">

      <div class="icon">
        <a href=""><i class="fa-solid fa-wheat-awn-circle-exclamation"></i></a>
      </div>

      <div class="text">
        <a href="">

          <p>NEVER EAT MORE THAN YOU CAN LIFE.....</p><br>
          <h3>-MISS PIGGY</h3>
        </a>
      </div>

    </div>

    <div class="box">

      <div class="icon">
        <a href=""><i class="fa-solid fa-carrot"></i></a>
      </div>

      <div class="text">
        <a href="">

          <p>YOU DON'T NEED A SILVER FORK TO EAT GOOD FOOD...</p><br>
          <h3>-PAUL PRUDHOMME</h3>
        </a>
      </div>

    </div>
  </section>
  </body>
</html>
