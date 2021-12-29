<!doctype html>
<html lang="en">
<?php include('header.php') ?>

<title>Gallery</title>
</head>

<body class="gallery">
    <?php include('navbar.php') ?>

    <div class="h1">
        <h1>Gallery</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-2 ">
        <div class="col-lg-5">
            <a href="./galleryorient.php">
                <div class="card">
                    <img src="./assets/img/about2.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Orient Club</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-5">
            <a href="./galleryroom.php">
                <div class="card">
                    <img src="./assets/img/Suit2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Residential Rooms</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-5">
            <a href="./galleryactivities.php">
                <div class="card">
                    <img src="./assets/img/Billiards2.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Activities</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-5">
            <a href="./galleryevent.php">
                <div class="card">
                    <img src="./assets/img/banquet2.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Event Spaces</h5>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-5">
            <a href="./galleryrest.php">
                <div class="card">
                    <img src="./assets/img/rest2.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant and Coffee Shop</h5>
                    </div>
                </div>
            </a>

        </div>


    </div>


    <div style="height: 10vh;"></div>






    <?php include('footer.php') ?>
    <?php include('top.php') ?>
    <script src="./assets/js/top.js"> </script>


    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/recent.js"></script>
    <script src="./assets/js/date.js"></script>
    <script src="./assets/js/scrolling.js"></script>



</body>

</html>