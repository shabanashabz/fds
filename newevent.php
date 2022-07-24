<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:events.php");
}

$getid = $_SESSION['id'];
$decoded = base64_decode($getid);
$decoded_encoding = 'iso-2022-jp';
$id = iconv($decoded_encoding, 'UTF-8', $decoded);

if (isset($_POST["btn"])) {
    $name = $_POST["name"];
    $phn_number = $_POST["phn_number"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    if (true) {
        $evt_is_exist = "SELECT * FROM  events  WHERE created_by='$id'";

        $evt_is_exist_res = mysqli_query($db, $evt_is_exist);
        if ($evt_is_exist_res) {
            // echo mysqli_num_rows($evt_is_exist_res);

            if (mysqli_num_rows($evt_is_exist_res) < 0) {
                $sql = "update events set name='$name',phn_number='$phn_number',address='$address',location='$location' where created_by='$id'";
                $result = $db->query($sql);
            } else {
                $sql = "INSERT INTO events (created_by,name,phn_number,address,location)VALUES($id,'$name','$phn_number','$address','$location')";
                $result = $db->query($sql);
            }

            // $sql = "update events set name='$name',phn_number='$phn_number' where created_by_id='$id'";
            // $updat = mysqli_query($db, $sql);
        }
    }
}
$user = "select * from events where created_by='$id'";
$result = mysqli_query($db, $user);
$details = mysqli_fetch_array($result);
if (isset($_POST["btn"])) {
    $food_type = $_POST["food_type"];
    $item = $_POST["item"];
    $quantity = $_POST["quantity"];

    if (true) {
        $food_is_exist = "SELECT * FROM  food  WHERE evente_id='$id'";

        $food_is_exist_res = mysqli_query($db, $food_is_exist);
        if ($food_is_exist_res) {
            // echo mysqli_num_rows($food_is_exist_res);

            if (mysqli_num_rows($food_is_exist_res) > 0) {
                $sql1 = "update food set food_type='$food_type',item='$item',quantity='$quantity' where evente_id='$id'";
                $result1 = $db->query($sql1);
            } else {
                $sql1 = "INSERT INTO food (evente_id,food_type,item,quantity)VALUES($id,'$food_type','$item','$quantity')";
                $result1 = $db->query($sql1);
            }

            // $sql = "update events set name='$name',phn_number='$phn_number' where created_by_id='$id'";
            // $updat = mysqli_query($db, $sql);
        }
    }
}
$user1 = "select * from food where evente_id='$id'";
$result1 = mysqli_query($db, $user1);
$details1 = mysqli_fetch_array($result1);
// $user1 = "SELECT * FROM `organization` WHERE created_by='$id'";
// $result1 = mysqli_query($db, $user1);
// $details1 = mysqli_fetch_array($result1);
?>
<form action="events.php" method="POST" enctype="multipart/form-data">
        <div class="new">

            <label>Name : </label>
            <input type="text" value="<?php echo $details != null ? $details['name'] : ''; ?>" placeholder="Enter name" name="name" required><br><br>
            <label>Phn Number : </label>
            <input type="number" value="<?php echo $details != null ? $details['phn_number'] : ''; ?>" placeholder="Enter phn_number " name="phn_number" required><br><br>
            <label>Address : </label>
            <input type="text" value="<?php echo $details != null ? $details['address'] : ''; ?>"placeholder="Enter address " name="address" required><br><br>
            <label>Location : </label>
            <input type="text" value="<?php echo $details != null ? $details['location'] : ''; ?>" placeholder="Enter location " name="location" required><br><br>
        <div class="food">
            <label>Food Type</label>
            <select name="food_type" required>
                <option value=""></option>
                <option value="nonveg">non_veg</option>
                <option value="veg">Veg</option>

            </select>
            <label>Item : </label>
            <input type="text" value="<?php echo $details1 != null ? $details1['item'] : ''; ?>" placeholder="Enter Item" name="item" required>
            <label>Quantity : </label>
            <input type="number" value="<?php echo $details1 != null ? $details1['quantity'] : ''; ?>" placeholder="Enter quantity" name="quantity" required><br><br>

            <div class="button-container">
                <button type="submit" name="btn">LOGIN</button>


            </div>
    </form>










