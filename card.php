<!doctype html>
<html lang="en">

<?php include('header.php') ?>

<title>Cards</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>


    <section class="deluxe">
        <h1>Card Playing Room</h1>
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
                                                            <img src="./assets/img/cards2.jpg" />
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/cards4.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/cards3.JPG">
                                                        </li>
                                                        <li>
                                                            <img src="./assets/img/cards.JPG" height="500px" width="20px">
                                                        </li>
                                                        <li>
                                                            <img src="">
                                                        </li>
                                                    </ul>
                                                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="height: 300px;">
                    <div class="card-header">
                        Card Room
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>Our club has two exclusive rooms and 27 tables for the card players</li>
                            <li>At a time,
                                200 people can enjoy playing cards in the designated rooms that have all the
                                comforts and pleasant ambience.
                            </li>


                        </ul>
                        </p>
                    </div>
                    <div class="card-header foot">
                        <a href="./activity.php" style=" color: black;">View Other Activities</a>

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
                    <th scope="col">SESSION</th>
                    <th scope="col">SESSION TIMINGS</th>
                    <th scope="col">MEMBER</th>
                    <th scope="col">GUEST(cash)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Session 1</td>
                    <td> 03.16 p.m. to 07.30 p.m.</td>
                    <td>40/-</td>
                    <td>140/-</td>
                </tr>
                <tr>
                    <td>Session 2</td>
                    <td>07.31 p.m. to 11.00 p.m. </td>
                    <td>40/-</td>
                    <td>140/-</td>
                </tr>
                <tr>
                    <td>Session 3</td>
                    <td>11.01 p.m. to 03.00 a.m.
                    </td>
                    <td>40/-</td>
                    <td>140/-</td>
                </tr>
                <tr>
                    <td>Session 4</td>
                    <td>03.01 a.m. to 06.00 a.m.</td>
                    <td>60/-</td>
                    <td>170/-</td>
                </tr>
                <tr>
                    <td>Session 5</td>
                    <td> 06.01 a.m. to 09.00 a.m.</td>
                    <td>60/-</td>
                    <td>170/-</td>
                </tr>
                <tr>
                    <td>Session 6</td>
                    <td>09.01 a.m. to 12.00 p.m.</td>
                    <td>60/-</td>
                    <td>170/-</td>
                </tr>
                <tr>
                    <td>Session 7</td>
                    <td>12.01 p.m. to 03.15 p.m.</td>
                    <td>40/-</td>
                    <td>140/-</td>
                </tr>
            </tbody>
        </table>
        <table class="cardactivity">
            <h2>EXTRA CHARGES IF LESS THAN 18 PERSON</h2>
            <tbody>
                <tr>
                    <td>IN Session 4 - 2.30 a.m. to 6.00 a.m.</td>
                    <td>300/-</td>
                </tr>
                <tr>
                    <td>IN Session 5 - 6.01 a.m. to 9.00 a.m.</td>
                    <td>500/-</td>
                </tr>
                <tr>
                    <td>IN Session 6 - 9.01 a.m. to 12.00 p.m.
                    </td>
                    <td>3000/-</td>
                </tr>
            </tbody>
        </table>
        <h2>Note:</h2>
        <p style="margin-left: 120px;">
            Non Card Playing Guest will have to pay Rs. 60.00 per day inclusive of Tax.
            (occasionally)<br>
            Card Playing Guest will have to pay Rs. 5000.00 as Yearly Subscription
            (All applicable Taxes charged extra) <br>
            Playing Card Charges Rs. 300.00 per doz. (Inclusive of Tax)
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