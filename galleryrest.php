<!doctype html>
<html lang="en">
<?php include('header.php') ?>

<title>Gallery</title>
</head>

<body class="gallery">
    <?php include('navbar.php') ?>

    <div class="h2">
        <h3>Restaurant</h3>
    </div>


    <div data-toggle="modal" data-target="#exampleModal">
        <div class="galls">
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/Srest1.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/Srest2.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/Srest3.JPG" class="card-img-top" alt="...">
            </div>
        </div>

        <div class="galls">
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/Srest4.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/Srest5.JPG" class="card-img-top" alt="...">
            </div>
        </div>
    </div>


    <div class="h2">
        <h3>Coffee Shop</h3>
    </div>
    <div data-toggle="modal" data-target="#exampleModal1">


        <div class="galls">
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/Rest1.JPG" class="card-img-top" alt="...">
            </div>
            <div class="card" style="width: 24rem;">
                <img src="./assets/img/rest2.JPG" class="card-img-top" alt="...">
            </div>

        </div>


    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/Srest1.JPG" class="card-img-top" alt="...">
                            </div>

                            <div class="carousel-item ">
                                <img src="./assets/img/Srest2.JPG" class="card-img-top" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="./assets/img/Srest3.JPG" class="card-img-top" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="./assets/img/Srest4.JPG" class="card-img-top" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="./assets/img/Srest5.JPG" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/Rest1.JPG" class="card-img-top" alt="...">
                            </div>

                            <div class="carousel-item ">
                                <img src="./assets/img/rest2.JPG" class="card-img-top" alt="...">
                            </div>


                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls1" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls1" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
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