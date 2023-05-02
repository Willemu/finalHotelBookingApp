<?php

//link the essentialsphp to the dashboardphp 
   require("modules/essentials.php");
   adminLogin();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal - Dashboard</title>
<!--Link the Linksphp to the dashboardphp -->
    <?php require("modules/links.php"); ?>
</head>
<body class="bg-light">

    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0">ADMIN PORTAL DASHBOARD</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
 
<!--Link the script to the dashboardphp -->
  <?php require("modules/script.php"); ?>
</body>
</html>