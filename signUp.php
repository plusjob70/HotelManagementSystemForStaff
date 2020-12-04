<!DOCTYPE html>
<?php session_start() ?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                            <span>BHotel locations</span>
                            <a href="#">Asia</a>
                            <a href="#">Europe</a>
                            <a href="#">America</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
                            <a href="#"><i class="flaticon-facebook"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-skype"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                            <span><i class="flaticon-phone-call"></i>031 400 1005</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="staffMain.html"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="masterT1.php"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <div class="section-top-border" style="padding-left:80px;">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <h3 class="mb-30">Hello! Please enter your information.</h3>
            <form name="HMS" method="post" action="staffSave.php">
                <div class="mt-10" style="padding-bottom:10px;">
                    <label for="name">ID:</label>
                    <input type="text" maxlength="20" name="id" placeholder="Enter ID here"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter ID here'" required
                        class="single-input">
                </div>
                <div class="mt-10" style="padding-bottom:10px;">
                    <label for="password">Password:</label>
                    <input type="password" maxlength="20" name="pwd" placeholder="Enter Password here"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password here'" required
                        class="single-input">
                </div>
                <div class="mt-10" style="padding-bottom:10px;">
                    <label for="password2">Retype password:</label>
                    <input type="password" maxlength="20" name="pwd2" placeholder="Enter Password again"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password agian'" required
                        class="single-input">
                </div>
                <div class="mt-10" style="padding-bottom:10px;">
                    <label for="name">Name:</label>
                    <input type="text" maxlength="20" name="name" placeholder="Enter your name here"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name here'" required
                        class="single-input">
                </div>
                <div class="mt-10" style="padding-bottom:10px;">
                    <label for="phone">Phone Number:</label>
                    <input type="text" maxlength="11" name="phone" placeholder="Enter your phone number here"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number here'" required
                        class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select"">
                        <select name="department">
                        <option value="roomkeeper">roomkeeper</option>
                        <option value="receptionist">receptionist</option>
                        <option value="manager">manager</option>
                        </select>
                    </div>
                </div>

                <ul class="actions">
                    <button type=submit class="genric-btn success medium">submit</button>
                    <button type=reset class="genric-btn success medium">restart</button>
                </ul>
            </form>
        </div>
        
    <!-- End Align Area -->


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

    <script src="js/sign.js"></script>
    
</body>

</html>
