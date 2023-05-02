<?php

//Link the essesntialsphp to the logoutphp
 require("modules/essentials.php");

//redirect to the index page when the user clicks on the logout button 
 session_start();
 session_destroy();
 redirect("index.php");

?>