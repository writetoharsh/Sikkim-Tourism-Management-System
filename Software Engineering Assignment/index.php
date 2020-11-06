<!DOCTYPE html>

<html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/w3.css" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/main-style.css" />

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
            <div class="carousel-item active" data-interval="3500">
                <img src="assets/images/banner1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Have an amazing stay !</h1>
                    <br>
                    <br>
                </div>
            </div>
            <div class="carousel-item" data-interval="3500">
                <img src="assets/images/banner3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>We provide cab services</h1>
                    <br>
                    <br>
                </div>
            </div>
            <div class="carousel-item" data-interval="3500">
                <img src="assets/images/banner2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Hotels at best prices</h1>
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
                We provide cab services, hotels at the best prices available, so that
                you have an amazing stay here and don't need to worry about anything.
            </p>
        </div>

        <hr style="background-color: black;">

        <div class="container text-center">
            <button class="bg-warning p-2 rounded">
                <h1 class="">Meet The Founders</h1>
            </button>
        </div>

        <div class="card-deck text-center p-5 row">
            <div class="card border-success mb-3 col-md-3" style="">
                <div class="card-header bg-transparent border-success">
                    <strong style="color:brown; font-size: 22px; text-shadow:yellow 3px 3px 10px">
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
                    <strong style="color:black; font-size: 22px; text-shadow:yellow 3px 3px 10px">
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
                    <strong style="color:blue; font-size: 22px; text-shadow:yellow 3px 3px 10px">Pallav Bishi</strong>
                </div>
                <img src="assets/images/avatar-pallav.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                </div>
                <div class="card-footer bg-transparent border-success">The Observer</div>
            </div>

            <div class="card border-success mb-3 col-md-3" style="">
                <div class="card-header bg-transparent border-success">
                    <strong style="color:grey; font-size: 22px; text-shadow:yellow 3px 3px 10px">
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

    <!-- Footer -->
    <footer class="footer mt-auto mb-4 text-center">

        <p style="font-size:12px">Made with 💜 by Harsh, Muksam, Pallav and Siddharth</p>
        <p style="font-size:15px">| Sec C | 5<sup>th</sup> | CSE - SMIT</p>

    </footer>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1;
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3000);
    }
    </script>
</body>

</html>