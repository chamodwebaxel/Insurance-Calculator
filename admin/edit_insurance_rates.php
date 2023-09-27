<?php

// require_once __DIR__ . './../database.php';
require_once __DIR__ . '/../init.php';

// $age = $_POST;
// var_dump($age);
// exit();


$insurance_id = $_POST['insurance_id'];

$amt_0 = $_POST['amt_0'];
$amt_75 = $_POST['amt_75'];
$amt_150 = $_POST['amt_150'];
$amt_250 = $_POST['amt_250'];
$amt_500 = $_POST['amt_500'];
$amt_1000 = $_POST['amt_1000'];
$amt_2500 = $_POST['amt_2500'];
$amt_5000 = $_POST['amt_5000'];
$amt_10000 = $_POST['amt_10000'];

$insurance_update_query = "UPDATE `insurance` SET `amt_0` = '$amt_0'
, `75` = '$amt_75'
, `150` = '$amt_150'
, `250` = '$amt_250'
, `500` = '$amt_500'
, `1000` = '$amt_1000'
, `2500` = '$amt_2500'
, `5000` = '$amt_5000'
, `10000` = '$amt_10000'
 WHERE `id` = $insurance_id";
  $insurance_update_result = mysqli_query($conn, $insurance_update_query);






$sql = "SELECT * FROM `rates` where `insurance_id` = $insurance_id and  `is_pre_condition` = 0 ";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($rate = mysqli_fetch_assoc($result)) {
        $rate_id = $rate['id'];


        // $age = $_POST['50000_'.$rate_id];
        // var_dump($age);
        // exit();
        
         // Assuming you have a column named 'rate_id'

        $amt_10000 = $_POST['10000_'.$rate_id];
        $amt_15000 = $_POST['15000_'.$rate_id];
        $amt_25000 = $_POST['25000_'.$rate_id];
        $amt_50000 = $_POST['50000_'.$rate_id];
        $amt_100000 = $_POST['100000_'.$rate_id];
        $amt_150000 = $_POST['150000_'.$rate_id];
        $amt_200000 = $_POST['200000_'.$rate_id];
        $amt_300000 = $_POST['300000_'.$rate_id];
        $amt_500000 = $_POST['500000_'.$rate_id];

        // Example: Update the 'some_column' column in the 'rates' table
        $update_query = "UPDATE `rates` SET `10000` = '$amt_10000'
        , `15000` = '$amt_15000'
        , `25000` = '$amt_25000'
        , `50000` = '$amt_50000'
        , `100000` = '$amt_100000'
        , `150000` = '$amt_150000'
        , `200000` = '$amt_200000'
        , `300000` = '$amt_300000'
        , `500000` = '$amt_500000'
         WHERE `id` = $rate_id";

        // Execute the update query
        $update_result = mysqli_query($conn, $update_query);
        
    }

} else {
    // Handle the query error
}




$sql = "SELECT * FROM `rates` where `insurance_id` = $insurance_id and  `is_pre_condition` = 1 ";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($rate = mysqli_fetch_assoc($result)) {
        $rate_id = $rate['id'];

         // Assuming you have a column named 'rate_id'

        $amt_10000 = $_POST['pre_10000_'.$rate_id];
        $amt_15000 = $_POST['pre_15000_'.$rate_id];
        $amt_25000 = $_POST['pre_25000_'.$rate_id];
        $amt_50000 = $_POST['pre_50000_'.$rate_id];
        $amt_100000 = $_POST['pre_100000_'.$rate_id];
        $amt_150000 = $_POST['pre_150000_'.$rate_id];
        $amt_200000 = $_POST['pre_200000_'.$rate_id];
        $amt_300000 = $_POST['pre_300000_'.$rate_id];
        $amt_500000 = $_POST['pre_500000_'.$rate_id];

        // Example: Update the 'some_column' column in the 'rates' table
        $update_query = "UPDATE `rates` SET `10000` = '$amt_10000'
        , `15000` = '$amt_15000'
        , `25000` = '$amt_25000'
        , `50000` = '$amt_50000'
        , `100000` = '$amt_100000'
        , `150000` = '$amt_150000'
        , `200000` = '$amt_200000'
        , `300000` = '$amt_300000'
        , `500000` = '$amt_500000'
         WHERE `id` = $rate_id";

        // Execute the update query
        $update_result = mysqli_query($conn, $update_query);
        
    }

} else {
    // Handle the query error
}


//return back
// $url = $_SERVER['HTTP_REFERER'];

$url = "./index.php"; // Replace with your desired URL

// Use the header function to redirect back to the previous URL
header("Location: $url");
exit;




?>