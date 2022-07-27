<?php
    include 'connection.php';

    function generateRandomString($length = 5) {    #generate rand string of 5 ch
        return substr(str_shuffle(str_repeat($x='abcdefghijklmnoyzABCDEFGHIJKLMNOPQRSYZ', ceil($length/strlen($x)) )),1,$length);
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fontawesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="styles.css">
    <title>Homepage - AlfaCare</title>
</head>

<body>
    <header style="background-color: #DFB57A;">
        <div class="container">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand" href="index.php"><i class="fab fa-medrt me-2"></i> ALFACARE</a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="appointments.php">Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="e-shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="specialities.php">Specilities</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="doctors.php">Doctors</a>
                        </li>
                    </ul>

                    <button class="btn bg-info">
                        <a href="login.php" class="text-white">Login/Register</a>
                    </button>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->
            </nav>
            <!--/.Navbar-->
        </div>
    </header>



    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1" style="filter: invert(60%);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"
                style="filter: invert(60%);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"
                style="filter: invert(60%);"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bg.jpg" class="d-block img-responsive" alt="..." style="height: 400px;" />
                <div class="carousel-caption d-block text-info">
                    <h2 class="car-heading">We make your life happier</h2>
                    <p>We are striving hard to reach our more valued customers to let them stay healthy.</p>
                    <a href="#"><button class="btn text-white" style="background-color: #DFB57A;">Let's
                            Consult</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bg4.jpg" class="d-block img-responsive" alt="..." style="height: 400px;" />
                <div class="carousel-caption d-block text-info">
                    <h2 class="car-heading">We Offer genuine and quality proof medication facilty</h2>
                    <p class="car-caption">Either you purchase medicines face to face or you order online, we conform
                        our quality and procedures</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bg5.jpg" class="d-block img-responsive" alt="..." style="height: 400px;" />
                <div class="carousel-caption d-block text-info">
                    <h2 class="car-heading mb-5">Patients are kept under utter nursing</h2>
                    <p class="car-caption">The patients in our hospitals wards are kept on eyes of the medical staff
                        24/7.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev" style="filter: invert(60%);">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next" style="filter: invert(60%);">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--Four features-->
        <div class="container my-3">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fas fa-check-circle d-block text-center display-1" style="color: #DFB57A;"></i>
                    <h4><strong>Make an appointment</strong></h4>
                    <p>Our valued customers can make their appointments using our web platform.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fas fa-question-circle d-block text-center display-1" style="color: #DFB57A;"></i>
                    <h4><strong>Help by specialist</strong></h4>
                    <p>Our experts are available for our customers help every time they need us.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <i class="fas fa-user-circle d-block text-center display-1" style="color: #DFB57A;"></i>
                    <h4><strong>Choose your package</strong></h4>
                    <p>Customers can choose any health package of their choice to get discounts.</p>
                </div>
                <div class="col-lg-3 col-md-6 col=sm-12">
                    <i class="fas fa-hospital-symbol d-block text-center display-1" style="color: #DFB57A;"></i>
                    <h4><strong>Get diagnostic report</strong></h4>
                    <p>Customers can request for their diagnostic reports online at zero charges.</p>
                </div>
            </div>
            <hr>
        </div>

        <!--Specialities Section-->
        <div class="container">
            <h3 class="text-center py-4"><strong>Our Specialities</strong></h3>

            <div class="row justify-content-between specialities">



                <?php
            $specialitiesQry = mysqli_query($con, "SELECT * FROM specialities");
            while($specialitiesRes = mysqli_fetch_array($specialitiesQry))
            {
        ?>
                <div class="col-md-4 col-6 mb-2">
                    <div class="card m-1">
                        <img class="card-img-top" src="https://source.unsplash.com/640x427?<?php echo $specialitiesRes['Title'] ?>,
											<?php										
												echo  generateRandomString();
											?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title p-0 m-0">
                                <?php echo $specialitiesRes['Title'] ?>
                            </h5>
                            <hr class="d-none d-sm-block">
                            <p class="card-text d-none d-sm-block">
                                <?php echo $specialitiesRes['Description'] ?>
                            </p>
                            <a href="#" class="btn text-white" style="background-color: #DFB57A;">More Info</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
            <div class="float-end">
                <button class="btn btn-info mt-2">Load more...</button>
            </div>
            <div style="clear: both"></div>
            <hr>
        </div>

        <!--Our Doctors Section-->

        <div class="container">
            <h3 class="text-center py-4"><strong>Our Doctors</strong></h3>
            <div class="row">

                <?php
								$DrQry = mysqli_query($con, "SELECT * FROM users
								INNER JOIN doctors ON users.ID = doctors.User_ID
								INNER JOIN specialities ON doctors.Spec_ID = specialities.ID");
                                #$countDr = 1;
								while($countDr<=3 && $row = mysqli_fetch_array($DrQry))
								{

								
							?>

                <div class="col-12 col-md-4">
                    <div class="card m-1">
                        <?php
										if($row['Gender'] == "Male" || $row['Gender'] == "male"){
											?>
                        <img class="card-img-top" src="https://source.unsplash.com/400x300?male,doctor,
											<?php										
												echo  generateRandomString();
											?>
											" alt="Card image cap">

                        <?php
										}else{
											?>
                        <img class="card-img-top" src="https://source.unsplash.com/400x300?medicines,
											<?php										
												echo  generateRandomString();
											?>
											" alt="Card image cap">

                                    <?php
                                    $countDr++;
									}
									?>
                        <div class="card-body">
                            <h5 class="card-title p-0 m-0">
                                <?php echo $row['Name'] ?>
                            </h5>
                            <hr>
                            <h6 class="card-title p-0 my-1">
                                <?php echo $row['Title'] ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $row['Description'] ?>
                            </p>
                            <hr>
                            <p class="card-text">Experience:
                                <?php echo $row['Experience'] ?> Years
                            </p>
                            <a href="#" class="btn text-white" style="background-color: #DFB57A;">Get In Touch</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
            <div class="float-end">
                <a href="doctors.php"><button class="btn btn-info mt-2">Load more...</button></a>
            </div>
            <div style="clear: both"></div>
            <hr>
        </div>
        <!-- <div class="container">
        <h3 class="text-center py-4"><strong>Our Doctors</strong></h3>
        <div class="row justify-content-between">

            <div class="col-12 col-md-4">
                <div class="card m-1">
                    <img class="card-img-top" src="images/doctors/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title p-0 m-0">Mr. Chips</h5>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipicing elit. Votatum,
                            asperiores.</p>
                        <a href="#" class="btn text-white" style="background-color: #DFB57A;">More Info</a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <div class="card m-1">
                    <img class="card-img-top" src="images/doctors/2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Katherine Bridges</h5>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolorem!</p>
                        <a href="#" class="btn text-white" style="background-color: #DFB57A;">More Info</a>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <div class="card m-1">
                    <img class="card-img-top" src="images/doctors/1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Mr. Kreton</h5>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolorem!</p>
                        <a href="#" class="btn text-white" style="background-color: #DFB57A;">More Info</a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="float-end">
            <button class="btn btn-info mt-2">Load more...</button>
        </div>
        <div style="clear: both"></div>
        <hr>
    </div> -->

        <!--Medicine Delivery-->
        <div class="container">
            <h3 class="text-center py-4"><strong>Medicine Delivery</strong></h3>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="images/medicine.jpg" alt="medicine">
                </div>
                <div class="col-md-6 text-justify" sty>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, aspernatur accusantium saepe
                        maiores perferendis consectetur nisi quae libero autem quo!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat commodi nobis praesentium? Iusto
                        ipsum distinctio sequi, nam, mollitia illum necessitatibus molestias doloremque tempore ab
                        culpa.
                        Laudantium nihil obcaecati magnam eligendi tempora, voluptates nam eaque ipsam earum quod
                        provident
                        debitis beatae!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, aspernatur accusantium saepe
                        maiores perferendis consectetur nisi quae libero autem quo!</p>
                    <a style="float: right;" href="#"><button class="btn bg-info px-3 py-2 text-white">Go to
                            e-store</button></a>

                </div>
            </div>
            <hr>
        </div>

        <!--Health Packages-->
        <div class="container">
            <h3 class="text-center py-3"><strong>Health Packages</strong></h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Basic</h3>
                        </div>
                        <div class="price-value">
                            <span class="currency">Rs</span>
                            <span class="amount">2000/Y</span>
                        </div>
                        <ul class="pricing-content">
                            <li>1 free consultation</li>
                            <li>1 free test</li>
                            <li>15% discount on medicine</li>
                            <li>SMS Alerts</li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">Get Offer</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricingTable yellow">
                        <div class="pricingTable-header">
                            <h3 class="title">Premium</h3>
                        </div>
                        <div class="price-value">
                            <span class="currency">Rs</span>
                            <span class="amount">5000/Y</span>
                        </div>
                        <ul class="pricing-content">
                            <li>5 free consultations</li>
                            <li>3 free tests</li>
                            <li>30% discount on medicine</li>
                            <li>SMS Alerts</li>
                            <li>Free Delivery</li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">Get Offer</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Standard</h3>
                        </div>
                        <div class="price-value">
                            <span class="currency">Rs</span>
                            <span class="amount">3000/Y</span>
                        </div>
                        <ul class="pricing-content">
                            <li>2 free consultations</li>
                            <li>2 free tests</li>
                            <li>20% discount on medicine</li>
                            <li>SMS Aerts</li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a href="#">Get Offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
        </div>

        <!--Testimonials Section-->
        <div class="container">
            <h3 class="text-center pb-5"><strong>What our customers say about us</strong></h3>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <div class="card testimonial-card bg-info">
                        <div class="card-up bg-info"></div>
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                                class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-4 text-center">John Doe</h4>
                            <hr>
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit
                                amet
                                eos
                                adipisci, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <div class="card testimonial-card bg-info">
                        <div class="card-up blue-gradient">
                        </div>
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                                class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-4 text-center">Anna Aston</h4>
                            <hr>
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate
                                assumenda
                                in
                                maiores repudiandae mollitia architecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card testimonial-card bg-info">
                        <div class="card-up indigo"></div>
                        <div class="avatar mx-auto white">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                                class="rounded-circle img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="font-weight-bold mb-4 text-center">Maria Kate</h4>
                            <hr>
                            <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe
                                officiis
                                ab aliquam repellat rem unde ducimus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
        </div>

        <!--Newsletter-->
        <form action="newsletter_proc.php" method="POST">
            <div class="newsletter bg-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content">
                                <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your email">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit" style="background-color: #DFB57A;">Subscribe
                                            Now</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="container">
            <hr class="my-3">
        </div>

        <!--Our Partners-->
        <div class="container">
            <h3 class="text-center py-4"><strong>Our Partners</strong></h3>
            <div class="row partners justify-content-center">
                <img class="col-2 border" src="images/partners/doctor.png" alt="">
                <img class="col-2 border" src="images/partners/chughtai.jpg" alt="">
                <img class="col-2 border" src="images/partners/meezan.jpg" alt="">
                <img class="col-2 border" src="images/partners/noor.jpg" alt="">
                <img class="col-2 border" src="images/partners/jubilee.png" alt="">
            </div>
            <hr class="mt-3">
        </div>

        <!--4 MORE FEATURES-->
        <div class="bg-info" style="background-color: #DFB57A;">
            <div class="container my-3">
                <div class="row text-center text-white pt-4">
                    <div class="col-md-3 col-6">
                        <i class="fas fa-check-circle d-block text-center display-3 mb-3" style="color: #DFB57A;"></i>
                        <h5><strong>PMC Verified Doctors</strong></h5>
                        <p class="d-none d-sm-block">Authentic & updated information</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <i class="fab fa-monero text-center display-3 mb-3" style="color: #DFB57A;"></i>
                        <h5><strong>Money back guarantee</strong></h5>
                        <p class="d-none d-sm-block">We return money within 48 hours</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <i class="fas fa-user-circle text-center display-3 mb-3" style="color: #DFB57A;"></i>
                        <h5><strong>12/7 customer support</strong></h5>
                        <p class="d-none d-sm-block">Well-trained & Supportive team</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <i class="fas fa-shield-alt text-center display-3 mb-3" style="color: #DFB57A;"></i>
                        <h5><strong>Secure online payment</strong></h5>
                        <p class="d-none d-sm-block">We possess SSL / Secure сertificate</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="container">
            <hr class="mt-3">
        </div>

        <!--Footer Starts Here-->
        <div style="background-color:slategrey;" class="pt-5 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h5><strong>Quick Links</strong></h5>
                        <hr>
                        <ul>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">FAQs</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">Sitemap</a>
                            </li>
                        </ul>
                        <h5>Follow Us</h5>
                        <ul class="social">
                            <a href="#">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-youtube-square"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram-square"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-vimeo-square"></i>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 text-left">
                        <h5><strong>Send quick message</strong></h5>
                        <hr>
                        <form action="message_proc.php" method="POST">
                            <div class="form-group">
                                <label for="name" class="mb-0 mt-1">Name</label>
                                <input class="form-control p-1" type="text" placeholder="Enter name" name="name">
                                <label for="email" class="mb-0 mt-1">Email</label>
                                <input class="form-control p-1" type="text" placeholder="Enter email" name="email">
                                <label for="phone" class="mb-0 mt-1">Phone</label>
                                <input class="form-control p-1" type="tel" placeholder="Enter phone" name="phone">
                                <label for="message" class="mb-0 mt-1">Message</label>
                                <textarea maxlength='200' id="" cols="" rows="3" class="form-control"
                                    placeholder="Message or comment..." name="message"></textarea>
                                <button type="submit" class="btn btn-info mt-1 w-100 text-white">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-6 text-left">
                        <h5><strong>Our Latest Blogs</strong></h5>
                        <hr>
                        <p> 1. <a href="#">Types of Covid-19 Vaccines</a></p>
                        <p> 2. <a href="#">Digital Fitness Tools</a></p>
                        <p> 3. <a href="#">The better way to discipline children</a></p>
                        <p> 4. <a href="#">All about Covid-19 SOPs</a></p>
                        <p> 5. <a href="#">Blood Groups Study</a></p>
                        <p> 6. <a href="#">How to deal with an emergency?</a></p>
                        <p> 7. <a href="#">Your guide to sleep better</a></p>
                        <p> 8. <a href="#">How to safely through away old medicines?</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5><strong>Address</strong></h5>
                        <hr>
                        <p>G. T. Road, Staff Houses Engineering University Lahore, Lahore, Punjab 39161</p>
                        <div class="mapouter">
                            <div class="gmap_canvas w-100"><iframe width="300" height="250" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=uet&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi
                                    discount</a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 250px;
                                        width: 300px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">google map embed</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 250px;
                                        width: 300px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark text-white">
            <div class="container py-3">
                <div class="row">
                    <span class="col-md-6">Copyright &copy 2021 <a href="#">ALFACARE</a>. All rights are reserved
                    </span>
                    <span class="col-md-6 text-md-right">Developers. <a href="#">Nadeem</a> , <a href="#">Sobia</a> , <a
                            href="#">Kainat</a></span>
                </div>
            </div>
        </div>

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>

</html>