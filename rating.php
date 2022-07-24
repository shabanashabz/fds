<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:organisation.php");
}
$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);

$organization = $_POST["organization"];
$event_management = $_POST["event_management"];
$sql = "update rating set organization='$organization',event_management='$event_management' where reg_id='$id'";
$updat = mysqli_query($db, $sql);
$user = "select * from registration where reg_id='$id'";
$result = mysqli_query($db, $user);
$details = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
