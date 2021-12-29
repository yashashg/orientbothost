=
<!doctype html>
<html lang="en">
<?php include('header.php') ?>
<title>Residential Rooms</title>
</head>

<?php include("navbar.php") ?>

<body class="rooms">
    <section class="headerpic">
        <div class="container">
            <h1>
                Residential Rooms
            </h1>
        </div>
    </section>
    <section class="tags">
        <p>
            <a href="./index.php">
                Orient club
            </a>
        </p>
        <p>
            >
        </p>
        <p class="active">
            Residential Rooms
        </p>
    </section>
    <section class="eventcontent">
        <h2>Residential Rooms</h2>
        <hr>
        <p>
            The Orient Club’s 30 rooms are tastefully decorated to blend old-world charm and modern facilities, to
            ensure a luxurious stay while experiencing the culture of Gujarat. Equipped with world class amenities and
            services to ensure a tranquil stay for our guests. Book your relaxing stay now!
        </p>
        <br>
        <p style="font-size: 15px;">
            <b>
                In line with the current situation, we have implemented certain enhanced precautionary hygiene measures.

            </b>
        </p>

        <div class="rates">
            <button type="button" id="standard" class="btn btnroom">STANDARD RATES <p>
                    From 2,500/- INR per night
                </p></button>
            <button type="button" id="member" onclick="member()" class="btn">MEMBER RATES <p>
                    From 2,500/- INR per night
                </p></button>
            <hr>

        </div>

    </section>


    <div class="checkin">
        <div class="date">
            <form action="" method="post" class="form-inline align-self-center" style=" color:#a7a1ae; " id="form">

                <div class="form-group col-lg-4">

                    <label> Check-In：</label>
                    <input type="date" class="  form-control" required name="check-in" id="check_in" ng-model="checkin" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group col-lg-4">
                    <label> Check-Out：</label>
                    <input type="date" class=" form-control" required name="check-out" id="check_out" ng-model="checkout" placeholder="yyyy-mm-dd">
                </div>
                <input type="hidden" class="textbox" id="numdays" name="numOfdays" />
                <div class="form-group col-lg-2">
                    <label>Rooms：</label>
                    <select class="form-control" name="numberOfroom" required ng-model="group_adults">
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-lg-2">
                    <label>Adults：</label>
                    <select class="form-control" name="adults" ng-model="group_adults">
                        <option value="1">1</option>
                        <option value="2" selected="selected">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>Children：</label>
                    <select class="form-control" name="children" ng-model="group_adults">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2" selected="selected">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>

                    </select>
                </div>

            </form>
        </div>
    </div>

    <section class="data">
        <!-- Room deluxe -->
        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
                <div class="col-md-5 ">

                    <div id="carouselExampleIndicators-one" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators-one" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators-one" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators-one" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators-one" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators-one" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators-one" data-slide-to="5"></li>



                        </ol>
                        <div class="carousel-inner " data-toggle="modal" data-target="#staticBackdrop1">
                            <div class="carousel-item active">
                                <img src="./assets/img/D1.JPG" class=" w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/D2.JPG" class=" w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/D3.JPG" class=" w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/D4.JPG" class=" w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/D5.JPG" class=" w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/D6.JPG" class=" w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators-one" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators-one" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card-body">
                        <h3 class="card-title">Deluxe Room</h3>
                        <p class="card-text"> With spectacular view of the Ahmedabad City, these marble floored rooms
                            offer two single beds /
                            Double bed
                            along with a bathroom and wardrobe. </p>
                        <div style="display: flex;">
                            <h6 class="col-lg-6"><i class="fas fa-users"></i>Max. Occupancy: 2</h6>
                            <h6 class="col-lg-6"><i class="fas fa-parking"></i>Free Parking</h6>
                        </div>
                        <div style="display: flex; margin-top: 2%;">
                            <h6 class="col-lg-6"><i class="fas fa-wifi"></i>Free Wifi</h6>
                            <h6 class="col-lg-6"><i class="fas fa-utensils"></i>Restaurant</h6>
                        </div>
                        <div class="price">
                            <p> ₹ 2,500*</p>
                            <small>Starting Rate/Night</small>
                        </div>

                    </div>
                    <div style="display: flex;">
                        <button type="button" class="btn collapsible btn1" data-toggle="collapse" href="#collapseExampleD">Room Details</button>
                        <button type="submit" form="form" class="btn btnbook btn1" name="room" value="Deluxe">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseExampleD">
            <div class="card card-body collapsecontent">
                <p>
                    With spectacular view of the Ahmedabad City, these marble floored rooms offer two single beds /
                    Double bed
                    along
                    with
                    a bathroom and wardrobe. Fully equipped with all modern facilities like air conditioning, a
                    flat-screen
                    TV with cable channels, a fridge, a kettle, a shower, free toiletries, a desk as well as free Wi-Fi,
                    laundry service and room service. By booking this room, you can also enjoy our club benefits at
                    additional rates.
                </p>
                <p>
                    **Extra Beds are available on a per night basis, at additional rates. </p>


                <div class="Details">
                    <div class="col-lg-4">
                        <h5><i class="fas fa-cloud-sun"></i>Outdoors</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Terrace

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-parking"></i>Parking</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Free private parking is possible <br> on site (reservation is
                                needed).</div>


                        </div>

                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-sort-down"></i>General</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Air conditioning

                            </div>


                        </div>
                        <div style="display: flex;">
                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Non-Smoking Room

                            </div>

                        </div>
                    </div>
                </div>

                <div class="Details">
                    <div class="col-lg-4">
                        <h5><i class="fas fa-bus-alt"></i>Transport</h5>

                        <div style="display: flex; margin-bottom: 2%;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport drop off(
                                Additional charge)
                            </div>


                        </div>
                        <div style="display: flex; margin-bottom: 2%;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport Pick Up(
                                Additional charge)
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-spa"></i>Wellness facilities</h5>

                        <div style="display: flex;">
                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Fitness centre(
                                Additional charge)
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-concierge-bell"></i>Services</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport shuttle (additional charge)
                            </div>
                        </div>


                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                24-hour front desk </div>
                        </div>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Room service
                            </div>
                        </div>



                    </div>

                </div>
                <p><a href="./terms.php"> TnC and Cancellation Policy</a></p>
            </div>
        </div>



        <!-- Room Super Deluxe -->





        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <div id="carouselExampleIndicators-two" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators-two" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators-two" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators-two" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators-two" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators-two" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators-two" data-slide-to="5"></li>


                        </ol>
                        <div class="carousel-inner " data-toggle="modal" data-target="#staticBackdrop2">

                            <div class="carousel-item active">
                                <img src="./assets/img/SD1.JPG" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/SD2.JPG" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/SD3.JPG" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/SD4.JPG" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/SD5.jpg" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/SD6.jpg" class="  w-100" alt="...">
                            </div>
                        </div>

                        <a class="carousel-control-next" href="#carouselExampleIndicators-two" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h3 class="card-title">Super Deluxe Room</h3>
                        <p class="card-text">These super deluxe rooms are elegantly designed with marble flooring and
                            offer a huge and comfortable double bed along with a bathroom and a wardrobe.</p>
                        <div style="display: flex;">
                            <h6 class="col-lg-6"><i class="fas fa-users"></i>Max. Occupancy: 2</h6>
                            <h6 class="col-lg-6"><i class="fas fa-parking"></i>Free Parking</h6>
                        </div>
                        <div style="display: flex; margin-top: 2%;">
                            <h6 class="col-lg-6"><i class="fas fa-wifi"></i>Free Wifi</h6>
                            <h6 class="col-lg-6"><i class="fas fa-utensils"></i>Restaurant</h6>
                        </div>
                        <div class="price">
                            <p> ₹ 3,500*</p>
                            <small>Starting Rate/Night</small>
                        </div>
                    </div>
                    <div style="display: flex;">
                        <button type="button" class="btn collapsible btn1" data-toggle="collapse" href="#collapseExampleSD">Room Details</button>
                        <button type="button" class="btn btnbook btn1">Book Now</button>
                        <button type="submit" form="form" class="btn btnbook btn1" name="room" value="Super Deluxe">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapseExampleSD">
            <div class="card card-body collapsecontent">
                <p>
                    These super deluxe rooms are elegantly designed with marble flooring and offer a huge and
                    comfortable
                    double bed along with a bathroom and a wardrobe. These rooms also feature a huge balcony to enjoy
                    the
                    breath-taking city view. Fully equipped with all modern facilities like air conditioning, a
                    flat-screen
                    TV with cable channels, a fridge, a kettle, a shower, free toiletries, a desk as well as free Wi-Fi,
                    laundry service and room service. By booking this room, you can also enjoy our club benefits at
                    additional rates.
                </p>
                <p>
                    **Extra Beds are available on a per night basis, at additional rates.
                </p>


                <div class="Details">
                    <div class="col-lg-4">
                        <h5><i class="fas fa-cloud-sun"></i>Outdoors</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Terrace

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-parking"></i>Parking</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Free private parking is possible <br> on site (reservation is
                                needed).</div>


                        </div>

                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-sort-down"></i>General</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Air conditioning

                            </div>


                        </div>
                        <div style="display: flex;">
                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Non-Smoking Room

                            </div>

                        </div>
                    </div>
                </div>

                <div class="Details">
                    <div class="col-lg-4">
                        <h5><i class="fas fa-bus-alt"></i>Transport</h5>

                        <div style="display: flex; margin-bottom: 2%;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport drop off(
                                Additional charge)
                            </div>


                        </div>
                        <div style="display: flex; margin-bottom: 2%;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport Pick Up(
                                Additional charge)
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-spa"></i>Wellness facilities</h5>

                        <div style="display: flex;">
                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Fitness centre(
                                Additional charge)
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-concierge-bell"></i>Services</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport shuttle (additional charge)
                            </div>
                        </div>


                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                24-hour front desk </div>
                        </div>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Room service
                            </div>
                        </div>
                    </div>
                </div>
                <p><a href="./terms.php"> TnC and Cancellation Policy</a></p>
            </div>
        </div>




        <!-- Room Suite -->



        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
                <div class="col-md-5 ">
                    <div id="carouselExampleIndicators-three" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators-three" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators-three" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators-three" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators-three" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators-three" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators-three" data-slide-to="5"></li>


                        </ol>
                        <div class="carousel-inner " data-toggle="modal" data-target="#staticBackdrop3">
                            <div class="carousel-item">
                                <img src="./assets/img/Suit2.jpg" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item active">
                                <img src="./assets/img/Suite.JPG" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/Suite2.JPG" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/Suite4.jpg" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/Suite5.jpg" class="  w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/Suite3.jpg" class="  w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators-three" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators-three" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h3 class="card-title">Suite</h3>
                        <p class="card-text"> Designed craftily, our luxurious marble floored suites offer a king
                            size bed along with a bathroom and wardrobe. These room also feature a massive attached
                            balcony.</p>
                        <div style="display: flex;">
                            <h6 class="col-lg-6"><i class="fas fa-users"></i>Max. Occupancy: 2</h6>
                            <h6 class="col-lg-6"><i class="fas fa-parking"></i>Free Parking</h6>
                        </div>
                        <div style="display: flex; margin-top: 2%;">
                            <h6 class="col-lg-6"><i class="fas fa-wifi"></i>Free Wifi</h6>
                            <h6 class="col-lg-6"><i class="fas fa-utensils"></i>Restaurant</h6>
                        </div>
                        <div class="price">
                            <p> ₹ 5,000*</p>
                            <small>Starting Rate/Night</small>
                        </div>
                    </div>
                    <div style="display: flex;">
                        <button type="button" class="btn collapsible btn1" data-toggle="collapse" href="#collapseExampleS">Room Details</button>
                        <button type="submit" form="form" class="btn btnbook btn1" name="room" value="Suites">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseExampleS">
            <div class="card card-body collapsecontent">
                <p>
                    Designed craftily, our luxurious marble floored suites offer a king size bed along with a
                    bathroom
                    and wardrobe. These room also feature a massive attached balcony that looks over the beautiful city
                    of
                    Ahmedabad. These spacious rooms also offer an attached living area to meet guests. Fully equipped
                    with
                    all modern facilities like air conditioning, a flat-screen TV with cable channels, a fridge, a
                    kettle, a
                    shower, free toiletries, a desk as well as free Wi-Fi, laundry service and room service. By booking
                    this
                    room, you can also enjoy our club benefits at additional rates.
                </p>
                <p>
                    **Extra Beds are available on a per night basis, at additional rates. </p>


                <div class="Details">
                    <div class="col-lg-4">
                        <h5><i class="fas fa-cloudsun"></i>Outdoors</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Terrace

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-parking"></i>Parking</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Free private parking is possible <br> on site (reservation is
                                needed).</div>


                        </div>

                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-sort-down"></i>General</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Air conditioning

                            </div>


                        </div>
                        <div style="display: flex;">
                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div> Non-Smoking Room

                            </div>

                        </div>
                    </div>
                </div>

                <div class="Details">
                    <div class="col-lg-4">
                        <h5><i class="fas fa-bus-alt"></i>Transport</h5>

                        <div style="display: flex; margin-bottom: 2%;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport drop off(
                                Additional charge)
                            </div>


                        </div>
                        <div style="display: flex; margin-bottom: 2%;">

                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport Pick Up(
                                Additional charge)
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-spa"></i>Wellness facilities</h5>

                        <div style="display: flex;">
                            <div style="margin-right: 3%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Fitness centre(
                                Additional charge)
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <h5><i class="fas fa-concierge-bell"></i>Services</h5>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Airport shuttle (additional charge)
                            </div>
                        </div>


                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                24-hour front desk </div>
                        </div>
                        <div style="display: flex;">

                            <div style="margin-right: 3%;margin-bottom: 2%;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                Room service
                            </div>
                        </div>
                    </div>
                </div>
                <p><a href="./terms.php"> TnC and Cancellation Policy</a></p>
            </div>
        </div>

    </section>






    <!-- Modal -->
    <!-- Deluxe Room -->
    <div class="modal  fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times"></i></button>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>

                    </ol>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="./assets/img/D1.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/D2.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/D3.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/D4.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/D5.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/D6.JPG" class="  w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Super Deluxe -->

    <div class="modal  fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times"></i></button>

                <div id="carouselExampleIndicators-four" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators-four" data-slide-to="6"></li>

                    </ol>
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="./assets/img/SD1.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/SD2.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/SD3.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/SD4.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/SD5.jpg" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/SD6.jpg" class="  w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators-four" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators-four" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Suite -->
    <div class="modal  fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times"></i></button>

                <div id="carouselExampleIndicatorsfive" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicatorsfive" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicatorsfive" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicatorsfive" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicatorsfive" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicatorsfive" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicatorsfive" data-slide-to="5"></li>


                    </ol>
                    <div class="carousel-inner ">
                        <div class="carousel-item">
                            <img src="./assets/img/Suit2.jpg" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item active">
                            <img src="./assets/img/Suite.JPG" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Suite2.jpg" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Suite4.jpg" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Suite5.jpg" class="  w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Suite3.jpg" class="  w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicatorsfive" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicatorsfive" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include('memberscta.php') ?>
    <?php include('footer.php') ?>
    <?php include('top.php') ?>
    <script src="./assets/js/top.js"> </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/date.js"></script>
    <script src="./assets/js/scrolling.js"></script>





    <script>
        $("#member").click(function() {
            $("#member").addClass("btnroom");
            $("#standard").removeClass("btnroom");
        });

        $("#standard").click(function() {
            $("#standard").addClass("btnroom");
            $("#member").removeClass("btnroom");

        });
    </script>
</body>

</html>