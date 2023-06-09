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

//parameters for whats allowed in admin login user and password blocks    
function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

//login function with failure error messages   
function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select3");
        }
    } else {
        die("Query cannot be prepared - Select4");
    }
}

// function to update the general section of the settings page if the user changes the information
function update($sql,$values,$datatypes)
{
     $con = $GLOBALS['con'];
     if ($stmt = mysqli_prepare($con, $sql)){
         mysqli_stmt_bind_param($stmt, $datatypes,...$values);
         if (mysqli_stmt_execute($stmt)){
             $res = mysqli_stmt_affected_rows($stmt);
             mysqli_stmt_close($stmt);
             return $res;
         } 
         else{
             mysqli_stmt_close($stmt);
             die("Query cannot be executed - Update");
         }
     } 
     else{
        die("Query cannot be prepared - Select4");
     }
 }
