<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    ?>
    <a href='logout.php'>Click here to log out</a>
    <?php
}
else
 {
    header("location:login.php");
//     echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
}
