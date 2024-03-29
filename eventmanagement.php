<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);

if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $email_id = $_POST["email_id"];
    $phn_number = $_POST["phn_number"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $license = $_FILES["license"];
    $temp = $license["tmp_name"];

    $temptype = pathinfo($license["name"], PATHINFO_EXTENSION);
    $file = "uploads/";
    $file_name = "license_" . time() . "." . $temptype;
    $up = move_uploaded_file($temp, $file . $file_name);

    // if ($up) {
    $evnt_is_exist = "SELECT * FROM eventmanagement WHERE created_by='$id'";
    $evnt_is_exist_res = mysqli_query($db, $evnt_is_exist);
    if ($evnt_is_exist_res) {
        if (mysqli_num_rows($evnt_is_exist_res) > 0) {
            $sql = "update eventmanagement set name='$name',email_id='$email_id',phn_number='$phn_number',address='$address',location='$location' where created_by='$id'";
            $result = $db->query($sql);
            header("location:eventhome.php");
        } else {
            $sql = "INSERT INTO eventmanagement (created_by,name,email_id,phn_number,address,location,license)VALUES($id,'$name','$email_id','$phn_number','$address','$location','$file_name')";
            $result = $db->query($sql);
            header("location:eventhome.php");
        }
        $sql = "update registration set name='$name',email_id='$email_id',phn_number='$phn_number' where reg_id='$id'";
        $updat = mysqli_query($db, $sql);
    }
}
$user = "select * from registration where reg_id='$id'";
$result = mysqli_query($db, $user);
$details = mysqli_fetch_array($result);

$user1 = "SELECT * FROM `eventmanagement` WHERE created_by='$id'";
$result1 = mysqli_query($db, $user1);
$details1 = mysqli_fetch_array($result1);

$is_edit = false;
if (mysqli_num_rows($result1) > 0) {
    $is_edit = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fds/Eventmanagement/Profile</title>
    <link rel="stylesheet" href="./static/css/registration.css" />
    <link rel="stylesheet" href="./static/css/navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a781033fbc.js" crossorigin="anonymous"></script>
    <style>
      .navbar .menu-items{
        box-shadow: rgba(255, 255, 255, 0.5);
        width: 200px;
      }
      .new input,select{
        text-align: center;
        border: 0;
        padding: 7px 10px;
        border-bottom: 1px solid;
        border-color: cadetblue;
        font-size: medium;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin-left: 25px;
        background: transparent;
      }
    </style>
    <script>
      let autocomplete;
      function initAutocomplete(){
        autocomplete=new google.maps.places.Autocomplete(
          document.getElementById('location_autocomplete'),
          {
            types:['establishment'],
            componentRestrictions:{'country':['IN']},
            fields:['place_id','geometry','name']
          });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCARJ5JnRWxCD2ica1_3pjp73-278H3FaI&libraries=places&callback=initAutocomplete"></script>
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
            <li><a href="events.php"><i class="fa-solid fa-bookmark"></i>  Events</a></li>
            <li><a href="bookedorder.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> orders</a></li>
            <li><a href="about.php"><i class="fa-solid fa-user-group"></i>  About Us</a></li>
            <li><a href="help.php"><i class="fa-solid fa-circle-question"></i>  Help</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
          </div>
        </div>
      </nav>
    </header>
    <form action="eventmanagement.php" method="POST" enctype="multipart/form-data">
      <div class="new">
        <label>Name : </label>
        <input type="text" value="<?php echo $details != null ? $details['name'] : ''; ?>" placeholder="Enter name" name="name" required><br><br>
        <label>Email id : </label>
        <input type="email" id="email" value="<?php echo $details != null ? $details['email_id'] : ''; ?>" placeholder="Enter email" name="email_id" required><br><br>
        <label>Phn Number : </label>
        <input type="tel" pattern="[0-9]{10}" value="<?php echo $details != null ? $details['phn_number'] : ''; ?>" placeholder="Enter phn_number " name="phn_number" required><br><br>
        <label>Address : </label>
        <input type="text" value="<?php echo $details1 != null ? $details1['address'] : ''; ?>"placeholder="Enter address " name="address" required><br><br>
        <label>Location : </label>
        <input type="text"  id="location_autocomplete" value="<?php echo $details1 != null ? $details1['location'] : ''; ?>" placeholder="Enter location " name="location" required><br><br>
        <label>license : </label>
        <input type="file" placeholder="attach file" name="license" ><br><br>
        <button type="submit" name="btn"><?php if ($is_edit == true) {
    echo "Update";
} else {
    echo "Submit";
}
?>
        </button>
      </div>
    </form>