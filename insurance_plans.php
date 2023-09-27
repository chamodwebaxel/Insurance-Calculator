<?php

require_once __DIR__ . '/database.php';

$age = $_POST['age'];
$benifit = $_POST['benifit'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$is_pre_condition = $_POST['is_pre_condition'];

$date1 = new DateTime($start_date);
$date2 = new DateTime($end_date);

$interval = $date1->diff($date2);

// Get the number of days 
$numberOfDays = $interval->days;



$rates_data = array();

$sql = "SELECT * FROM `insurance` ";
$result = mysqli_query($conn, $sql);
if ($result) {
  while ($insurance = mysqli_fetch_assoc($result)) {

    $insurance_id = $insurance['id'];

    $rates_for_age_query = "SELECT * FROM `rates` WHERE $age >= `age_from` AND $age <= `age_to` AND `is_pre_condition` = $is_pre_condition AND `insurance_id` = $insurance_id  limit 1  ";
    $rates_for_ages = mysqli_query($conn, $rates_for_age_query);

    $rate = mysqli_fetch_assoc($rates_for_ages);
    // var_dump('cccc');
    // var_dump($rate);
    // exit();

    if ($rate == null) {
      continue;
    }

    $day_amount = $rate[$benifit];

    $rates_data[] = insurance_cal($day_amount, $insurance, $numberOfDays);


    // var_dump($rate[$benifit]);
    // exit();

    // $data[] = $row;
  }

} else {
  // Handle the query error
}


function insurance_cal($day_amount, $insurance, $numberOfDays){
  
  $insurance_deduct = [];
  $insurance_deduct['insurance_name'] = $insurance['name'];
  $insurance_val = array();

  if ($insurance['amt_0'] > 0) {
    $deduction_rate = $insurance['amt_0'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['0'] = number_format($in_val, 2);
  }
  if ($insurance['75'] > 0) {
    $deduction_rate = $insurance['75'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['75'] = number_format($in_val, 2);
  }
  if ($insurance['150'] > 0) {
    $deduction_rate = $insurance['150'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['150'] = number_format($in_val, 2);
  }
  if ($insurance['250'] > 0) {
    $deduction_rate = $insurance['250'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['250'] = number_format($in_val, 2);
  }
  if ($insurance['500'] > 0) {
    $deduction_rate = $insurance['500'];

    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['500'] = number_format($in_val, 2);
  }
  if ($insurance['1000'] > 0) {
    $deduction_rate = $insurance['1000'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['1000'] = number_format($in_val, 2);
  }
  if ($insurance['2500'] > 0) {
    $deduction_rate = $insurance['2500'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['2500'] = number_format($in_val, 2);
  }
  if ($insurance['5000'] > 0) {
    $deduction_rate = $insurance['5000'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['5000'] = number_format($in_val, 2);
  }
  if ($insurance['10000'] > 0) {
    $deduction_rate = $insurance['10000'];
    $in_val = ($day_amount * $numberOfDays) - (($day_amount * $numberOfDays) * $deduction_rate / 100);
    $insurance_val['10000'] = number_format($in_val, 2);
  }

  $insurance_deduct['insurance_val'] = $insurance_val;


  return $insurance_deduct;

}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Insurance</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet" />
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

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
        height: 44px; /* You can adjust this value to match your design */
      }
    </style>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
      <div
        class="container-fluid d-flex align-items-center justify-content-between"
      >
        <a
          href="index.html"
          class="logo d-flex align-items-center scrollto me-auto me-lg-0"
        >
          <h1>Insurance<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar m-auto">
          <ul>
            <li>
              <a class="nav-link scrollto" href="index.php"><span>Home</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row g-5 justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="comments">
                    <div class="card">
                        <div class="row mb-3 mt-3" style="padding: 15px">
                          <div class="col-md-6">
                            Age :
                            <?= $age ?>
                          </div>
                          <div class="col-md-3">
                            Benefit :
                            $<?= $benifit ?>
                          </div>
                          <div class="col-md-3">
                            Period :
                            <?= $numberOfDays ?>
                          </div>
                        </div>
                    </div>
                    <div class="card mt-1">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table text-center">
                                <thead>
                                  <tr>
                                      <th>Insurance</th>
                                      <th>Benifit</th>
                                      <th>Limitations</th>
                                  </tr>
                                </thead>
                                <tbody>  
                                  <?php foreach ($rates_data as $insurance_deduct): ?>
                                    <tr>
                                      <td>
                                        <?php echo $insurance_deduct['insurance_name']; ?>
                                        <table class="table table-vcenter card-table w-50 ">
                                          <thead>
                                            <tr>
                                                <th>Premium</th>
                                                <th>Deductible</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              <?php foreach ($insurance_deduct['insurance_val'] as $key => $value): ?>
                                              <tr>
                                                <td><?php echo "$$value"; ?></td>
                                                <td><?php echo "$$key"; ?></td>
                                              </tr>
                                            <?php endforeach; ?>
                                          </tbody>
                                        </table>
                                      </td>
                                      
                                      <td>...</td>
                                      <td>...</td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

    </main>
    <!-- End #main -->

    <footer id="footer" class="footer">

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
    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
