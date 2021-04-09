<?php
include_once 'includes/register_validate.php';
include_once 'includes/functions.php';

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
    <title>Car Booking</title>

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
                <span class="bg-warning" style="color:cornsilk; padding: 6px; border-radius:5px">Check</span>
                Car Availability
            </h1>

            <div class="text-center mt-5">
                <form method="post" name="registration_form"
                    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <div class="form-row">
                        <div class="form-group input-group col-md-6" style="padding-top:20px">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Start Trip</span>
                            </div>
                            <input type="date" name="startTrip" id="startTrip" class="form-control">
                        </div>

                        <div class="form-group input-group col-md-6" style="padding-top:20px">
                            <div class="input-group-prepend">
                                <span class="input-group-text">End Trip</span>
                            </div>
                            <input type="date" name="endTrip" id="endTrip" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group input-group col-md-5" style="padding-top:20px">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No. of Seats</span>
                            </div>
                            <input type="number" name="numSeats" id="numSeats" class="form-control"
                                placeholder="No. of Seats">
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center mb-3 col-md-6">
                            <input type="button" value="Search Availability"
                                class="btn btn-lg btn-info btn-block btn-rounded z-depth-1" />
                        </div>

                        <div class="text-center mb-3 col-md-6">
                            <input type="button" value="Booked a car before? Need another?"
                                class="btn btn-lg btn-warning btn-block btn-rounded z-depth-1" />
                        </div>
                    </div>
                </form>

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