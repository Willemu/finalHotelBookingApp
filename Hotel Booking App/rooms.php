<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ultimate Hotels - Hotels</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <?php require("modules/links.php"); ?>

</head>

<body class="bg-light">

  <?php require("modules/header.php"); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR HOTELS</h2>
    <div class="h-line bg-dark">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
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

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/Rooms/2.png" class="img-fluid rounded" alt="roomtwo">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Hotel</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Room
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
              </div>
              <div class="comfort mb-4">
                <h6 class="mb-1">Comfort</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Airconditioning
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>

              </div>
            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4">R2000 per night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
            <div class="card mb-4 border-0 shadow">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                  <img src="images/Rooms/2.png" class="img-fluid rounded" alt="roomtwo">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                  <h5 class="mb-3">Simple Hotel</h5>
                  <div class="features mb-3">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Room
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Balcony
                    </span>
                  </div>
                  <div class="comfort mb-4">
                    <h6 class="mb-1">Comfort</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Airconditioning
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Television
                    </span>
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </span>

                  </div>
                </div>
                <div class="col-md-2 mt-lg-0 mt-md-0 mt=4 text-center">
                  <h6 class="mb-4">R2000 per night</h6>
                  <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                </div>
                <div class="card mb-4 border-0 shadow">
                  <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                      <img src="images/Rooms/2.png" class="img-fluid rounded" alt="roomtwo">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                      <h5 class="mb-3">Simple Hotel</h5>
                      <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Room
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          1 Balcony
                        </span>
                      </div>
                      <div class="comfort mb-4">
                        <h6 class="mb-1">Comfort</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Airconditioning
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Television
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                        </span>

                      </div>
                    </div>
                    <div class="col-md-2 text-center">
                      <h6 class="mb-4">R2000 per night</h6>
                      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                    </div>
                  </div>
                </div>
              </div>


              <?php require("modules/footer.php"); ?>

              <?php require("modules/headerModals.php"); ?>

</body>

</html>