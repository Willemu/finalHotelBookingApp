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

 <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0 h-font">ULTIMATE HOTELS</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
 </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">ADMIN PORTAL</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretched mt-2" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

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