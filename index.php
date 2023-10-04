<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insurance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    /* Adjust the height of the select element */
    .form-select {
      height: 44px;
      /* You can adjust this value to match your design */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="./" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>YourLogo<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>


          <li><a class="nav-link scrollto" href="./">Home</a></li>
          <li><a class="nav-link scrollto" href="./">About</a></li>
          <li><a class="nav-link scrollto" href="./">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="./">
        Free Quotes
      </a>

    </div>
  </header>
  <!-- End Header -->



  <main id="main" class="mb-5">

    <section id="hero-static" class="hero-static d-flex align-items-center">
      <div
        class="container d-flex flex-column justify-content-center align-items-center text-center position-relative aos-init aos-animate"
        data-aos="zoom-out">
        <h2>Visitors to <span>Canada</span></h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
            class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
              Video</span></a>
        </div>
      </div>
    </section>


    <section id="blog" class="blog">

      <div class="container" data-aos="fade-up">

        <div class="row g-5 justify-content-center align-items-center">

          <div class="col-lg-7 ">

            <div class="calc-card">

              <h3> FREE <em>Quotes</em> </h3>
              <form action="insurance_plans.php" class="calc-form" method="GET" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="col-md-12 form-group">
                    <label for="age">Age(s)*</label>

                    &nbsp;&nbsp;<a id="more_visit_div_id" href="#" onclick="showMoreVisitor()">Add More Visitor</a>

                    <div class=" row">

                      <div class="col-md-3" id="visitor_1">
                        <input name="age" id="age" type="number" class="form-control" placeholder="Age(s)*" required>
                      </div>
                      <div class="col-md-3" id="visitor_2" hidden>
                        <input name="age_1" id="age_1" type="number" class="form-control" placeholder="Age(s)">
                      </div>
                      <div class="col-md-3" id="visitor_3" hidden>
                        <input name="age_2" id="age_2" type="number" class="form-control" placeholder="Age(s)">
                      </div>
                      <div class="col-md-3" id="visitor_4" hidden>
                        <input name="age_3" id="age_3" type="number" class="form-control" placeholder="Age(s)">
                      </div>

                    </div>
                  </div>
                </div>





                <div class="row mb-3">
                  <div class="col-md-12 form-group">
                    <label for="benifit">Benefit</label>
                    <select class="form-select" name="benifit">
                      <option value="10000">$ 10 000</option>
                      <option value="15000">$ 15 000</option>
                      <option value="25000">$ 25 000</option>
                      <option value="50000">$ 50 000</option>
                      <option value="100000">$ 100 000</option>
                      <option value="150000">$ 150 000</option>
                      <option value="200000">$ 200 000</option>
                      <option value="300000">$ 300 000</option>
                      <option value="500000">$ 500 000</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6 form-group">
                    <label for="start_date">Start Date</label>
                    <input name="start_date" type="date" class="form-control">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="end_date">End Date</label>
                    <input name="end_date" type="date" class="form-control">
                  </div>
                </div>
                <div class="row mt-3">
                  <label> <b>Would you like to cover a STABLE existing medical condition?</b> (The coverage is subject
                    to
                    policy limits. Please, read your insurance policy for all terms and conditions)</label>
                </div>

                <div class="row mt-3 text-center">
                  <div>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="is_pre_condition" value='1'>
                      <span class="form-check-label">Yes</span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="is_pre_condition" value='0' checked>
                      <span class="form-check-label">No</span>
                    </label>
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button class="btn cta-btn">Get Quote</button>
                </div>

              </form>


            </div><!-- End blog comments -->

          </div>
        </div>

      </div>
    </section>


  </main><!-- End #main -->

  <footer id="footer" class="footer mt-5">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HeroBiz</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>


  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    function showMoreVisitor() {

      $('#visitor_2').removeAttr("hidden");
      $('#visitor_3').removeAttr("hidden");
      $('#visitor_4').removeAttr("hidden");

      $("#more_visit_div_id").prop("hidden", true);

    }
  </script>

</body>

</html>