<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel</title>
    <!-- <link rel="icon" href="img/favicon.png"> -->
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
    <link rel="stylesheet" href="css/additional.css">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
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
                                        <a class="nav-link" href="about.html">예약현황</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="packages.html">예정된 체크인</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="packages.html">예정된 체크아웃</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">고객 불만접수</a>
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

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1> Saintmartine</h1>
                            <p>Let’s start your journey with us, your dream will come true</p>
                            <a href="#" class="btn_1">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">hotel</a>
                            </li>
                            <!-- 추후에 연회장 서비스 예약시 사용 -->
                            <!-- <li class="nav-item">
                            <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#tricket" role="tab" aria-controls="tricket" aria-selected="false">tricket</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="select_rooms.php" method="POST" name="reservation" onsubmit="return isValidDate()">
                                        <div class="form-row">

                                            <div class="form_colum">
                                                <div class="form_colum2">
                                                    <div id="btn_group">
                                                        <span class="rooms_text">Rooms</span>
                                                        <input type="button" value="-" id="test_btn1" onclick="room_decrease()">
                                                        <input type="text" name="rooms" value="1" id="rooms_num">
                                                        <input type="button" value="+" id="test_btn1" onclick="room_increase()">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form_colum">
                                                <input type="text" id="datepicker_1" name="check_in_date" placeholder="Check in date">
                                            </div>

                                            <div class="form_colum">
                                                <input type="text" id="datepicker_2" name="check_out_date" placeholder="Check in date">
                                            </div>

                                            <div class="form_colum">
                                                <div class="form_colum2">
                                                    <div id="btn_group">
                                                        <span class="guest_text">Guests</span>
                                                        <input type="button" value="-" id="test_btn1" onclick="guest_decrease()">
                                                        <input type="text" name="guests" value="1" id="guest_num">
                                                        <input type="button" value="+" id="test_btn2" onclick="guest_increase()">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form_btn">
                                                <input type="submit" class="btn_1" value="Search">
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- 연회장 예약 구현시 사용 -->
                            <!-- <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_3" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_4" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="#" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

    <!--top place start-->
    <section class="top_place section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Top Places to visit</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="img/single_place_1.png" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Saintmartine Iceland</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="img/single_place_2.png" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Saintmartine Iceland</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="img/single_place_3.png" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Saintmartine Iceland</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="img/single_place_4.png" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Saintmartine Iceland</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn_1 text-cnter">Discover more</a>
            </div>
        </div>
    </section>
    <!--top place end-->

    <!--top place start-->
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel">
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="col-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top place end-->

    <!--::industries start::-->
    <section class="hotel_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Top Hotel & Restaurants</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/ind/industries_1.png" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Hotel Polonia</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>London, United Kingdom</p>
                            <h5>From <span>$500</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/ind/industries_2.png" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Hotel Polonia</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>London, United Kingdom</p>
                            <h5>From <span>$500</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/ind/industries_3.png" alt="">
                        <div class="hover_text">
                            <div class="hover_text">
                                <div class="hotel_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="share_icon">
                                    <i class="ti-share"></i>
                                </div>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Hotel Polonia</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>London, United Kingdom</p>
                            <h5>From <span>$500</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::industries end::-->

    <!--top place start-->
    <section class="client_review section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6">
                    <div class="section_tittle">
                        <h2>What they said</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top place end-->

    <!--::industries start::-->
    <section class="best_services section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>We offered best services</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/services_1.png" alt="">
                        <h3> <a href="#"> Transportation</a></h3>
                        <p>All transportation cost we bear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/services_2.png" alt="">
                        <h3> <a href="#"> Guidence</a></h3>
                        <p>We offer the best guidence for you</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/services_3.png" alt="">
                        <h3> <a href="#"> Accomodation</a></h3>
                        <p>Luxarious and comfortable</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="img/services_4.png" alt="">
                        <h3> <a href="#"> Discover world</a></h3>
                        <p>Best tour plan for your next tour</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::industries end::-->

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
                        <p>4156, New garden, New York, USA
                            +880 362 352 783</p>
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

    <script src="js/index_form.js" type="text/javascript"></script>
</body>

</html>