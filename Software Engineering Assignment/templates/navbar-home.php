<?php
if(empty($logged))
{
    $logged = '';
}
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <img src="./assets/images/sikkim-logo.jpg" alt="" style="width: 75px; padding: 4px 16px 8px 4px;">
    <a class="navbar-brand btn btn-outline-danger" href=".">SIKKIM - The Land of Wonders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Map of Sikkim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Places to Visit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    Booking
                </a>
                <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="./car_booking.php">Car Booking</a> -->
                    <a class="dropdown-item" href="./Car_Preferences.html">Car Booking</a>
                    <!-- <a class="dropdown-item" href="./hotel_booking.php">Hotel Booking</a> -->
                    <a class="dropdown-item" href="./Hotel_Preferences.html">Hotel Booking</a>
                </div>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link btn btn-outline-warning" href="./contact_us.php">Contact Us</a> -->
                <a class="nav-link btn btn-outline-warning" href="./Contact_Us.html">Contact Us</a>
            </li>
        </ul>

        <?php
        if(strcmp($logged, "in") == 0) {
            echo '        <span class="navbar-text"><a href="includes/logout.php" class="btn btn-danger" style="color:cornsilk;">Log Out</a></span>';
            echo '<span class="navbar-text ml-1"><a href="users-area/dashboard.php" class="btn btn-outline-info">Welcome, '.$_SESSION['username'].'</a></span>';
        }
        else {
            echo '        <span class="navbar-text"><a href="register.php" class="btn btn-primary" style="color:cornsilk;">Sign Up</a></span>';
            echo '<span class="navbar-text ml-1"><a href="login.php" class="btn btn-outline-info">Login</a></span>';
        }
        ?>
    </div>
</nav>