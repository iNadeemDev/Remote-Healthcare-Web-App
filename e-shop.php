
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page-Title</title>

    <style>
        body{
	        font-family: 'Roboto', sans-serif;
        }
        a {
            text-decoration: none;
        }
        /*Footer CSS */
        footer{
            text-align: left;
        }
        .footer a{
            color: black;
            text-decoration: none;
        }
        .footer li{    
            list-style-type: none;
            padding: 9px 0px;
        }
        .footer ul{
            margin: 0;
            padding: 0;
        }
        .footer input {
            background-color: rgb(193, 226, 233);
        }
        .footer textarea {
            background-color: rgb(193, 226, 233);
        }
        .social i {
            font-size: 40px;
        }
        .bg-img img {
            width: 100%;
            border-radius: 10px 10px 0px 0px;
        }
        h2 {
            text-align: center;
            font-family: "Lato",Arial,sans-serif;
            margin-top: 20px;
        }
        .login-area {
            box-shadow: 0 0 10px 0 #000;
            border-radius: 10px;
            margin-top: 2%;
            margin-bottom: 2%;
            background: #fff;
            opacity: 0.8;
        }
        .form-container {
            padding:30px;
        }
        .bg {
            background: url('images/public/bg2.jpg') no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100%;
        }
        @media only screen and (max-width:877px){
            .bg{
                background-size: 200%;
            }
            .login-area{
                opacity: 1;
            }
        }    
        </style>
</head>
<body>
<header class="text-white" style="background-color: #DFB57A;">
        <div class="container">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark primary-color">
                <a class="navbar-brand" href="index.php">ALFACARE</a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="appointments.php">Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="e-shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="specialities.php">Specialities.php</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="doctors.php">Doctors</a>
                        </li>
                    </ul>

                    <button class="btn bg-info">
                        <a href="login.php" class="text-white">Login/Register</a>
                    </button>
                    <!-- Links Ends -->
                </div>
                <!-- Collapsible content ends-->
            </nav>
            <!--/.Navbar ends-->
        </div>
    </header>


    <div class="container">
        <hr>
        <h3 class="text-center">Order Medicines Now</h3>
        <hr>    
    </div>           
    <div class="container d-flex justify-content-between">
							<div class="row">

							<?php

                                #generate random string
                                function generateRandomString($length = 5) {
                                    return substr(str_shuffle(str_repeat($x='abcdefghijklmnoyzABCDEFGHIJKLMNOPQRSYZ', ceil($length/strlen($x)) )),1,$length);
                                }
								include "connection.php";
								$result = mysqli_query($con , "SELECT * FROM medicines");
								while ($row = mysqli_fetch_array($result))
								{
							?>


								<div class="col-12 col-sm-6 col-md-4 col-lg-3">
									<div class="card card-body mt-3">
										<div
											class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
											<div class="mr-2 mb-3 mb-lg-0"> <img src="https://source.unsplash.com/300x300?medicines,                                            
											<?php										
												echo  generateRandomString();
											?>
                                            "
													width="150" height="150" alt=""> </div>
											<div class="media-body">
												<h6 class="media-title font-weight-semibold py-3"> <a href="#"
														data-abc="true"><?php echo $row["Name"] ?></a> </h6>
												<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
													<li class="list-inline-item"><a href="#" class="text-muted"
															data-abc="true">Type: <?php echo $row["Type"]?> </a></li>
												</ul>
												<p class="mb-3"><?php echo $row["Description"]?></p>
												</ul>
											</div>
											<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
												<h3 class="mb-0 font-weight-semibold">Rs. <?php echo $row["Price"]?></h3>
												<div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
														class="fa fa-star"></i> <i class="fa fa-star"></i> <i
														class="fa fa-star"></i> </div>
												

												<div class="text-muted">Stock: <?php echo $row["Stock"]?></div> 
                                                <a href="login.php"><button type="submit" class="btn btn-warning mt-4 text-white">
                                                <i class="icon-cart-add mr-2"></i>Order Now</button></a>

											</div>
										</div>
									</div>
								</div>
								
								

								<?php } ?>



                                <hr class="my-3">
							</div>
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
                            <textarea maxlength='200' id="" cols="" rows="3" class="form-control" placeholder="Message or comment..." name="message"></textarea>
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
            <div class="text-center">
                <span class="">Copyright &copy 2021 <a href="#">ALFACARE</a>. All rights are reserved </span>
            </div>
        </div>
    </div>






    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>					
                        
                        
                        
                        
                        