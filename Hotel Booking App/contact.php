<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ultimate Hotels - CONTACT US</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <?php require("modules/links.php"); ?>

</head>

<body class="bg-light">

  <?php require("modules/header.php"); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mg-3">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Ratione culpa explicabo, <br> nesciunt ipsa ad corrupti placeat
      quidem quod eum modi.
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.3745981358006!2d28.184208711464944!3d-25.857145677197334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95643720fe0389%3A0xc941ff63540e5238!2sCenturion%20Mall!5e0!3m2!1sen!2sza!4v1682266601744!5m2!1sen!2sza" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://goo.gl/maps/47cKY34FL2s2Sgvy6" target="_blank" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-geo-alt"></i>123 Centurion Mall, Die Hoewes, Centurion, 0157
          </a>
          <br>
          <br>
          <h5>Call Us</h5>
          <a href="Tel: +27 111 2233" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
            +27 222 2233
          </a>
          <br>
          <br>
          <h5>Email Us</h5>
          <a href="email: hot@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i>
            hot@gmail.com
          </a>
          <br>
          <br>
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <span class="badge bg-light text-dark fs p-2">
              <i class="bi bi-twitter me-1"></i>
            </span>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <span class="badge bg-light text-dark fs p-2">
              <i class="bi bi-facebook me-1"></i>
            </span>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <span class="badge bg-light text-dark fs p-2">
              <i class="bi bi-instagram me-1"></i>
            </span>
          </a>

        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send us a message</h5>
            <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label" style="font-weight:500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
        </div>

      </div>
    </div>


    <?php require("modules/footer.php"); ?>

    <?php require("modules/headerModals.php"); ?>

</body>

</html>