<?php
require("modules/essentials.php");
require("modules/db_config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login Portal</title>
   <?php require("modules/links.php"); ?>
   <style>
      div.login-form {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 400px
      }
   </style>
</head>

<body class="bg-light">

   <div class="login-form text-center rounded bg-white shadow overflow-hidden">
      <form method="POST">
         <h4 class="bg-dark text-white py-3">ADMIN LOGIN PORTAL</h4>
         <div class="p-4">
            <div class="mb-3">
               <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
            </div>
            <div class="mb-4">
               <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
            </div>
            <button name="login" type="submit" class="btn text-white custom-bg shadow-none text-center">LOGIN</button>
         </div>
      </form>
   </div>

   <?php

   //login logic on the admin portal
   if (isset($_POST["login"])) {
      $frm_data = filteration($_POST);

      $query = "SELECT * FROM hotelbooking.user WHERE `admin_name`=? AND `admin_pass`=?";
      $values = [$frm_data["admin_name"], $frm_data["admin_pass"]];
      $res = select($query, $values, "ss");
      if ($res->num_rows == 1) {
         $row = mysqli_fetch_assoc($res);
         session_start();
         $_SESSION['adminlogin'] = true;
         $_SESSION['adminid'] = $row['id'];
         redirect('dashboard.php');         
      } 
      else {
        alert('error','Login failed - Invalid Credentials');
      }
   }
?>

  <?php require("modules/script.php"); ?>

</body>

</html>