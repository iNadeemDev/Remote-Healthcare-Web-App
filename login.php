
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>User Login</title>

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
        #InvalidCredentials{
            text-align: center;
            color: #FF0000;
            visibility: hidden;
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
                            <a class="nav-link" href="specialities.php">Specialities</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="doctors.php">Doctors</a>
                        </li>
                    </ul>

                    <button class="btn bg-info">
                        <a href="#" class="text-white">Login/Register</a>
                    </button>
                    <!-- Links Ends -->
                </div>
                <!-- Collapsible content ends-->
            </nav>
            <!--/.Navbar ends-->
        </div>
    </header>

    <div class="bg">
        
        
        <div class="row gx-0 justify-content-center" style="margin: 0 2%;">
            <div class="login-area col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-3">
                <div class="bg-img"> 
                    <img src="images/public/form-bg.jpg" alt="">
                </div>
                <h2>Sign In</h2>
                <div id="InvalidCredentials">
                    <sup>*</sup> Incorrect username or password!
                </div>
                <form action="authenticate.php" method="post" class="form-container form-floating">
                    <div class="mb-3">
                    <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                    <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-info text-white w-100 mb-3">Sign In</button>
                    <div class="position-relative form-check">
                        <div class="position-absolute start-1">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Remember me</label>
                        </div>                   
                        <a href="#" class="position-absolute end-0">Forget Password</a>
                    </div>
                </form>
                <p class="text-center">Not a member? <a href="signup.php">Sign Up</a></p>

            </div>
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


    <?php
    $invalid = false;

    if(isset($_GET['status']) && $_GET['status'] == 1){
       $invalid = true;
    }

    if($invalid)
    {
     echo '
       <script type="text/javascript">
         function hideMsg()
         {
            document.getElementById("InvalidCredentials").style.visibility = "hidden";
         }

         document.getElementById("InvalidCredentials").style.visibility = "visible";
       </script>';
    }
    ?>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>