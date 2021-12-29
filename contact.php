<!doctype html>
<html lang="en">

<?php include('header.php') ?>


<title>Contact Us</title>
</head>

<body class="contact" style="background-color: #f7f5f5;">
    <?php include('navbar.php') ?>
    <section class="sec1">
        <h1>
            Get In Touch
        </h1>
    </section>
    <section class="sec2" id="contact">
        <form action="./form2.php" method="post" class="col-lg-6">
            <div class="form-group">
                <label for="firstName">Full Name</label>
                <input name="firstName" type="text" class="form-control" id="firstName" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group">
                <label for="email"> Email</label>
                <input name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group ">
                <label for="phone">Phone Number</label>
                <input name="phone" type="text" class="form-control" id="phone" required>
            </div>
            <div class="form-group">
                <label for="validationTextarea">Query</label>
                <textarea class="form-control " id="validationTextarea" required></textarea>
                <div class="invalid-feedback">
                    Please enter feedback.
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        I agree to receiving marketing and promotional materials
                    </label>
                </div>
            </div> -->
            <button type="submit" class="btn btn1">SUBMIT</button>
        </form>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15386.966130394858!2d72.56135854472495!3d23.018566539185613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e845638cc9089%3A0x7d11d97f3a634c74!2sOrient%20Club!5e0!3m2!1sen!2sin!4v1635103999212!5m2!1sen!2sin" width="500" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <div class="card" style="width: 500px; height: 300px;">
                <div class="card-body">
                    <div class="detail">
                        <div class="col-lg-7">
                            <h5 class="card-title"> <i class="fas fa-map-marked-alt"></i> Address </h5>
                            <p class="card-text">Plot No.578/2, Kavi Nhanalal Marg, Near
                                Ellisbridge, Ahmedabad, Gujarat.

                                <br>
                                Pincode-380006
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <h5 class="card-title"> <i class="fas fa-phone-alt"></i> Phone </h5>
                            <p class="card-text">+91 9712445688</p>
                            <p class="card-text">+91 7926445788 </p>
                            <p class="card-text">+91 7926445787</p>



                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h5 class="card-title"> <i class="fas fa-envelope"></i> Email </h5>

                        <p class="card-text">orientclub1935@gmail.com
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- partial -->

    <?php include('memberscta.php') ?>
    <?php include('footer.php') ?>
    <?php include('top.php') ?>
    <script src="./assets/js/top.js"> </script>



    <script src="./assets/js/collapse.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="./assets/js/slide.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/recent.js"></script>
    <script src="./assets/js/date.js"></script>
    <script src="./assets/js/scrolling.js"></script>
</body>

</html>