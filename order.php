<?php
include "db.php";
if (!isset($_SESSION['id'])) {
    header("location:order.php");
}

// $getid = $_SESSION['id'];
// $decoded = base64_decode($getid);
// $decoded_encoding = 'iso-2022-jp';
// $id = iconv($decoded_encoding, 'UTF-8', $decoded);

error_reporting(0);
$query = "select * from events where date>=cu";
$data = mysqli_query($db, $query);
$total = mysqli_num_rows($data);
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oders | FDS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="./static/css/order.css" />
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCARJ5JnRWxCD2ica1_3pjp73-278H3FaI&libraries=places"></script>

    <script src="./static/js/distance.js"></script>
  </head>

  <body>
    <div class="container">
      <!-- <form action="#" class="filter">
        <input type="search" name="filtter" id="filtter" />
        <button>filtter</button>
      </form> -->
      <table>
        <thead>
          <tr>
            <th>NAME</th>
            <th>PHN_NUMBER</th>
            <th>ADDRESS</th>
            <th>LOCATION</th>
            <th>ITEMS</th>
            <th>VEG-QUANTITY</th>
            <th>NON_VEG-QUANTITY</th>

            <th></th>
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
          <td>" . $result['name'] . "</td>
          <td>" . $result['phn_number'] . "</td>
          <td>" . $result['address'] . "</td>
          <td>" . $result['location'] . "</td>
          <td>" . $result['item'] . "</td>
          <td><i class='fa fa-circle'></i>" . $result['veg_quantity'] . "</td>
          <td><i class='fa fa-circle'></i>" . $result['non_veg_quantity'] . "</td>

          <td><a href='booknow.php' title='book order'><i class='fa fa-cart-plus'></i></a></td>
        </tr>
      ";
    }
} else {
    echo "no recors found";
}
?>
        </tbody>
      </table>
    </div>

    <!-- <script src="js/all.min.js"></script> -->
  </body>
</html>
