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
    $item = $_POST["item"];
    $veg_quantity = $_POST["veg_quantity"];
    $non_veg_quantity = $_POST["non_veg_quantity"];

    if (true) {
        $evt_is_exist = "SELECT * FROM  events  WHERE name='$name'";

        $evt_is_exist_res = mysqli_query($db, $evt_is_exist);
        if ($evt_is_exist_res) {
            // echo mysqli_num_rows($evt_is_exist_res);

            if (mysqli_num_rows($evt_is_exist_res) > 0) {
                $sql = "update events set name='$name',phn_number='$phn_number',address='$address',location='$location',item='$item',veg_quantity='$veg_quantity',non_veg_quantity='$non_veg_quantity' where name='$name'";
                $result = $db->query($sql);
            } else {
                $sql = "INSERT INTO events (created_by,name,phn_number,address,location,item,veg_quantity,non_veg_quantity)VALUES($id,'$name','$phn_number','$address','$location','$item','$veg_quantity','$non_veg_quantity')";
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
            <!-- <div class="food">
                <label>Food Type</label>
                <select name="food_type" required>
                    <option value=""></option>
                    <option value="nonveg">non_veg</option>
                    <option value="veg">Veg</option>

                </select> -->
                <label>Item : </label>
                <input type="text" value="<?php echo $details != null ? $details['item'] : ''; ?>" placeholder="Enter Item" name="item" required><br><br>
                <label>Veg_Quantity : </label>
                <input type="number" value="<?php echo $details != null ? $details['veg_quantity'] : ''; ?>" placeholder="Enter quantity" name="veg_quantity" required><br><br>
                <label>Non-Veg_Quantity : </label>
                <input type="number" value="<?php echo $details != null ? $details['non_veg_quantity'] : ''; ?>" placeholder="Enter quantity" name="non_veg_quantity" required><br><br>


                <div class="button-container">
                    <button type="submit" name="btn">SUBMIT</button>

                    <p>dont have account?<a href="newevent.php">Add new events</a></p>
                </div>
    </form>

