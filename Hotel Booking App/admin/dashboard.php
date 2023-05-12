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

    <?php require("modules/header.php"); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, asperiores. Consequatur, dolores distinctio placeat obcaecati eveniet aperiam officiis reiciendis id ex veritatis incidunt quaerat nulla ad at vel hic cumque?
            </div>
        </div>
    </div>

    <!--Link the script to the dashboardphp -->
    <?php require("modules/script.php"); ?>
</body>

</html>