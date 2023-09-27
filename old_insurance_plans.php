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

//  var_dump($insurance_deduct);
//     exit();

  return $insurance_deduct;

}



// var_dump('done');
// exit();


include "layout/header.php";

?>


<div class="container-xl">
  <!-- Page title -->
  <div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          Quotetions
        </h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="row mb-3 mt-3" style="padding: 15px;">
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

    <div class="card">


      <div class="table-responsive">
        <table class="table table-vcenter card-table">
          <thead>
            <tr>
              <th>Insurance</th>
              <th>Plan</th>
              <th>Benifit</th>
              <th>Limitations</th>

            </tr>
          </thead>
          <tbody>


            <?php foreach ($rates_data as $insurance_deduct): ?>
              <tr>
                <td>
                  <?php echo $insurance_deduct['insurance_name']; ?>
                </td>
                <td>
                  <ul>
                    <?php foreach ($insurance_deduct['insurance_val'] as $key => $value): ?>
                      <li>
                        <?php echo "$$key :  $$value"; ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </td>
                <td>...</td>
                <td>...</td>
              </tr>
            <?php endforeach; ?>



          </tbody>
        </table>
      </div>

    </div>
    <!-- Content here -->

  </div>
</div>


<?php
include "layout/footer.php";
?>