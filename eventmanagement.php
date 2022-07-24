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

    if ($up) {
        $evnt_is_exist = "SELECT * FROM eventmanagement WHERE created_by='$id'";

        $evnt_is_exist_res = mysqli_query($db, $evnt_is_exist);
        if ($evnt_is_exist_res) {
            // echo mysqli_num_rows($evnt_is_exist_res);

            if (mysqli_num_rows($evnt_is_exist_res) > 0) {
                $sql = "update eventmanagement set name='$name',email_id='$email_id',phn_number='$phn_number',address='$address',location='$location' where created_by='$id'";
                $result = $db->query($sql);
            } else {
                $sql = "INSERT INTO eventmanagement (created_by,name,email_id,phn_number,address,location,license)VALUES($id,'$name','$email_id','$phn_number','$address','$location','$file_name')";
                $result = $db->query($sql);
            }

            $sql = "update registration set name='$name',email_id='$email_id',phn_number='$phn_number' where reg_id='$id'";
            $updat = mysqli_query($db, $sql);
        }
    }
}
$user = "select * from registration where reg_id='$id'";
$result = mysqli_query($db, $user);
$details = mysqli_fetch_array($result);

$user1 = "SELECT * FROM `eventmanagement` WHERE created_by='$id'";
$result1 = mysqli_query($db, $user1);
$details1 = mysqli_fetch_array($result1);
?>
<form action="eventmanagement.php" method="POST" enctype="multipart/form-data">
        <div class="new">

            <label>Name : </label>
            <input type="text" value="<?php echo $details != null ? $details['name'] : ''; ?>" placeholder="Enter name" name="name" required><br><br>
            <label>Email id : </label>
            <input type="email" value="<?php echo $details != null ? $details['email_id'] : ''; ?>" placeholder="Enter email" name="email_id" required><br><br>
            <label>Phn Number : </label>
            <input type="number" value="<?php echo $details != null ? $details['phn_number'] : ''; ?>" placeholder="Enter phn_number " name="phn_number" required><br><br>
            <label>Address : </label>
            <input type="text" value="<?php echo $details1 != null ? $details1['address'] : ''; ?>"placeholder="Enter address " name="address" required><br><br>
            <label>Location : </label>
            <input type="text" value="<?php echo $details1 != null ? $details1['location'] : ''; ?>" placeholder="Enter location " name="location" required><br><br>
            <label>license : </label>
            <input type="file" placeholder="attach file" name="license" ><br><br>


            <button type="submit" name="btn">submit</button>
            <a href="events.php">events</a>
        </div>
    </form>