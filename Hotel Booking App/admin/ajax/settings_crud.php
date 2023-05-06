<?php

  require("../modules/db_config.php");
  require("../modules/essentials.php");
  adminLogin();
  
  
  if(isset($_POST['GET_GENERAL']))
  {
    $q = "SELECT * FROM hotelbooking.settings WHERE `idsettings`=?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
  }

?>