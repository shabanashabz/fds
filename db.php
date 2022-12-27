<?php
session_start();

    $host="localhost";
    $username="root";
    $password="";
    $database="fds";
    $db=new mysqli($host,$username,$password, $database);
    