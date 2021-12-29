<!doctype html>
<html lang="en">
<?php include('header.php') ?>


<title>Health Center</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>
    <section class="deluxe">
        <h1>Health Center</h1>
        <!--NAME CHANGE!!-->
        <div class="center">
            <div class="carousel-wrapper">
                <!-- abstract radio buttons for slides -->
                <input id="slide1" type="radio" name="controls" checked="checked" />
                <input id="slide2" type="radio" name="controls" />
                <input id="slide3" type="radio" name="controls" />
                <input id="slide4" type="radio" name="controls" />
                <input id="slide5" type="radio" name="controls" />

                <!-- navigation dots -->
                <label for="slide1" class="nav-dot"></label>
                <label for="slide2" class="nav-dot"></label>
                <label for="slide3" class="nav-dot"></label>
                <label for="slide4" class="nav-dot"></label>
                <label for="slide5" class="nav-dot"></label>

                <!-- arrows -->
                <label for="slide1" class="left-arrow">
                    < </label>
                        <label for="slide2" class="left-arrow">
                            < </label>
                                <label for="slide3" class="left-arrow">
                                    < </label>
                                        <label for="slide4" class="left-arrow">
                                            < </label>
                                                <label for="slide4" class="left-arrow">
                                                    < </label>

                                                        <label for="slide1" class="right-arrow"> > </label>
                                                        <label for="slide2" class="right-arrow"> > </label>
                                                        <label for="slide3" class="right-arrow"> > </label>
                                                        <label for="slide4" class="right-arrow"> > </label>
                                                        <label for="slide5" class="right-arrow"> > </label>

                                                        <div class="carousel">
                                                            <ul>
                                                                <li>
                                                                    <img src="./assets/img/health1.jpg" />
                                                                </li>
                                                                <li>
                                                                    <img src="./assets/img/health2.jpg" />

                                                                </li>
                                                                <li>
                                                                    <img src="./assets/img/health3.jpg" />
                                                                </li>
                                                                <li>
                                                                    <img src="./assets/img/health4.jpg" />
                                                                </li>
                                                                <li>
                                                                    <img src="./assets/">
                                                                </li>
                                                            </ul>
                                                        </div>
            </div>
            <div class=" col-lg-4">
                <div class="card" style="height: 320px;">
                    <div class="card-header">
                        Health Centre </div>
                    <!--NAME CHANGE!!-->
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li> Equipped with the latest equipment, our Gymnasium is going to be a state-of-the-art
                                facility for fitness freaks</li>
                            <li>The guests of our members are also
                                allowed to utilize the Gymnasium which will soon be ready.</li>
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
            <h2>Timings</h2>

            <tbody>
                <tr>

                    <td>REGULAR</td>
                    <td>07.00 a.m. to 10.00 a.m</td>
                    <td>05.00 p.m. to 07.30 p.m.</td>

                </tr>
                <tr>
                    <td>LADIES (ONLY)</td>
                    <td>10.01 p.m. to 12.00 p.m.</td>
                    <td>03.00 p.m. to 05.00 p.m.</td>
                </tr>

            </tbody>
        </table>

        <table class="cardactivity" style="text-align: center;">
            <h2>Fees</h2>
            <thead class="thead-dark">
                <tr>


                    <th scope="col"></th>
                    <th scope="col">MEMBER & SPOUSE</th>
                    <th scope="col">GUEST</th>

                </tr>
            </thead>

            <tbody>
                <tr>

                    <td>PER DAY</td>
                    <td>50/-</td>
                    <td>150/-</td>

                </tr>
                <tr>
                    <td>MONTHLY
                    </td>
                    <td>600/-</td>
                    <td>1,000/-</td>
                </tr>
                <tr>
                    <td>QUATERLY </td>
                    <td>1,500/-</td>
                    <td>2,500/-</td>
                </tr>
                <tr>
                    <td>YEARLY</td>
                    <td>4,000/-</td>
                    <td>7,000/-</td>
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