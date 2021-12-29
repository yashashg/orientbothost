<!doctype html>
<html lang="en">
<?php include('header.php') ?>
<title>Carrom</title>
</head>

<body class="cardac">
    <?php include('navbar.php') ?>
    <section class="deluxe">
        <h1>Carrom Playing Room</h1>
        <div class="center">
            <div class="carousel-wrapper col-lg-8">
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
                                    <img src="./assets/img/carrom.jpg" height="500px" width="1000px" />
                                </li>
                                <li>
                                    <img src="" />
                                </li>
                                <li>
                                    <img src="" />
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
                <div class="card" style="height: 170px;">
                    <div class="card-header">
                        Carrom
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <ul>
                            <li>Timings are from 3:00 A.M. to 10:00 P.M.</li>
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
                    <td>Per Day</td>
                    <td>10/-</td>
                    <td>30/-</td>
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