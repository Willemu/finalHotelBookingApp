<?php

require("../modules/db_config.php");
require("../modules/essentials.php");
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
adminLogin();


if (isset($_POST['get_general'])) {
  
  $q = "SELECT * FROM hotelbooking.settings WHERE idsettings=?";
  $values = [1];
  $res = select($q, $values, "i");
  $data = mysqli_fetch_assoc($res);
  $json_data = json_encode($data);
  echo $json_data;
}

if (isset($_POST['upd_general'])) {
  $frm_data = filteration($_POST);

  $q = "UPDATE hotelbooking.settings SET `site_title`=?,`site_about`=? WHERE `idsettings`=?";
  $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
  $res = update($q, $values, 'ssi');
  echo $res;
}

if (isset($_POST['upd_shutdown'])) {
  $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;

  $q = "UPDATE hotelbooking.settings SET `shutdown`=? WHERE `idsettings`=?";
  $values = [$frm_data,1];
  $res = update($q, $values, 'ii');
  echo $res;
}
