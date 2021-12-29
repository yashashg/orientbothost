<!doctype html>
<html lang="en">
<?php include('header.php') ?>

<title>Housie</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>
    <section class="deluxe">
        <h1>Housie Room</h1>
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
                            < </label>
                                <label for="slide3" class="left-arrow">
                                    < </label>


                                        <label for="slide1" class="right-arrow"> > </label>
                                        <label for="slide2" class="right-arrow"> > </label>
                                        <label for="slide3" class="right-arrow"> > </label>

                                        <div class="carousel">
                                            <ul>
                                                <li>
                                                    <img src="./assets/img/housie2.jpg" alt="">
                                                </li>
                                                <li>
                                                    <img src="./assets/img/housie3.png" height="500px" />

                                                </li>
                                                <li>
                                                    <img src="./assets/img/housie.JPG" />
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
                <div class="card" style="height: 470px;">
                    <div class="card-header">
                        Housie
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>This is one game that is full of fun and has an enthusiastic participation from all
                                age groups.</li>
                            <li>We witness a near full house on the housie and special housie
                                days</li>
                            <li>This event can be termed as the crowd pulling event' of the club.</li>
                            <li>Family housie is at 6.00 p.m. on 7 days a week</li>

                            <li>
                                Mini Bumper Ladies Housie is on Every Second Tuesday of the month.

                            </li>

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
            <h2>Entry(inclusive of Tax)</h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">MEMBER</th>
                    <th scope="col">Playing Guest</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sunday, Monday,Thursday, Friday, Saturday, Sunday</td>
                    <td>30/-</td>
                    <td>60/-</td>
                </tr>
            </tbody>
        </table>
        <table class="cardactivity">
            <h2>ROUNDS</h2>
            <tbody>
                <tr>
                    <td>Regular Rounds </td>
                    <td>5.00 x 5</td>
                    <td> 10.00 x 2</td>
                    <td> 20.00 X 1</td>
                    <td> 50.00 x 1</td>
                </tr>
                <tr>
                    <td>Friday Rounds</td>
                    <td>10.00 x 7</td>
                    <td> 20.00 x 1</td>
                    <td> 50.00 x 1</td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Sunday Rounds </td>
                    <td>50.00 x 2</td>
                    <td> 10.00 x 5</td>
                    <td> 20.00 X 1</td>
                    <td> 50.00 x 1</td>
                </tr>
            </tbody>
        </table>
        <table class="cardactivity" style="text-align: center;">
            <h2>LADIES HOUSIE</h2>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col"> Fees</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Member</td>
                    <td>30/-</td>
                </tr>
                <tr>
                    <td>Guest</td>
                    <td>60/-</td>
                </tr>
            </tbody>
        </table>

        <table class="cardactivity" style="text-align: center;">
            <tbody>
                <tr>
                    <td>Regular Rounds</td>
                    <td>5.00 x 5 rounds</td>
                    <td>10.00 x 2 rounds</td>
                    <td>20.00 x 1 rounds</td>
                    <td>50.00 x 1 rounds</td>
                </tr>
            </tbody>
        </table>
        <h2>Note:</h2>
        <p style="margin-left:120px;">
            *TUESDAY at 3.00 p.m. with Tea Coffee and Snacks <br>
            *ENTRY (Inclusive of Tax)<br>
            Housie Playing Guest will have to pay Rs. 400.00 as Yearly Subscription
            (All applicable Taxes charged extra)<br>
            Non Playing Guest will have to pay Rs. 50.00 per day inclusive of Tax.
            <br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/recent.js"></script>
    <script src="./assets/js/date.js"></script>
    <script src="./assets/js/scrolling.js"></script>
</body>

</html>