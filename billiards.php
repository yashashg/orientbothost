<!doctype html>
<html lang="en">
<?php include('header.php') ?>


<title>Billiards</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>



    <section class="deluxe">
        <h1 style="color: #000069;">Billiards Room</h1>
        <div class="center">
            <div class="carousel-wrapper">
                <!-- abstract radio buttons for slides -->
                <input id="slide1" type="radio" name="controls" checked="checked" />
                <input id="slide2" type="radio" name="controls" />

                <!-- navigation dots -->
                <label for="slide1" class="nav-dot"></label>
                <label for="slide2" class="nav-dot"></label>

                <!-- arrows -->
                <label for="slide1" class="left-arrow">
                    < </label>
                        <label for="slide2" class="left-arrow">
                            < </label>



                                <label for="slide1" class="right-arrow"> > </label>
                                <label for="slide2" class="right-arrow"> > </label>


                                <div class="carousel">
                                    <ul>
                                        <li>
                                            <img src="./assets/img/Billiards1.JPG" />
                                        </li>
                                        <li>
                                            <img src="./assets/img/Billiards2.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="./assets/img/Billiards3.jpg" />

                                        </li>
                                        <li>
                                            <img src="./assets/img/Billiards4.jpg">
                                        </li>
                                        <li>
                                            <img src="./assets/img/Billiards.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="height: 320px;">
                    <div class="card-header">
                        Billiards
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>This is one game which teaches focus and mind control</li>
                            <li>We have one
                                dedicated room with two tables for this game and we offer coaching too</li>
                            <li> The
                                timings are 3:30 P.M. to 9:00 P.M.</li>
                        </ul>
                        </p>
                    </div>
                    <div class="card-header foot">
                        <a href="./activity.php">View Other Activities</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cancel price" id="price">
        <table class="cardactivity" style="text-align: center;">
            <h2>CHARGES (inclusive of Tax)</h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">MEMBER</th>
                    <th scope="col">PLAYING GUEST</th>
                    <th scope="col">GUEST</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Daily (per game - 30 minutes)</td>
                    <td>18/-
                    </td>
                    <td>36/-</td>
                    <td>59/-</td>
                </tr>
                <tr>
                    <td>Monthly
                    </td>
                    <td> 413/-</td>
                    <td>1062/-</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Yearly</td>
                    <td>11800/-</td>
                    <td>4130/-</td>
                    <td>--</td>
                </tr>
            </tbody>
        </table>
        <table class="cardactivity">
            <h2>COACHING CHARGES (ONE MONTH)</h2>
            <tbody>
                <tr>
                    <td>Member</td>
                    <td>800/-</td>
                </tr>
                <tr>
                    <td>Guest</td>
                    <td>1,600/-</td>
                </tr>
            </tbody>
        </table>
        <h2>Note:</h2>
        <p style="margin-left:120px; color: black;">
            Duration :- 2 months minimum and 30 min daily per person<br>
            All Applicable TAXES charged EXTRA. <br>
            Billiard Playing Guest will have to pay Rs. 7500.00 as Deposit (refundable)
            and Yearly Subscription Rs. 2500.00 .<br>
            Only 5 games / day would be allowed for monthly / yearly players in all category.
            Any additional game will be charged respectively on a daily bases. <br>
            Playing membership is restricted up to 10 people, and at max, should not exceed 15 people

        </p>
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

    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/recent.js"></script>
    <script src="./assets/js/date.js"></script>
    <script src="./assets/js/scrolling.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</body>

</html>