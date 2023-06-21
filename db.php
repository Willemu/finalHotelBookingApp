<?php
//connecting the db(hotelbooking)
$hname = "localhost";
$uname = "root";
$pass = "Winter01@";
$db = "hotelbooking";

//attempt to connect to MySQL database    
$con = mysqli_connect($hname, $uname, $pass, $db);

//message if the connection is not successful
if (!$con) {
    die("Cannot connect to Database" . mysqli_connect_error());
}