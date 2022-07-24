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
            <li><a href="organisation.php">Profile</a></li>
            <li><a href="order.php">Events</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Logout</a></li>
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
        <a href=""><i class="fas fa-fire"></i></a>
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
        <a href=""><i class="fas fa-seedling"></i></a>
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
        <a href=""><i class="fas fa-address-card"></i></a>
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
