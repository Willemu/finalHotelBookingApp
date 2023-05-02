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
        <h3 class="mb-0 h-font">ULTIMATE HOTELS</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">ADMIN PORTAL</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretched mt-2" id="filterDropdown">
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font: 18px;">CHECK AVAILABILITY</h5>
                        <label class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label class="form-label">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font: 18px;">FACILITIES</h5>
                    <div class="mb-2">
                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                        <label class="form-check-label" for="f1">Aircon</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                        <label class="form-check-label" for="f2">TV</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                        <label class="form-check-label" for="f3">Wifi</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
                        <label class="form-check-label" for="f4">Spa</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="f5" class="form-check-input shadow-none me-1">
                        <label class="form-check-label" for="f5">Radio</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="f6" class="form-check-input shadow-none me-1">
                        <label class="form-check-label" for="f6">Heater</label>
                    </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font: 18px;">GUESTS</h5>
                    <div class="d-flex">
                        <div class="me-3">
                            <label class="form-label">Adults</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div>
                            <label class="form-label">Children</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </nav>

    </div>

    <!--Link the script to the dashboardphp -->
    <?php require("modules/script.php"); ?>
</body>

</html>