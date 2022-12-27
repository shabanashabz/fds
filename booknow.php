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
$user1 = "SELECT * FROM `organization`  where created_by='$id'";
$result1 = mysqli_query($db, $user1);
$details1 = mysqli_fetch_array($result1);

$user = "SELECT * FROM `events`  where events_id='$event_id'";
$result = mysqli_query($db, $user);
$details = mysqli_fetch_array($result);

if (isset($_POST['btn'])) {
    $org_id = $details1["org_id"];
    $email_id = $details1["email_id"];
    $prg_id = $details["events_id"];
    $event_email_id = $details["email_id"];
    $veg_quantity = $_POST["veg_quantity"];
    $non_veg_quantity = $_POST["non_veg_quantity"];

    $vegdiff = $_POST["veg_quantity"];
    $non_vegdiff = $_POST["non_veg_quantity"];

    if ($veg_quantity <= $details["veg_quantity"] && $non_veg_quantity <= $details["non_veg_quantity"]) {
        $sql = "INSERT INTO quantityy (created_by,org_id,email_id,prg_id,event_email_id,veg_quantity,non_veg_quantity)VALUES($id,$org_id,'$email_id',$prg_id,' $event_email_id',$veg_quantity,$non_veg_quantity)";
        $result = $db->query($sql);

        $vegdiff = $details["veg_quantity"] - $veg_quantity;
        $non_vegdiff = $details["non_veg_quantity"] - $non_veg_quantity;

        $sql = "update events set veg_quantity=' $vegdiff',non_veg_quantity='$non_vegdiff' where events_id='$event_id'";
        $result = $db->query($sql);

        $org_name = $details1['name'];
        $redirect_url = "mailto:$event_email_id?subject=An Order Placed &body= Successfully booked from the organization '$org_name'";
        header("location:$redirect_url");
    } else {
        echo "Sorry your oder is beyond limit..........!!!!!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fds/Organisation/Booking</title>
        <link rel="stylesheet" href="./static/css/registration.css">
        <link rel="stylesheet" href="./static/css/navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <script src="https://kit.fontawesome.com/a781033fbc.js" crossorigin="anonymous"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCARJ5JnRWxCD2ica1_3pjp73-278H3FaI&libraries=places"></script>
        <style>
            .navbar .menu-items{
                box-shadow: rgba(255, 255, 255, 0.5);
                width: 200px;
            }
           .container p{
                padding-left:20px;
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
                <li><a href="orghome.php"><i class="fa-solid fa-house"></i>  Home</a></li>
                <li><a href="eventmanagement.php"><i class="fa-solid fa-user"></i>  Profile</a></li>
                <li><a href="about.php"><i class="fa-solid fa-user-group"></i>  About Us</a></li>
                <li><a href="help.php"><i class="fa-solid fa-circle-question"></i>  Help</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>   Logout</a></li>
                </div>
            </div>
            </div>
        </nav>
        </header>
        <form class="ajax" id="ajax-form" action="booknow.php?event_id=<?php echo $event_id ?>" method="POST" enctype="multipart/form-data">
            <div class="containers">
                <p>Org name :-<?php echo $details1 != null ? $details1['name'] : ''; ?></p>
                <p>Org Email id :-<?php echo $details1 != null ? $details1['email_id'] : ''; ?></p>
                <p>Prg name :-<?php echo $details != null ? $details['name'] : ''; ?></p>
                <p>event Email id :-<?php echo $details != null ? $details['email_id'] : ''; ?></p>
                <label> veg : </label>
                <input type="number" placeholder="Enter quantity" name="veg_quantity" required><br><br>
                <label>Non veg : </label>
                <input type="number" placeholder="Enter quantity" name="non_veg_quantity" required> <br><br>
                <button type="submit" name="btn">DONE</button><br><br><br>
            </div>
        </form>
        <script src="./static/js/jquery.js"></script>
        <script src="./static/js/distance.js"></script>
        <script src="./static/js/sweetalert.min.js"></script>
        <script>
            // $('#ajax-form').submit(function(e){
            //     e.preventDefault()
            //     $.ajax({
            //         type: 'POST',
            //         url: 'book-now-submit.php?event_id=<?php echo $event_id ?>',
            //         data: new FormData(this),
            //         dataType: 'json',
            //         contentType: false,
            //         cache: false,
            //         processData:false,
            //         beforeSend: function(){
            //             //
            //         },
            //         success: function(response){
            //             // $('.statusMsg').html('');
            //             // if(response.status == 1){
            //             //     $('#fupForm')[0].reset();
            //             //     $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
            //             // }else{
            //             //     $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
            //             // }
            //             // $('#fupForm').css("opacity","");
            //             // $(".submitBtn").removeAttr("disabled");
            //         },
            //         error: function (err){
            //             console.log('====================================');
            //             console.log('err',err);
            //             console.log('====================================');
            //         }
            //     });
            // })
        </script>
    </body>
</html>