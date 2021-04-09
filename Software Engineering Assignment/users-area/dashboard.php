<?php
include_once '../includes/register_validate.php';
include_once '../includes/functions.php';

$logged = 'out';

sec_session_start();

if (login_check($mysqli) == true) :

?>

<?php
    $logged = 'in';
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hotel Booking</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/main-style.css" />

</head>

<body>
    <!-- Navigation -->
    <?php
      include '../templates/navbar-home.php';
    ?>
    <div class="jumbotron ">
        <div class="container text-center bg-light pt-5 pb-1">
            <hr>
            <h4>
                <span class="bg-success" style="color:cornsilk; padding: 6px; border-radius:5px">Dashboard</span>
                <u>Welcome, <?php echo $_SESSION['username'] ?></u>
            </h4>
            <div class="text-center mt-5">
                <a href="login.php" class="btn btn-outline-warning">
                    <span class="rounded p-3" style="color:white; background-color: coral;">Sikkim Tourism</span>
                    <strong style="color:blue;">
                        to Start getting services
                    </strong>
                </a>
                <hr>
            </div>
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

    <?php else : ?>
    <p><span class="error">You are not authorized to access this page.</span> Please <a href="./login.php">login</a>.
    </p>
    <?php endif; ?>
</body>

</html>