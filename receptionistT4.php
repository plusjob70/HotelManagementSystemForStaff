<!doctype html>
<html lang="en">
<?php
include 'basic.php';
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel</title>
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
                            <a class="navbar-brand" href="staffMain.php"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="receptionistT1.php">Reservations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="receptionistT2.php">Check-ins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="receptionistT3.php">Check-outs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="receptionistT4.php">Service</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Start 출퇴근 기능 -->
                            <p style="color:navy">Welcome, <?= $staff_name ?>  &nbsp;</p>
                            <?php
                            if ($result_s[0]['attendance'] == 1) { ?>
                                <form action='staffAttendance.php' method='POST'>
                                    <button class="genric-btn primary" type='submit' name='attendance' value='f'>Leave</button>
                                </form>
                            <?php } else { ?>
                                <form action='staffAttendance.php' method='POST'>
                                    <button class="genric-btn primary" type='submit' name='attendance' value='t'>Attend</button>
                                </form>
                            <?php }
                            ?>
                            <p>&nbsp;</p>
                            <a href="logout.php" class="genric-btn primary">Log Out</a>
                            <!-- End 출퇴근 기능 -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- Start 고객 접수(불만 및 서비스) 기능 -->
    <div style='margin-left:80px;' class="col-lg-8 col-md-8">
        <h3 class="mb-30">Customer Service</h3>
        <form action="complain.php" method="POST">
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select" "="">
					<select name="complainment">
                    <option value="Repair">Repair</option>
                    <option value="Sanitation">Sanitation</option>
                    <option value="Noise">Noise</option>
                    <option value="Service">Service</option>
                    <option value="Others">Others</option>
                    </select>
                </div>
            </div>
            <div class="mt-10">
                <input type="text" id="rnumber" name="rnumber" placeholder="Room Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Room Number'" required="" class="single-input">
            </div>
            <div style='padding-bottom:10px' class="mt-10">
                <textarea id="detail" name="detail" class="single-textarea" placeholder="Detail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Detail'" required="" pwa2-uuid="EDITOR-B8D-7F0-F5AAF-25B" pwa-fake-editor=""></textarea>
                <pwa-editor-bar-cnt>
                    <pwa-editor-bar pwa2-uuid="EDITOR-B8D-7F0-F5AAF-25B" class="bar-full invisible" style="right: -505px !important; bottom: 5px !important;">
                        <pwa-editor-bar-status class="checked" data-pwa-errors-count="0"></pwa-editor-bar-status>
                        <pwa-editor-bar-status class="pending"></pwa-editor-bar-status>
                        <pwa-editor-bar-status class="loggedout"></pwa-editor-bar-status>
                        <pwa-editor-bar-status class="network-offline"></pwa-editor-bar-status>
                        <pwa-editor-bar-status class="extension-offline"></pwa-editor-bar-status>
                        <pwa-editor-bar-status class="site-disabled visible"></pwa-editor-bar-status>
                        <pwa-editor-bar-panel>
                            <pwa-editor-bar-panel-btn class="switch-off visible" title="Turn off ProWritingAid for this page"></pwa-editor-bar-panel-btn>
                            <pwa-editor-bar-panel-btn class="switch-on visible" title="Turn on ProWritingAid for this page"></pwa-editor-bar-panel-btn>
                            <pwa-editor-bar-panel-btn class="full-editor visible" title="Open this text in the full ProWritingAid editor"></pwa-editor-bar-panel-btn>
                            <pwa-editor-bar-panel-btn class="editor-disabled" title="Sorry, for technical reasons we can't support the full editor here"></pwa-editor-bar-panel-btn>
                            <pwa-editor-bar-panel-btn class="loggedout" title="Please log in or sign up for full access"></pwa-editor-bar-panel-btn>
                            <pwa-editor-bar-panel-btn class="network-offline" title="Network problems"></pwa-editor-bar-panel-btn>
                            <pwa-editor-bar-panel-btn class="extension-offline" title="ProWritingAid extension is off. Please reload this browser tab and dont forget to save you work before reload!"></pwa-editor-bar-panel-btn>
                        </pwa-editor-bar-panel>
                    </pwa-editor-bar>
                </pwa-editor-bar-cnt>
            </div>
            <button class="genric-btn success circle" id='register'> Submit </button>
            <p>&nbsp;</p>
        </form>
    </div>
    <!-- End 고객 접수(불만 및 서비스) 기능 -->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="single-footer-widget">
                        <h4>Discover Destination</h4>
                        <ul>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Subscribe our newsletter to get update news and offers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Us</h4>
                        <p>Jeju Island, 031 400 1005</p>
                        <span>contact@BHotel.com</span>
                        <div class="social-icons">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

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
</body>

</html>