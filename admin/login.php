<?php
require_once __DIR__ . '/../init.php';


$adminUN = ADMIN_USER_NAME;
$adminPW = ADMIN_PASSWD;

// session_start();

// check the user is loged to the system
// if (isset($_SESSION['username'])) {
//   echo '<script>alert("dddd");</script>';
//   header("Location: cargo_rates_list.php");
// }


if(isset($_POST['submit'])){

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];



  if(($adminUN == $user_name) && ($adminPW == $password) ){
    // echo '<script>alert("done");</script>';
    // exit();
    header("Location: index.php");
  }else{
    // echo '<script>alert("fail");</script>';
    // exit();
    header("Location: login.php?msg=Login Failed");
  }
  //create session and save user data on session
  $_SESSION['username'] = $user_name;

}

?>

<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in </title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      
      <div class="container-tight py-4">
      <?php
              if(isset($_GET['msg'])){
                      $msg = $_GET['msg'];
                      echo '<div class="alert alert-danger" role="alert">
                      '.$msg.'
                  </div>
                  ';
                  }

            ?>
        
        <form class="card card-md" action="" method="post" autocomplete="off">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login to your account</h2>
            <div class="mb-3">
              <label class="form-label">User Name</label>
              <input type="text" name="user_name" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
              </label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control"  placeholder="Password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            
            <div class="form-footer">
              <button type="submit" name="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
          
        </form>
        
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
  </body>
</html>