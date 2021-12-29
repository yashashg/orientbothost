<!doctype html>
<html lang="en">
<?php include('header.php') ?>



<title>Sangeet</title>
</head>

<body class="cardac">
    <?php include('navbar.php') ?>
    <section class="deluxe">
        <h1>Sangeet Classes</h1>
        <div class="center">
            <div class="carousel-wrapper">
                <!-- abstract radio buttons for slides -->
                <input id="slide1" type="radio" name="controls" checked="checked" />
                <!-- navigation dots -->
                <label for="slide1" class="nav-dot"></label>
                <!-- arrows -->
                <label for="slide1" class="left-arrow">
                    < </label>
                        <label for="slide1" class="right-arrow"> > </label>
                        <div class="carousel">
                            <ul>
                                <li>
                                    <img src="./assets/img/Sangeet.jpg" />
                                </li>
                                <li>
                                    <img src="" alt="">
                                </li>
                                <li>
                                    <img src="" alt="">
                                </li>
                                <li>
                                    <img src="" alt="">
                                </li>
                                <li>
                                    <img src="" alt="">
                                </li>
                            </ul>
                        </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="height: 320px;">
                    <div class="card-header">
                        Sangeet Classes
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>Sangeet classes are conducted by renowned musician Shri Nayan
                                Pancholi</li>
                            <li> Timings are from 4.00 p.m. to 5.00 p.m. every monday </li>

                            <li>We provede tea,coffee and snacks (HALF)
                        </ul>
                        </p>
                    </div>
                    <div class="card-header foot">
                        <a href="./activity.php" style="  color: #a7a1ae;">View Other Activities</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cancel price" id="price">
        <table class="cardactivity" style="text-align: center;">
            <h2>CHARGES PER MONTH(inclusive of Tax)</h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">TYPE</th>
                    <th scope="col">FEES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Member</td>
                    <td>450/-</td>
                </tr>
                <tr>
                    <td>Guest</td>
                    <td>650/-</td>
                </tr>
                <tr>
                    <td>Daily Charges</td>
                    <td>250/-</td>
                </tr>
            </tbody>
        </table>

        <p style="margin-left:120px;">
            *INCLUSIVE OF TAXES</p>
    </section>
    <?php include('memberscta.php') ?>
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