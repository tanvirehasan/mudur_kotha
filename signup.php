<?php
session_start();
require_once "config/db_conn.php";
require_once "config/function.php";
require_once "php/users_sql.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up | Dr. Mohammed Sakhawat Hossain</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="assets/images/logo/logo.png">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class=" font-weight-light">If you already have an account, just <a href="login.php">Login</a></h6>
                            <span class="text-danger fw-bold">
                                <?php if (isset($mess)) {
                                    echo $mess;
                                } ?></span>
                            <form class="pt-3" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="user_name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="user_pass" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="signup_btn" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGNUP</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>

</body>

</html>