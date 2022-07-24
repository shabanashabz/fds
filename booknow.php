<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:order.php");
}
$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);

if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $veg_quantity = $_POST["veg_quantity"];
    $non_veg_quantity = $_POST["non_veg_quantity"];

    

    $sql = "INSERT INTO quantity (created_by,name,veg_quantity,non_veg_quantity)VALUES($id,'$name','$veg_quantity','$non_veg_quantity')";
                $result = $db->query($sql);
}
$user1 = "SELECT name FROM `organization`  where created_by='$id'";
    $result1 = mysqli_query($db, $user1);
    $details1 = mysqli_fetch_array($result1);
?>



    <form action="booknow.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <label>name : </label>
            <input type="text"  value="<?php echo $details1 != null ? $details1['name'] : ''; ?>" placeholder="Enter name" name="name" required><br><br>
            <label> veg : </label>
            <input type="number" placeholder="Enter quantinty" name="name"></option><br><br>

            <label>Non veg : </label>
            <input type="number" placeholder="Enter quantinty" name="name"> </option><br><br>
    
            <button type="button" name="btn">DONE</button><br><br><br>

        </div>
    </form>
