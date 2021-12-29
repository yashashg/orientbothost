<!doctype html>
<html lang="en">

<?php include('header.php') ?>

<title>Chess</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>
    <section class="deluxe">
        <h1>Chess Playing Room</h1>
        <div class="center">
            <div class="carousel-wrapper">
                <!-- abstract radio buttons for slides -->
                <input id="slide1" type="radio" name="controls" checked="checked" />
                <input id="slide2" type="radio" name="controls" />
                <input id="slide3" type="radio" name="controls" />
                <input id="slide4" type="radio" name="controls" />

                <!-- navigation dots -->
                <label for="slide1" class="nav-dot"></label>
                <label for="slide2" class="nav-dot"></label>
                <label for="slide3" class="nav-dot"></label>
                <label for="slide4" class="nav-dot"></label>


                <!-- arrows -->
                <label for="slide1" class="left-arrow">
                    < </label>
                        <label for="slide2" class="left-arrow">
                            < </label>
                                <label for="slide3" class="left-arrow">
                                    < </label>
                                        <label for="slide4" class="left-arrow">
                                            < </label>
                                                <label for="slide1" class="right-arrow"> > </label>
                                                <label for="slide2" class="right-arrow"> > </label>
                                                <label for="slide3" class="right-arrow"> > </label>
                                                <label for="slide4" class="right-arrow"> > </label>
                                                <div class="carousel">
                                                    <ul>
                                                        <li>
                                                            <img src="./assets/img/chess.jpg" />
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/chess2.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/chess3.JPG" />
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/chess4.jpg" />
                                                        </li>
                                                        <li>
                                                            <img src="" />
                                                        </li>
                                                    </ul>
                                                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="height: 500px;">
                    <div class="card-header">
                        Chess Room
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>We have a space with perfect ambience that stimulates the interest in this mind
                                game</li>
                            <li> The timing (5:00 P.M. to 8:00 P.M.) ensures that the children
                                enhance their brain power without compromising on the study time</li>
                            <li>We regularly organize chess championships
                                to motivate the best talent. We support the talent by offering concessional rates
                                to high rated players so that they can concentrate on the game and not worry
                                about the cost involved</li>
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
            <h2>Charges per Day(Inclusive of Tax)
            </h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Fees</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Member </td>
                    <td> 40/-</td>

                </tr>
                <tr>
                    <td>Guest</td>
                    <td>70/-</td>
                </tr>

            </tbody>
        </table>
        <table class="cardactivity">
            <h2>Charges for TWO months</h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Fees</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Member</td>
                    <td>1000/-</td>
                </tr>
                <tr>
                    <td>Guest</td>
                    <td>2000/-</td>
                </tr>

            </tbody>

        </table>
        <p style="margin-left:120px;">
            *All Applicable Taxes charges extra</p>
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