<!doctype html>
<html lang="en">

<?php include('header.php') ?>

<title>Bridge</title>
</head>

<body class="cardac">

    <?php include('navbar.php') ?>




    <section class="deluxe">
        <h1 style="color: white;">Bridge Room</h1>
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
                                            <img src="./assets/img/cards2.jpg" />
                                        </li>
                                        <li>
                                            <img src="./assets/img/bridge.jpg" height="500px" width="20px" alt="">
                                        </li>
                                        <li>
                                            <img src="">
                                        </li>
                                        <li>
                                            <img src="">
                                        </li>
                                        <li>
                                            <img src="">
                                        </li>
                                    </ul>
                                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="height: 280px;">
                    <div class="card-header">
                        Bridge
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>Non Playing Guest will have to pay Extra Rs. 50.00 per day inclusive of Tax.</li>
                            <li>Card Playing Guest will have to pay Rs. 2500.00 as Yearly Subscription
                                (All applicable Taxes charged extra)
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
            <h2>CHARGES (inclusive of Tax)</h2>
            <thead class="thead-dark">
                <tr>

                    <th scope="col"> TIMINGS</th>
                    <th scope="col">MEMBER</th>
                    <th scope="col">PLAYING GUEST</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>05.00 p.m. to 8.00 p.m. </td>
                    <td>40/-</td>
                    <td>70/-</td>

                </tr>
                <tr>

                    <td>08.00 p.m. to 11.00 p.m. </td>
                    <td>40/-</td>
                    <td>70/-</td>
                </tr>

            </tbody>
        </table>
        <div style="height: 100px;">

        </div>



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