<!doctype html>
<html lang="en">
<?php
include 'basic.php';

$room = array(
    6 => array(48 => 801, 49 => 802, 50 => 803, 51 => 804, 52 => 805, 53 => 806, 54 => 807, 55 => 808),
    5 => array(40 => 701, 41 => 702, 42 => 703, 43 => 704, 44 => 705, 45 => 706, 46 => 707, 47 => 708),
    4 => array(32 => 601, 33 => 602, 34 => 603, 35 => 604, 36 => 605, 37 => 606, 38 => 607, 39 => 608),
    3 => array(24 => 501, 25 => 502, 26 => 503, 27 => 504, 28 => 505, 29 => 506, 30 => 507, 31 => 508),
    2 => array(16 => 401, 17 => 402, 18 => 403, 19 => 404, 20 => 405, 21 => 406, 22 => 407, 23 => 408),
    1 => array(8 => 301, 9 => 302, 10 => 303, 11 => 304, 12 => 305, 13 => 306, 14 => 307, 15 => 308),
    0 => array(0 => 201, 1 => 202, 2 => 203, 3 => 204, 4 => 205, 5 => 206, 6 => 207, 7 => 208)
);

$stmt3 = $db->query("SELECT * FROM staff WHERE attendance = 1 AND department = 'roomkeeper'");
$result3 = $stmt3->fetchAll();

$stmt3_2 = $db->query("SELECT * FROM room");
$result3_2 = $stmt3_2->fetchAll();

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Martine</title>
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
    <script type="text/javascript" src="selectStaffId.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                            <span>Top destinations</span>
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
                            <span><i class="flaticon-phone-call"></i>+880 356 257 142</a></span>
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
                            <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="managerT1.php">예약현황</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="managerT2.php">출근현황</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="managerT3.php">청소배정</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="managerT4.php">고객 접수사항</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="managerT5.php">업무현황</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="managerT6.php">고객기록</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Start 출퇴근 기능 -->
                            <?php
                            if ($result_s[0]['attendance'] == 1) { ?>
                                <form action='staffAttendance.php' method='POST'>
                                    <button class="genric-btn primary" type='submit' name='attendance' value='f'>퇴근하기</button>
                                </form>
                            <?php } else { ?>
                                <form action='staffAttendance.php' method='POST'>
                                    <button class="genric-btn primary" type='submit' name='attendance' value='t'>출근하기</button>
                                </form>
                            <?php }
                            ?>
                            <p> <?= $staff_name ?> 님</p>
                            <a href="logout.php" class="genric-btn primary">로그아웃</a>
                            <!-- End 출퇴근 기능 -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>contact</h2>
                            <p>home . contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- Start 룸키퍼 청소배정 기능 -->
    <div class="col-lg-8 col-md-8">
        <h3 class="mb-30">청소 배정</h3>
            <div class="input-group-icon mt-10">
                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                <div class="form-select" id="default-select" "="">
                <select id='staff_list'>
                    <?php for ($i = 0; $i < count($result3); $i++) { ?>
                    <option value='<?= $result3[$i]['id'] ?>'> <?= $result3[$i]['id'] ?> </option>
                    <?php } ?>
                </select>
                </div>
            </div>
    </div>

    <form action='cleaning.php' method='POST'>
        <table>
            <?php foreach ($room as $floor => $bundle) { ?>
                <tr>
                    <?php foreach ($room[$floor] as $seq => $rnumber) { ?>
                        <?php if ($result3_2[$seq]['clean'] == 0 && $result3_2[$seq]['isEmpty'] == 1) { ?>
                            <td>
                                <input type='hidden' name='selected_staff' value='staff'></input>
                                <button class="genric-btn info" type='submit' name='rnumber' value='<?= $rnumber ?>'> <?= $rnumber ?> </button>
                            </td>
                        <?php } else { ?>
                            <td><button class="genric-btn info-border" type='submit' name='rnumber' disabled> <?= $rnumber ?> </button></td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </form>
    <!-- End 룸키퍼 청소배정 기능 -->

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
                        <p>4156, New garden, New York, USA +880 362 352 783</p>
                        <span>contact@martine.com</span>
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