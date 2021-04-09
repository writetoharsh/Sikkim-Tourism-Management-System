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
    <title>Welcome to Sikkim, The Land of Wonders</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/main-style.css" />

</head>

<body>
    <!-- Navigation -->
    <?php
      include 'templates/navbar-home.php';
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="4000">
                <img src="assets/images/banner1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Have an amazing stay !</h3>
                    <br>
                    <br>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <img src="assets/images/banner3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>We provide cab services</h3>
                    <br>
                    <br>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <img src="assets/images/banner2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Hotels at best prices</h3>
                    <br>
                    <br>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="jumbotron">
        <div class="container text-center bg-light p-5 mb-5 rounded">
            <h1 class="">Welcome to Sikkim, The Land of Wonders!</h1>
            <p style="color:grey"><i>Help us serve you better</i></p>
            <p>
                We provide cab services, hotels at best prices. We assure
                you, you'll have an amazing stay here. <br> No Worries. Enjoy your stay here!
            </p>
        </div>

        <hr style="background-color: black;">

        <div class="container bg-warning p-2 text-center rounded">
            <div class="">
                <h1 style="border-bottom: dotted 1px white; padding:20px;">Meet The Founders</h1>
            </div>


            <div class="card-deck text-center p-5 row">
                <div class="card border-success mb-3 col-md-3" style="">
                    <div class="card-header bg-transparent border-success">
                        <strong>
                            Harsh --
                        </strong>
                    </div>
                    <img src="assets/images/avatar-harsh.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">An Explorer</div>
                </div>

                <div class="card border-success mb-3 col-md-3" style="">
                    <div class="card-header bg-transparent border-success">
                        <strong>
                            Muksam Limboo
                        </strong>
                    </div>
                    <img src="assets/images/avatar-muksam.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">The Geek</div>
                </div>

                <div class="card border-success mb-3 col-md-3" style="">
                    <div class="card-header bg-transparent border-success">
                        <strong>
                            Pallav Bishi
                        </strong>
                    </div>
                    <img src="assets/images/avatar-pallav.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">The Observer</div>
                </div>

                <div class="card border-success mb-3 col-md-3" style="">
                    <div class="card-header bg-transparent border-success">
                        <strong>
                            Siddharth Chhetri
                        </strong>
                    </div>
                    <img src="assets/images/avatar-siddharth.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">The Expert</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto mb-4 text-center">

        <p style="font-size:12px">Made with 💜 by Harsh, Muksam, Pallav and Siddharth</p>
        <p style="font-size:15px">| Sec C | 5<sup>th</sup> | CSE - SMIT</p>

    </footer>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>