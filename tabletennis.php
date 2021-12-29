<!doctype html>
<html lang="en">

<?php include('header.php') ?>

<title>Table Tennis</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>


    <section class="deluxe">
        <h1>Table Tennis</h1>
        <div class="center">
            <div class="carousel-wrapper">
                <!-- abstract radio buttons for slides -->
                <input id="slide1" type="radio" name="controls" checked="checked" />
                <input id="slide2" type="radio" name="controls" />
                <input id="slide3" type="radio" name="controls" />


                <!-- navigation dots -->
                <label for="slide1" class="nav-dot"></label>
                <label for="slide2" class="nav-dot"></label>
                <label for="slide3" class="nav-dot"></label>


                <!-- arrows -->
                <label for="slide1" class="left-arrow">
                    < </label>
                        <label for="slide2" class="left-arrow">
                            < </label><label for="slide3" class="left-arrow">
                                    < </label>


                                        <label for="slide1" class="right-arrow"> > </label>
                                        <label for="slide2" class="right-arrow"> > </label>
                                        <label for="slide3" class="right-arrow"> > </label>

                                        <div class="carousel">
                                            <ul>
                                                <li>
                                                    <img src="./assets/img/tabletennis2.jpg" />
                                                </li>
                                                <li>
                                                    <img src="./assets/img/tabletennis3.jpg" />
                                                </li>
                                                <li>
                                                    <img src="./assets/img/tabletennis.JPG" />
                                                </li>
                                                <li>
                                                    <img src="" />
                                                </li>
                                                <li>
                                                    <img src="" />
                                                </li>
                                            </ul>
                                        </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="height: 350px;">
                    <div class="card-header">
                        Table Tennis
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>A game of quick reflexes and physical fitness, it is liked by one and all
                                for the ease of learning it. </li>

                            <li>Coaching classes are also available</li>
                            <li>We have a separate room for this game that can be
                                enjoyed any time during the working hours of the club.</li>
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
            <h2>CHARGES</h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">MEMBER</th>
                    <th scope="col">GUEST</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PER DAY</td>
                    <td>10/-</td>
                    <td>30/-</td>
                </tr>
                <tr>
                    <td>MONTHLY</td>
                    <td>200/-</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>SIX MONTHS</td>
                    <td>800/-</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>YEARLY
                    </td>
                    <td>1500/- </td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Coaching
                    </td>
                    <td>400/- </td>
                    <td>800/-</td>
                </tr>
            </tbody>
        </table>
        <p style="margin-left:120px;">
            *All applicable Taxes are charged extra</p>
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