<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/main-style.css" />

</head>

<body>
    <!-- Navigation -->
    <?php
      include 'templates/navbar-home.php';
    ?>
    <div class="jumbotron ">
        <div class="container text-center bg-light pt-5 pb-1">
            <hr>
            <h1>
                <span class="bg-primary" style="color:cornsilk; padding: 6px; border-radius:5px">Login</span>
                to access your <u>Personalized Account</u>!
            </h1>
            <div class="text-center">
                <h5 class="mt-4">
                    <strong style="color:coral;">
                        <u>Sign In</u>
                    </strong>
                    <span class="rounded p-1" style="color:white; background-color: coral;"> Sikkim-Tourism </span>
                </h5>
                <hr>
            </div>
        </div>

        <div class="container bg-light" style="max-width:700px; padding: 30px;">
            <?php
            if (!empty($error_msg)) {
                echo "<h4><span class='badge bg-warning p-2'>ERRORS: </span><br></h4>";
                echo $error_msg;
                echo "<hr>";
            }
            ?>
            <form method="post" name="registration_form" action="includes/process_login.php">
                <div class="form-row">
                    <div class="form-group input-group" style="padding-top:20px">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username</span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username ">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group input-group" style="padding-top:20px">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Password">
                    </div>
                </div>

                <div class="text-center col-md-12">
                    <?php
                        if (isset($_GET['error'])) {
                            echo '<p class="error">Error Logging In!</p>';
                        }
                        ?>
                </div>

                <div class="row">
                    <div class="text-center mb-3 col-md-12">
                        <button type="submit" value="Login"
                            class="btn btn-lg btn-primary btn-block btn-rounded z-depth-1"
                            onclick="formhash(this.form, this.form.password);">Log In</button>
                    </div>
                </div>

                <div class="rnotice">
                    <?php
                if(strcmp($logged, 'in') == 0)
                {
                  echo '<p>You are currently logged '.$logged.' as <a href="users-area/dashboard.php">'.htmlentities($_SESSION['username']).'</a><br><br>
                        If you are done, please <a href="./includes/logout.php">log out</a>.</p>';
                }
                else {
                  echo '<p>Haven\'t Registered Yet? <a href="register.php">Register yourself, NOW </a>!</p>';
                }
                ?>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto mb-4 text-center">
        <p style="font-size:12px">Made with 💜 by Harsh, Muksam, Pallav and Siddharth</p>
        <p style="font-size:15px">| Sec C | 5<sup>th</sup> | CSE - SMIT</p>
    </footer>

    <script type="text/JavaScript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/JavaScript" src="assets/js/popper.min.js"></script>
    <script type="text/JavaScript" src="assets/js/bootstrap.min.js"></script>

    <script type="text/JavaScript" src="assets/js/sha512.js"></script>
    <script type="text/JavaScript" src="assets/js/forms.js"></script>

</body>

</html>