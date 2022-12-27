<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:bookedorder.php");
}

// $getid = $_SESSION['id'];
// $decoded = base64_decode($getid);
// $decoded_encoding = 'iso-2022-jp';
// $id = iconv($decoded_encoding, 'UTF-8', $decoded);

error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");

$query = "select * from quantityy where date>='$date'";
$data = mysqli_query($db, $query);
$total = mysqli_num_rows($data);
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fds/Eventmanagement/BookedOders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="./static/css/order.css" />
    <link rel="stylesheet" href="./static/css/navbar4.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a781033fbc.js" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCARJ5JnRWxCD2ica1_3pjp73-278H3FaI&libraries=places"></script>

    <script src="./static/js/distance.js"></script>
    <style>
      .container .event a{
        cursor: pointer;
        background: rgba(93, 35, 75, 0.7);
        border: none;
        border-radius: 10px;
        color: #fff;
        display:inline;
        font-size: 16px;
        padding: 15px 39px;
        margin-top: 20px;
        transition: all ease 0.25s;
        font-weight: bold;
        text-decoration: none;
      }
      .navbar .menu-items{
        box-shadow: rgba(255, 255, 255, 0.5);
        width: 250px;
        margin-left: -80px;
      }
      .container .event a:hover {
        background-color: #1f2034;
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
            <div class="logo"></div>
            <div class="menu-items">
              <li><a href="eventhome.php"><i class="fa-solid fa-house"></i>  Home</a></li>
              <li><a href="eventmanagement.php"><i class="fa-solid fa-user"></i>  Profile</a></li>
              <li><a href="bookedorder.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> orders</a></li>
              <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <!-- <form action="#" class="filter">
        <input type="search" name="filtter" id="filtter" />
        <button>filtter</button>
      </form> -->
      <table>
        <thead>
         <tr>

            <th><div style="width: 150px" >ORGANISATION ID</div></th>
            <th><div style="width: 200px" >ORG EMAIL ID</div></th>
            <th><div style="width: 90px" >EVENT ID</div></th>
            <th><div style="width: 150px" >VEG QUANTITY</div></th>
            <th><div style="width: 150px" >NON VEG QUANTITY</div></th>

         </tr>
        </thead>
        <tbody>
          <?php
if ($total != 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        $class_list = array("a" => "prioirty-200", "b" => "prioirty-600", "c" => "prioirty-300");
        shuffle($class_list);

        echo "
        <tr class='$class_list[0]'>
          <td>" . $result['org_id'] . "</td>
          <td><a href='mailto:" . $result['email_id'] . "'>" . $result['email_id'] . "</a></td>
          <td>" . $result['prg_id'] . "</td>
          <td><i class='fa fa-circle'></i>" . $result['veg_quantity'] . "</td>
          <td><i class='fa fa-circle'></i>" . $result['non_veg_quantity'] . "</td>

      ";
    }
} else {
    echo "<tr><td colspan='5' style='text-align:center;'>no recors found</td></tr>";
}
?>
        </tbody>
      </table>
    </div>

    <!-- <script src="js/all.min.js"></script> -->
  </body>
</html>