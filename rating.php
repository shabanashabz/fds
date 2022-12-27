
<?php
include "db.php";
?>
<?php
if (isset($_POST["rate"]))
{
  $ratevalue=$_POST["rate"];
}
if (isset($_POST["btn"]))
 
  if(!empty($_POST["rate"]))
  {
    $rate=$_POST["rate"];
    $query="INSERT INTO rating(event_management)values('$rate')";
    $run=mysqli_query($db, $query);

  }
  else
  
    echo "pls rate us"
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./static/css/rating.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    *{
      margin: 0;
      background-color: white;
    }
    h1 {
      color: rgb(6, 6, 5);
      width: 100px;
      height: 60px;
      margin-left: 620px;
      border-radius: 4px;
      padding: 80px;
      font-family: ui-rounded;
      font-size: 400%;
      text-align: center;
      font-weight: 800;
    }
    button{
      color: white;
      border-color: rgb(20, 12, 12);
      background-color: #9d598c;
    }
    button:hover{
      background-color: rgb(20, 12, 12);
    }
    .rate {
  float: left;
  height: 46px;

  align-items: center;
  justify-content: center;
  height: 80vh;
  margin-left: 620px;
  margin-top: 100px;
}
.rate label {
  float: right;
  width: 2em;
  overflow: hidden;
  white-space: nowrap;
  cursor: pointer;
  font-size: 30px;
  color: #ccc;
}
.rate a {
  background-color: #845;
  width: 200px;
  height: 60px;
  margin-left: 25px;
  border-radius: 2px;
  font-family: ui-rounded;
  font-size: 40px;
  text-decoration: none;

}
    .rate a:hover{
      color:black;
      border-color: white;
      background-color: white;
    }

  </style>

  <title>Document</title>
</head>
<body>
<h1> Rate Us</h1>
<form action="rating.php" method="post">

    <div class="rate">
        <input type="radio" class="fas fa-star" name="rate" value=5 id="rate-5">
        <label for="rate-5" ></label>
        <input type="radio"  class="fas fa-star"name="rate" value=4 id="rate-4">
        <label for="rate-4"></label>
        <input type="radio" class="fas fa-star" name="rate" value=3 id="rate-3">
        <label for="rate-3" ></label>
        <input type="radio" class="fas fa-star" name="rate" value=2 id="rate-2">
        <label for="rate-2" ></label>
        <input type="radio" class="fas fa-star" name="rate" value=1 id="rate-1">
        <label for="rate-1" ></label>
        <br><br><br>
            <button type="submit" name="btn" onclick="myFunction()">Post</button><br><br>
            <a href="eventhome.php">Back to home</a>
        </form>
        </div>
        <script>
         function myFunction(){
            alert("Thank You For Rating Us");
         }
        </script>
</body>
</html>
