<?php

require_once __DIR__ . './../database.php';

// $age = $_POST['age'];
// $benifit = $_POST['benifit'];
// $start_date = $_POST['start_date'];
// $end_date = $_POST['end_date'];
// $is_pre_condition = $_POST['is_pre_condition'];





$rates_data = array();

$sql = "SELECT * FROM `insurance` ";
$result = mysqli_query($conn, $sql);
if ($result) {
  // while ($insurance = mysqli_fetch_assoc($result)) {
  //   $insurance_id = $insurance['id'];
  // }

} else {
  // Handle the query error
}




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


      <div class="table-responsive">
        <table class="table table-vcenter card-table">
          <thead>
          <tr>
              <th rowspan="2">Insurance</th>
              <th rowspan="2">Plan</th>
              <th colspan="9">Surcharge</th>
              <th rowspan="2">Action</th>

            </tr>
            <tr>
              <th>$0</th>
              <th>$75</th>
              <th>$150</th>
              <th>$250</th>
              <th>$500</th>
              <th>$1000</th>
              <th>$2500</th>
              <th>$5000</th>
              <th>$1000</th>
              

            </tr>
          </thead>
          <tbody>

          <?php 
          while ($insurance = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td>
                  <?php echo $insurance['id']; ?>
                </td>
                <td>
                  <?= $insurance['name'] ?>
                </td>
                <td>
                  <?= $insurance['amt_0'] ?>
                </td>
                <td>
                  <?= $insurance['75'] ?>
                </td>
                <td>
                  <?= $insurance['150'] ?>
                </td>
                <td>
                  <?= $insurance['250'] ?>
                </td>
                <td>
                  <?= $insurance['500'] ?>
                </td>
                <td>
                  <?= $insurance['1000'] ?>
                </td>
                <td>
                  <?= $insurance['2500'] ?>
                </td>
                <td>
                  <?= $insurance['5000'] ?>
                </td>
                <td>
                  <?= $insurance['1000'] ?>
                </td>
                <td>
                  <a class="btn btn-primary" href="./edit_insurance.php?id=<?= $insurance['id'] ?>">Edit</a>
                </td>
              </tr>
            <?php } ?>
            



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