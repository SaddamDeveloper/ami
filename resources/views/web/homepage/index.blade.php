@extends('web.template.master')
@section('content')
    <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
    </div>
    <header id="header" class="header_1 header_2">
    <div class="toolbar d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                <div class="thim-have-any-question">
                    <div class="mobile"><i class="fa fa-phone m-r-5"></i><a class="value" href="tel:+9100123456789"> (00) 123 456 789</a></div>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="child_login pull-right">
                    <i class="fa fa-clock-o"></i> Mon - Fri : 9.00AM - 06.00PM
                    <a href="javascript:void(0)" class="register m-l-10 js-modal-show">Register</a>
                    <a href="javascript:void(0)" class="login js-modal-show">Login</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="study_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded mb-0 ">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Main Logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu main_menu">
                    <li class="nav-item single_nav menu-item"><a href="index.html" class="nav-link current">Home</a> </li>
                    <li class="nav-item single_nav menu-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item single_nav">
                        <a href="javascript:void(0)" class="nav-link">Courses</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="course-grid.html" class="nav-link">Course Grid</a></li>
                            <li class="nav-item"><a href="course-single.html" class="nav-link">Course Single</a></li>
                        </ul>
                    </li>
                    <li class="nav-item single_nav">
                        <a href="javascript:void(0)" class="nav-link dropdown_icon">Teachers</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="teacher.html" class="nav-link">Teacher</a></li>
                            <li class="nav-item"><a href="teacher-profile.html" class="nav-link">Teacher Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item single_nav">
                        <a href="javascript:void(0)" class="nav-link">Gallery</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="gallery-one.html" class="nav-link">Gallery Style 1</a></li>
                            <li class="nav-item"><a href="gallery-two.html" class="nav-link">Gallery Style 2</a></li>
                            <li class="nav-item"><a href="gallery-three.html" class="nav-link">Gallery Style 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item single_nav">
                        <a href="javascript:void(0)" class="nav-link">Events</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="event.html" class="nav-link">Events</a></li>
                            <li class="nav-item"><a href="event-detail.html" class="nav-link">Events Detail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item single_nav">
                        <a href="javascript:void(0)" class="nav-link">Blog</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                            <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                            <li class="nav-item"><a href="blog-detail.html" class="nav-link">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item single_nav">
                        <a href="javascript:void(0)" class="nav-link">Contact</a>
                        <ul class="navbar-nav nav mx-auto">
                            <li class="nav-item"><a href="contact-style-one.html" class="nav-link">Contact Style 1</a></li>
                            <li class="nav-item"><a href="contact-style-two.html" class="nav-link">Contact Style 2</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
    </div>
    </header>
    <section class="banner text-center p-0">
    <div class="container-fulid">
        <div id="banner-slider" class="owl-carousel owl-theme">
            <div class="banner-slide d-flex align-items-center" style="background-image: url(assets/images/banner-1.png)">
                <div class="banner-text w-100">
                <h1>Wel Come To Study Point</h1>
                <p class="info-text-slider text-white my-4" ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br />
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="javascript:void(0)" class="btn btn-default custom_btn">Buy Now</a>
                </div>
            </div>
            <div class="banner-slide d-flex align-items-center" style="background-image: url(assets/images/banner-2.png)">
                <div class="banner-text w-100">
                <h1>Open the World of Opportunies!</h1>
                <p class="info-text-slider text-white my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br />
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="javascript:void(0)" class="btn btn-default custom_btn">Buy Now</a>
                </div>
            </div>
            <div class="banner-slide d-flex align-items-center" style="background-image: url(assets/images/banner-3.png)">
                <div class="banner-text w-100">
                <h1>Open the World of Opportunies!</h1>
                <p class="info-text-slider text-white my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br />
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="javascript:void(0)" class="btn btn-default custom_btn">Buy Now</a>
                </div>
            </div>
            <div class="banner-slide d-flex align-items-center" style="background-image: url(assets/images/banner-4.png)">
                <div class="banner-text w-100">
                <h1>Open the World of Opportunies!</h1>
                <p class="info-text-slider text-white my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br />
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="javascript:void(0)" class="btn btn-default custom_btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="page_tital text-center">
                <h2> Welcome to University </h2>
                <hr class="tital_border">
                <p>Study Point is a international leader in teaching students to write effectively,learn from each other and think for themselves.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-md-4">
                <div class="study_block">
                <div class="icon_block">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="study_info">
                    <h3>Program</h3>
                    <p>The technical writing profession is continuously evolving as technical logitech...</p>
                    <a href="javascript:void(0)" class="btn btn-default profile_btn read_more">Read More</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="study_block">
                <div class="icon_block">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <div class="study_info">
                    <h3>Affordability</h3>
                    <p>The technical writing profession is continuously evolving as technical logitech...</p>
                    <a href="javascript:void(0)" class="btn btn-default profile_btn read_more">Read More</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="study_block">
                <div class="icon_block">
                    <i class="fa fa-trophy"></i>
                </div>
                <div class="study_info">
                    <h3>Certification</h3>
                    <p>The technical writing profession is continuously evolving as technical logitech...</p>
                    <a href="javascript:void(0)" class="btn btn-default profile_btn read_more">Read More</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="register_bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="register_now">
                <div class="register_heding">Register Now</div>
                <h2>GET THE COACHING TRAINING BY <br />ADAM JONES <a href="javascript:void(0)">FOR FREE</a> </h2>
                <div class="right_icon">
                    <i class="fa fa-hand-o-right"></i>
                    It’s limited seating! Hurry up
                </div>
                <ul id="clock" class="clock_countdown">
                    <li>
                        <h2 class="days counter_title">00</h2>
                        <p class="days_text">Days</p>
                    </li>
                    <li>
                        <h2 class="hours counter_title">00</h2>
                        <p class="HOURS_text">Hours</p>
                    </li>
                    <li>
                        <h2 class="minutes counter_title">00</h2>
                        <p class="minutes_text">Minutes</p>
                    </li>
                    <li>
                        <h2 class="seconds counter_title">00</h2>
                        <p class="seconds_text">Seconds</p>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="register_now_form">
                <h4 class="register_title">Create your free account now and get immediate access to 100s of online courses.</h4>
                <form class="form_det" method="post" name="detail">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password*" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-default form_btn"> Get it Now </button>
                </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page_tital text-center">
                <h2> Our Teachers</h2>
                <hr class="tital_border">
                <p>Find online courses and a wide range of related learning content.</p>
                </div>
            </div>
        </div>
        <div class="row p-t-50">
            <div class="col-sm-6">
                <div class="row m-b-30">
                <div class="col-4 col-sm-4">
                    <div class="teachers_pro custom_hover_img">
                        <img src="assets/images/teachers/teacher-1.jpg" alt="Teacher Profile" class="img-responsive" />
                    </div>
                </div>
                <div class="col-8 col-sm-8">
                    <div class="teacher_text">
                        <h5> <a href="teacher-profile.html">Edith Williams</a></h5>
                        <h6>Backen</h6>
                        <p>A fantastict, first rate teacher who has the ability to raise the performance......</p>
                        <button class="btn btn-default profile_btn" type="button" onclick='window.location.href="teacher-profile.html"'>
                        View Profile
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                <div class="col-4 col-sm-4">
                    <div class="teachers_pro custom_hover_img">
                        <img src="assets/images/teachers/teacher-2.jpg" alt="Teacher Profile" class="img-responsive" />
                    </div>
                </div>
                <div class="col-8 col-sm-8">
                    <div class="teacher_text">
                        <h5> <a href="teacher-profile.html">Kaylin Moore</a></h5>
                        <h6>IT & Software</h6>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text......</p>
                        <button class="btn btn-default profile_btn" type="button" onclick='window.location.href="teacher-profile.html"'>
                        View Profile
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row p-t-50">
            <div class="col-sm-6">
                <div class="row m-b-30">
                <div class="col-4 col-sm-4">
                    <div class="teachers_pro custom_hover_img">
                        <img src="assets/images/teachers/teacher-3.jpg" alt="Teacher Profile" class="img-responsive" />
                    </div>
                </div>
                <div class="col-8 col-sm-8">
                    <div class="teacher_text">
                        <h5> <a href="teacher-profile.html">Eric Morgan</a></h5>
                        <h6>Teacher English</h6>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.....</p>
                        <button class="btn btn-default profile_btn" type="button" onclick='window.location.href="teacher-profile.html"'>
                        View Profile
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                <div class="col-4 col-sm-4">
                    <div class="teachers_pro custom_hover_img">
                        <img src="assets/images/teachers/teacher-4.jpg" alt="Teacher Profile" class="img-responsive" />
                    </div>
                </div>
                <div class="col-8 col-sm-8">
                    <div class="teacher_text">
                        <h5> <a href="teacher-profile.html">John Brown</a></h5>
                        <h6>Backend</h6>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text......</p>
                        <button class="btn btn-default profile_btn" type="button" onclick='window.location.href="teacher-profile.html"'>
                        View Profile
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="p-t-50 text-center"><button class="btn btn-default custom_btn custom_btn_full" type="button" onclick='window.location.href="teacher.html"'>view more</button></div>
    </div>
    </section>
    <section class="counter_bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="counter_text">
                <i class="fa fa-users"></i>
                <h1 class="counter-count">1000</h1>
                <h4>event participated</h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="counter_text">
                <i class="fa fa-book"></i>
                <h1 class="counter-count">500</h1>
                <h4>classes complete</h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="counter_text">
                <i class="fa fa-trophy"></i>
                <h1 class="counter-count">250</h1>
                <h4>awrads won</h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="counter_text">
                <i class="fa fa-university"></i>
                <h1 class="counter-count">155</h1>
                <h4>student enrolled</h4>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="bg_grey news_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page_tital">
                <h2>Latest News</h2>
                <hr class="tital_border m-l-0" />
                <p>Education news all over the world. </p>
                </div>
            </div>
        </div>
        <div class="row m-t-30">
            <div id="latest_blog_carousel" class="owl-carousel owl-theme">
                <div class="latest_news">
                <div class="new_blgo">
                    <div class="custom_hover_img">
                        <img src="assets/images/news/news_1.png" alt="News Post" class="img-responsive">
                    </div>
                    <div class="news_date">
                        <h3 class="datesection">05 </h3>
                        Aug
                    </div>
                    <div class="new_border"></div>
                </div>
                <div class="author_name">
                    <span>By: <a href="javascript:void(0)">Anjori Meyami</a></span>
                    <span>Comments: <a href="javascript:void(0)">6</a></span>
                    <h5><a href="javascript:void(0)">The Surprising Reason College Tuition Is Crazy Expensive</a></h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiamt</p>
                </div>
                </div>
                <div class="latest_news">
                <div class="new_blgo">
                    <div class="custom_hover_img">
                        <img src="assets/images/news/news_2.png" alt="News Post" class="img-responsive">
                    </div>
                    <div class="news_date">
                        <h3 class="datesection">05 </h3>
                        Aug
                    </div>
                    <div class="new_border"></div>
                </div>
                <div class="author_name">
                    <span>By: <a href="javascript:void(0)">Anjori Meyami</a></span>
                    <span>Comments: <a href="javascript:void(0)">6</a></span>
                    <h5><a href="javascript:void(0)">Education should be child centric and not the curriculum</a></h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiamt</p>
                </div>
                </div>
                <div class="latest_news">
                <div class="new_blgo">
                    <div class="custom_hover_img">
                        <img src="assets/images/news/news_3.png" alt="News Post" class="img-responsive">
                    </div>
                    <div class="news_date">
                        <h3 class="datesection">05 </h3>
                        Aug
                    </div>
                    <div class="new_border"></div>
                </div>
                <div class="author_name">
                    <span>By: <a href="javascript:void(0)">Anjori Meyami</a></span>
                    <span>Comments: <a href="javascript:void(0)">6</a></span>
                    <h5><a href="javascript:void(0)">Studying abroad: Depreciating dreams,what to do?</a></h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiamt</p>
                </div>
                </div>
                <div class="latest_news">
                <div class="new_blgo">
                    <div class="custom_hover_img">
                        <img src="assets/images/news/news_1.png" alt="News Post" class="img-responsive">
                    </div>
                    <div class="news_date">
                        <h3 class="datesection">05 </h3>
                        Aug
                    </div>
                    <div class="new_border"></div>
                </div>
                <div class="author_name">
                    <span>By: <a href="javascript:void(0)">Anjori Meyami</a></span>
                    <span>Comments: <a href="javascript:void(0)">6</a></span>
                    <h5><a href="javascript:void(0)">The Surprising Reason College Tuition Is Crazy Expensive</a></h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiamt</p>
                </div>
                </div>
                <div class="latest_news">
                <div class="new_blgo">
                    <div class="custom_hover_img">
                        <img src="assets/images/news/news_2.png" alt="News Post" class="img-responsive">
                    </div>
                    <div class="news_date">
                        <h3 class="datesection">05 </h3>
                        Aug
                    </div>
                    <div class="new_border"></div>
                </div>
                <div class="author_name">
                    <span>By: <a href="javascript:void(0)">Anjori Meyami</a></span>
                    <span>Comments: <a href="javascript:void(0)">6</a></span>
                    <h5><a href="javascript:void(0)">Education should be child centric and not the curriculum</a></h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiamt</p>
                </div>
                </div>
                <div class="latest_news">
                <div class="new_blgo">
                    <div class="custom_hover_img">
                        <img src="assets/images/news/news_3.png" alt="News Post" class="img-responsive">
                    </div>
                    <div class="news_date">
                        <h3 class="datesection">05 </h3>
                        Aug
                    </div>
                    <div class="new_border"></div>
                </div>
                <div class="author_name">
                    <span>By: <a href="javascript:void(0)">Anjori Meyami</a></span>
                    <span>Comments: <a href="javascript:void(0)">6</a></span>
                    <h5><a href="javascript:void(0)">Studying abroad: Depreciating dreams,what to do?</a></h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiamt</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="partner-sec text-center">
    <div class="container">
        <div class="logo-slider-block">
            <div id="logo-slider" class="owl-carousel owl-theme">
                <div>
                <a class="logo-block" href="javascript:void(0)"><img src="assets/images/logo.png" alt="company logo"></a>
                </div>
                <div>
                <a class="logo-block" href="javascript:void(0)"><img src="assets/images/logo.png" alt="company logo"></a>
                </div>
                <div>
                <a class="logo-block" href="javascript:void(0)"><img src="assets/images/logo.png" alt="company logo"></a>
                </div>
                <div>
                <a class="logo-block" href="javascript:void(0)"><img src="assets/images/logo.png" alt="company logo"></a>
                </div>
                <div>
                <a class="logo-block" href="javascript:void(0)"><img src="assets/images/logo.png" alt="company logo"></a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="newsletter_sec">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="newsletter_text">
                <h2>Subscribe to our Newsletter </h2>
                <hr class="tital_border m-l-0">
                <p>Sign up to receive email updates about courses</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <form class="form-group subscribe_form mb-0" method="post">
                <input type="email" placeholder="Enter your email" name="email" required>
                <button class="btn btn-default custom_btn pull-right custom_btn_full" type="submit"> subscribe </button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
