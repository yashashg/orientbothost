<!doctype html>
<html lang="en">
<?php include('header.php') ?>
<title>Home | Orient</title>
</head>

<body class="index" id="one" data-color="#FFEDEC" data-colors="#071d38">
    <!-- partial:index.partial.html -->
    <?php include('navbar.php') ?>
    <section class="maincarousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/s33.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h1>The Orient Club</h1>
                        <h5>Since 1935</h5>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./assets/img/s1.JPG" class="d-block w-100 " alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h1>Residential Rooms</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/s2.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Banquet Hall</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <img src="./assets/img/about2.JPG" class="img-fluid col-lg-6">
            <div>
                <h1> About Us</h1>
                <h5>Established in 1935, The Orient Club is a prominent name known among Ahmedabad's most
                    well-known clubs and leisure groups. Renowned for its restaurant & coffee shop to gyms & fitness
                    centres, to card playing room & amphitheatre , to banquet halls & residential rooms, Orient is equipped with
                    all top class amenities and features. One of the finest places to spend a quality time with Family,
                    Friends,Colleague or by Yourself. Experience luxury like nowhere else.</h5>
            </div>
        </div>
    </section>
    <section class="cta text-align-center">
        <a href="./comingsoon.php">
            <div class="cta2">
                <h2>Talk to our AI concierge Shweta </h2>
                <img src="./assets/img/namaste2.png" class="img-fluid">
            </div>
        </a>
    </section>
    <section class="sec2">
        <div class="head " style=" padding-top:5%; color: #071d38;">
            <h2>
                Residential Room
                <hr>
            </h2>
        </div>
        <div class="ss">
            <!-- partial:index.partial.html -->
            <div class="app">
                <div class="cardList">
                    <button class="cardList__btn btn btn--left">
                        <div class="icon">
                            <svg class="left">
                                <use xlink:href="#arrow-left"></use>
                            </svg>
                        </div>
                    </button>
                    <div class="cards__wrapper">
                        <div class="card current--card">
                            <div class="card__image">
                                <img src="./assets/img/Suite.jpg" alt="" />
                            </div>
                        </div>
                        <div class="card next--card">
                            <div class="card__image">
                                <img src="./assets/img/SD2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="card previous--card">
                            <div class="card__image">
                                <img src="./assets/img/D1.jpg" alt="" />

                            </div>
                        </div>
                    </div>
                    <button class="cardList__btn btn btn--right">
                        <div class="icon">
                            <svg class="right">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="infoList">
                    <div class="info__wrapper">
                        <div class="info current--info">
                            <h1 class="text name">Suites</h1>
                            <h4 class="text ">
                                <a href="./rooms.php">
                                    <button type="button" class="btn btn1">Book Now</button>
                                </a>
                            </h4>
                        </div>
                        <div class="info next--info">
                            <h1 class="text name">Super <br> Deluxe</h1>
                            <h4 class="text"><a href="./rooms.php">
                                    <button type="button" class="btn btn1">Book Now</button>
                                </a>
                            </h4>
                        </div>
                        <div class="info previous--info">
                            <h1 class="text name">Deluxe</h1>
                            <h4 class="text"><a href="./rooms.php">
                                    <button type="button" class="btn btn1">Book Now</button>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="app__bg">
                    <div class="app__bg__image current--image">
                        <img src="" alt="" />
                    </div>
                    <div class="app__bg__image next--image">
                        <img src="https://source.unsplash.com/9dmycbFE7mQ" alt="" />
                    </div>
                    <div class="app__bg__image previous--image">
                        <img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
                    </div>
                </div>
            </div>

            <svg class="icons" style="display: none;">
                <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='328 112 184 256 328 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
                <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='184 112 328 256 184 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
            </svg>
        </div>
        <div class="clear"></div>
    </section>

    <section class="activity" id="two" data-color="#071D38" data-colors="#ffffff">
        <div class="head reveal">
            <h2>
                Event Spaces
                <hr style=" background-color: #f0f0f0;">
            </h2>
            <h4> <a href="./amenities.php" style="color:black;">
                    View more>> </a></h4>
        </div>
        <main class="page-content reveal ">
            <div class="card1 card3">
                <div class="content">
                    <h2 class="title">Multi Utility Hall</h2>
                    <p class="copy">for the wedding occasions,
                        corporate meetings,
                        get together,
                        social gatherings For approx. 300 pax</p>
                    <a href="./amenities.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
            <div class="card1 card3">
                <div class="content">
                    <h2 class="title">Conference Room</h2>
                    <p class="copy">for the meetings
                        &
                        conferences For approx. 30 pax</p>
                    <a href="./amenities.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
            <div class="card1 card3">
                <div class="content">
                    <h2 class="title">Coffee Shop</h2>
                    <p class="copy">Relaxing atmosphere, beautiful interior and scrumptious menu, the coffee shop is a cosy place to relax and chill with friends and family.

                    </p>

                    <a href="./amenities.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
            <div class="card1 card3">
                <div class="content">
                    <h2 class="title">Restaurant</h2>
                    <p class="copy">Serving the best vegetarian meals, the Orient Club provides unique regional home style dining experience in their restaurant.
                    </p>
                    <a href="./amenities.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
        </main>
    </section>
    <div class="activity sec3">
        <div class="head ">
            <h2>
                Activity
                <hr>
            </h2>
            <h4>
                <a href="./activity.php" style="color: #dbdcdd;">
                    View more>> </a>
            </h4>
        </div>
        <main class=" page-content reveal ">
            <div class=" card1">
                <div class="content">
                    <h2 class="title">Card Playing</h2>
                    <p class="copy">2 card room fully Air-conditioned with approx 30 tables for playing card.</p>
                    <a href="./card.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div class="content">
                    <h2 class="title">Chess</h2>
                    <p class="copy">We have a space with perfect ambience that stimulates the interest in this mind
                        game. We also provide coaching classes for the same.

                    </p>
                    <a href="./chess.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div class="content">
                    <h2 class="title">Billiards</h2>
                    <p class="copy">Fully Air-conditioned with TWO Billiard tables for playing Billiard and Snooker.
                    </p>
                    <a href="./billiards.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div class="content">
                    <h2 class="title">Sangeet Classes</h2>
                    <p class="copy"> 4.00 p.m. to 5.00 p.m. every Monday
                        with Tea Coffee and Snacks </p>
                    <a href="./sangeet.php">
                        <button class="btn btn1">Know More</button>
                    </a>
                </div>
            </div>
        </main>
        <div class="clear"></div>
    </div>
    <div style="height: 20vh;"></div>
    <section class="sec4" id="three" data-color="#FFEDEC" data-colors="#071d38">
        <div class="" style="text-align: center;">
            <h2>
                Upcoming Events
                <hr>
            </h2>
        </div>
        <div class="card mb-3" style="width: 300px; margin-left: auto; margin-right: auto;">
            <div class="card-body">
                <h5 class="card-title"> No upcoming events scheduled!
                </h5>
                <hr style="width: 90%; background-color: #071d38;">
                <p class="card-text">If any event is scheduled, you shall get notified and the same will be updated.
                </p>
            </div>
        </div>
    </section>
    <div style="height: 50px;">
    </div>

    <section class="sec4" style="height: 100vh;">
        <div style="text-align: center;">
            <h2>
                Recent Events
                <hr>
                <!-- <h4>
					<a href="./recent.html" style="color: black;">
						View more>> </a>
				</h4> -->
            </h2>
        </div>
        <div class="recent">
            <div class="card  col-lg-3">
                <img src="./assets/img/r3.png" class="card-img-top img-fluid" width="100px" alt="...">
                <div class="card-body">

                    <h5 class="card-title">Vaccination Camp</h5>
                    <p class="card-text">At The Orient Club</p>
                </div>
            </div>
            <div class="card mb-3 col-lg-3">
                <img src="./assets/img/r4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gabra Night</h5>
                    <p class="card-text">At The Orient Club</p>
                </div>
            </div>
            <div class="card mb-3 col-lg-3">
                <img src="./assets/img/r2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Opening Of Banquet Hall</h5>
                    <p class="card-text">Grand opening of Banquet hall
                        and 30 luxurious rooms</p>
                </div>
            </div>
        </div>
    </section>
    <div class="testimonials">
        <div class="block">
            <h2>Testimonials</h2>
            <h5>Why people love The Orient Club</h5>
        </div>
        <blockquote class="block blockb">
            <p><i class="fas fa-quote-left"></i> The ambience and lighting of the banquet hall was quite good, also have the basement parking facility. Staff was polite too."</p>
            <footer>
                <cite><span>Krisha Desai</span></cite>
            </footer>
        </blockquote>
        <blockquote class="block blockb">
            <p><i class="fas fa-quote-left"></i> During the hard time of our lives, Orient Club, Ahmedabad has taken the initiative to help the people with making there club a FREE VACCINATION center. It have taken one step closer to end the pandemic. Kudos Orient Club!!!!"</p>
            <footer>
                <cite><span>Prakhar Aggarwal</span></cite>
            </footer>
        </blockquote>
        <blockquote class="block blockb">
            <p><i class="fas fa-quote-left"></i> Amazing food..... Foodies must visit!!! "</p>
            <footer>
                <cite><span>Kunal Sharma</span></cite>
            </footer>
        </blockquote>
        <blockquote class="block blockb">
            <p><i class="fas fa-quote-left"></i> A must visitttt club....."</p>
            <footer>
                <cite><span>Meenakshi Pillai</span></cite>
            </footer>
        </blockquote>
        <blockquote class="block blockb">
            <p> <i class="fas fa-quote-left"></i> Nice place for senior citizen. Staff is very cooperative and ambience is suitable. Club membership rate is affordable as per other clubs in Ahmedabad. Their snack menu is amazing. They offer delicious and authentic Gujarati snacks."</p>
            <footer>
                <cite><span>Harsh Jha</span></cite>
            </footer>
        </blockquote>
    </div>
    <?php include('memberscta.php') ?>
    <div class="footer-dark">
        <?php include('footer.php') ?>
        <?php include('top.php') ?>
        <script src="./assets/js/top.js"> </script>
    </div>
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/scrolling.js"></script>
    <script src="./assets/js/bot.js"></script>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                }
            }
        }
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html>