<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);

$event_id = null;
if (isset($_GET['event_id'])) {
    $get_event_id = $_GET['event_id'];
    $event_id = intval($get_event_id);
}
$user1 = "SELECT * FROM eventmanagement WHERE created_by ='$id'";
$result1 = mysqli_query($db, $user1);
$details1 = mysqli_fetch_array($result1);

if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $phn_number = $details1["phn_number"];
    $email_id = $details1["email_id"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $item = $_POST["item"];
    $veg_quantity = $_POST["veg_quantity"];
    $non_veg_quantity = $_POST["non_veg_quantity"];

    $evt_is_exist = "SELECT * FROM  events  WHERE events_id ='$event_id'";
    $evt_is_exist_res = mysqli_query($db, $evt_is_exist);
    if ($evt_is_exist_res) {
        if (mysqli_num_rows($evt_is_exist_res) > 0) {
            $sql = "update events set name='$name',phn_number='$phn_number',email_id='$email_id',address='$address',location='$location',item='$item',veg_quantity='$veg_quantity',non_veg_quantity='$non_veg_quantity' where events_id='$event_id'";
            $result = $db->query($sql);
        } else {
            $sql = "INSERT INTO events (created_by,name,phn_number,email_id,address,location,item,veg_quantity,non_veg_quantity)VALUES($id,'$name','$phn_number','$email_id','$address','$location','$item','$veg_quantity','$non_veg_quantity')";
            $result = $db->query($sql);
        }
        header("location:events.php");
    }
}
$details = null;
if ($event_id) {
    $user = "SELECT * FROM events WHERE events_id ='$event_id'";
    $result = mysqli_query($db, $user);
    $details = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="style.css" />
        <title>Fds/Eventmanagement/new-events</title>
        <link rel="stylesheet" href="./static/css/registration.css" />
        <link rel="stylesheet" href="./static/css/navbar.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCARJ5JnRWxCD2ica1_3pjp73-278H3FaI&libraries=places"></script>
        <script src="./static/js/registration.js"></script>
        <script src="https://kit.fontawesome.com/a781033fbc.js" crossorigin="anonymous"></script>
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
        <style>
            .navbar .menu-items{
                box-shadow: rgba(255, 255, 255, 0.5);
                width: 200px;
            }
            .container .column1 .form-control input,select{
                text-align: center;
                border: 0;
                padding: 7px 10px;
                border-bottom: 1px solid;
                border-color: cadetblue;
                font-size: medium;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                margin-left: 20px;
                background: transparent;
            }
            .container .column1 .column2{
                    width: 100%;
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
                            <li><a href="about.php"><i class="fa-solid fa-user-group"></i>  About Us</a></li>
                            <li><a href="help.php"><i class="fa-solid fa-circle-question"></i>  Help</a></li>
                            <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <form action="newevent.php?event_id=<?php echo $event_id ?>" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="column1">
                    <div class="form-control">
                        <input type="hidden" name="event_id" value="<?php echo $event_id ?>">
                        <label>Name : </label>
                        <input type="text" value="<?php echo $details != null ? $details['name'] : ''; ?>" placeholder="Enter name" name="name" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Phn Number : </label>
                        <input type="tel" pattern="[0-9]{10}" value="<?php echo $details1 != null ? $details1['phn_number'] : ''; ?>" placeholder="Enter phone number " name="phn_number" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Email ID : </label>
                        <input type="email" value="<?php echo $details1 != null ? $details1['email_id'] : ''; ?>" placeholder="Enter email id " name="email" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Address : </label>
                        <input type="text" value="<?php echo $details != null ? $details['address'] : ''; ?>"placeholder="Enter address " name="address" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Location : </label>
                        <input type="text" id="location_autocomplete" value="<?php echo $details != null ? $details['location'] : ''; ?>" placeholder="Enter location " name="location" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Item : </label>
                        <input type="text" value="<?php echo $details != null ? $details['item'] : ''; ?>" placeholder="Enter Item" name="item" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Veg_Quantity : </label>
                        <input type="number" value="<?php echo $details != null ? $details['veg_quantity'] : ''; ?>" placeholder="Enter quantity" min="0" name="veg_quantity" required><br>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label>Non-Veg_Quantity : </label>
                        <input type="number" value="<?php echo $details != null ? $details['non_veg_quantity'] : ''; ?>" placeholder="Enter quantity" min="0" name="non_veg_quantity" required><br><br>
                        <small>Error message</small>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="btn" >SUBMIT</button>
                    </div>
                    <div class="column2">
                        <img src="https://i.ibb.co/k5NNz4F/pablo-sign-up.png" alt="pablo-sign-up" border="0" class='signup-image'>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

