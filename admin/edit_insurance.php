<?php

// require_once __DIR__ . './../database.php';
require_once __DIR__ . '/../init.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php?msg=You have to login");
}

$insurance_id = $_GET['id'];
// $benifit = $_POST['benifit'];
// $start_date = $_POST['start_date'];
// $end_date = $_POST['end_date'];
// $is_pre_condition = $_POST['is_pre_condition'];


$insurance_query = "SELECT * FROM `insurance` WHERE $insurance_id = `id` limit 1  ";
$insurance_result = mysqli_query($conn, $insurance_query);
$insurance = mysqli_fetch_assoc($insurance_result);



$sql = "SELECT * FROM `rates` where `insurance_id` = $insurance_id and  `is_pre_condition` = 0 ";
$result = mysqli_query($conn, $sql);


$sql_pre_condition = "SELECT * FROM `rates` where `insurance_id` = $insurance_id and  `is_pre_condition` = 1 ";
$result_pre_condition = mysqli_query($conn, $sql_pre_condition);




include "layout/header.php";

?>


<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Edit insurance rates
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">

        <form action="edit_insurance_rates.php" method="POST" class="card" enctype="multipart/form-data">
        <div class="card">


            <div class="row" style="margin: 10px;">
                <h2>
                    Edit base rates
                </h2>
            </div>
            <input name="insurance_id" value="<?= $insurance_id ?>" hidden>
            <div class="card" style="margin: 10px;">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <!-- <th rowspan="2">Id</th> -->
                                <th rowspan="2" style="width: 80px;">Age</th>
                                <th colspan="9">Benifit</th>

                            </tr>
                            <tr>
                                <th>$10000</th>
                                <th>$15000</th>
                                <th>$25000</th>
                                <th>$50000</th>
                                <th>$100000</th>
                                <th>$150000</th>
                                <th>$200000</th>
                                <th>$300000</th>
                                <th>$500000</th>


                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($rates = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <!-- <td>
                                    <?php echo $rates['id']; ?>
                                </td> -->

                                    <td>
                                        <?= $rates['age_from'] ?> -
                                        <?= $rates['age_to'] ?>
                                    </td>
                                    <td>
                                        <input name="10000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['10000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="15000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['15000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="25000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['25000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="50000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['50000'] ?>" class="form-control">

                                    </td>
                                    <td>
                                        <input name="100000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['100000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="150000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['150000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="200000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['200000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="300000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['300000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="500000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['500000'] ?>" class="form-control">
                                    </td>
                                </tr>
                            <?php } ?>




                        </tbody>
                    </table>
                </div>
            </div>

            <br>

            <div class="row" style="margin: 0px;">
                <h4>With stable Pre-existing Medical Condition</h4>
            </div>

            <div class="card" style="margin: 10px;">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <!-- <th rowspan="2">Id</th> -->
                                <th rowspan="2" style="width: 80px;">Age</th>
                                <th colspan="9">Benifit</th>

                            </tr>
                            <tr>
                                <th>$10000</th>
                                <th>$15000</th>
                                <th>$25000</th>
                                <th>$50000</th>
                                <th>$100000</th>
                                <th>$150000</th>
                                <th>$200000</th>
                                <th>$300000</th>
                                <th>$500000</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($rates = mysqli_fetch_assoc($result_pre_condition)) { ?>
                                <tr>
                                    <!-- <td>
                                            <?php echo $rates['id']; ?>
                                        </td> -->

                                    <td>
                                        <?= $rates['age_from'] ?> -
                                        <?= $rates['age_to'] ?>
                                    </td>
                                    <td>
                                        <input name="pre_10000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['10000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_15000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['15000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_25000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['25000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_50000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['50000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_100000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['100000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_150000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['150000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_200000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['200000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_300000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['300000'] ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="pre_500000_<?php echo $rates['id']; ?>" type="number" step="0.01"
                                            value="<?= $rates['500000'] ?>" class="form-control">
                                    </td>
                                </tr>
                            <?php } ?>




                        </tbody>
                    </table>
                </div>
            </div>




        </div>

        <br>



        <div class="card">

            <div class="row" style="margin: 10px;">
                <h2>
                    Edit surcharge
                </h2>
            </div>
            <input name="insurance_id" value="<?= $insurance_id ?>" hidden>
            <div class="card" style="margin: 10px;">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                           
                            <tr>
                                <th>$0</th>
                                <th>$75</th>
                                <th>$150</th>
                                <th>$250</th>
                                <th>$500</th>
                                <th>$1000</th>
                                <th>$2500</th>
                                <th>$5000</th>
                                <th>$10000</th>


                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>
                                    <input name="amt_0" type="number" step="0.01"
                                        value="<?= $insurance['amt_0'] ?>" class="form-control">
                                </td>
                                <td>
                                    <input name="amt_75" type="number" step="0.01"
                                            value="<?= $insurance['75'] ?>" class="form-control">
                                </td>
                                <td>
                                        <input name="amt_150" type="number" step="0.01"
                                        value="<?= $insurance['150'] ?>" class="form-control">
                                </td>
                                <td>
                                    <input name="amt_250" type="number" step="0.01"
                                        value="<?= $insurance['250'] ?>" class="form-control">

                                </td>
                                <td>
                                    <input name="amt_500" type="number" step="0.01"
                                        value="<?= $insurance['500'] ?>" class="form-control">
                                </td>
                                <td>
                                    <input name="amt_1000" type="number" step="0.01"
                                        value="<?= $insurance['1000'] ?>" class="form-control">
                                </td>
                                <td>
                                    <input name="amt_2500" type="number" step="0.01"
                                        value="<?= $insurance['2500'] ?>" class="form-control">
                                </td>
                                <td>
                                    <input name="amt_5000" type="number" step="0.01"
                                        value="<?= $insurance['5000'] ?>" class="form-control">
                                </td>
                                <td>
                                    <input name="amt_10000" type="number" step="0.01"
                                        value="<?= $insurance['10000'] ?>" class="form-control">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <br>
            <br>
            <button class="btn btn-primary " style="width: 100px;margin: 20px;">Update</button>

        </div>

        </form>


        <!-- Content here -->

    </div>
</div>


<?php
include "layout/footer.php";
?>