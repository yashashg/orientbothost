<!doctype html>
<html lang="en">
<?php include('header.php') ?>

<title>Gallery</title>
</head>

<body class="gallery">
    <?php include('navbar.php') ?>

    <div class="h1">
        <h1>Event Spaces</h1>
    </div>



    <div class="h2">
        <h3>Banquet Hall</h3>
    </div>
    <div data-toggle="modal" data-target="#staticBackdrop1">
        <div class="galls">
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/banquet1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/banquet2.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/banquet3.jpg" class="card-img-top" alt="...">
            </div>
        </div>

        <div class="galls">
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/banquet4.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/banquet5.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/banquet6.JPG" class="card-img-top" alt="...">
            </div>
        </div>

    </div>



    <div class="h2">
        <h3>Conference Room</h3>
    </div>
    <div data-toggle="modal" data-target="#staticBackdrop3">
        <div class="galls">
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/conference1.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/conference2.JPG" class="card-img-top" alt="...">
            </div>
        </div>

    </div>


    <div class="modal  fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times"></i></button>

                <div id="carouselExampleIndicators-eight" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators-eight" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators-eight" data-slide-to="1"></li>

                    </ol>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="./assets/img/conference1.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/conference2.JPG" class="  w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators-eight" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal  fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times"></i></button>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>

                    </ol>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="./assets/img/banquet1.jpg" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/banquet2.JPG" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/banquet3.JPG" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/banquet4.JPG" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/banquet5.JPG" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/banquet6.JPG" class=" w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#    " role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
    <?php include('top.php') ?>
    <script src="./assets/js/top.js"> </script>


    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/recent.js"></script>
    <script src="./assets/js/date.js"></script>
    <script src="./assets/js/scrolling.js"></script>



</body>

</html>