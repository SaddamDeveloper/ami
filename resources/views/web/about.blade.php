@extends('web.template.master')
@section('content')
<div class="teacher_bg">
    <div class="header_title">
    <h1>About Us</h1>
    <hr class="tital_border">
    </div>
</div>
<div class="breadcrumb_bg">
    <div class="container">
    <ul class="breadcrumb breadcrumb-arrow">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span>About Us</span></li>
    </ul>
    </div>
</div>
<section>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="page_tital mb-md-0 mb-5">
                <h2>WHO WE ARE </h2>
                <hr class="tital_border">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ipsum turpis. Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus augue, eget dapibus elit nisi eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida.</p>
                <br>
                <p>Donec iaculis adipiscing neque, non congue massa euismod quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="page_tital">
                <h2> WHAT WE DO </h2>
                <hr class="tital_border">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent vulputate a elit ac mollis. In sit amet ipsum turpis.</p>
                <br>
                <p>Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus augue, eget dapibus elit nisi eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. Donec iaculis adipiscing neque, non congue massa euismod quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="register_bg">
    <div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="counter_text">
                <i class="fa fa-users"></i>
                <h1 class="counter-count">60</h1>
                <h4>CERTIFIED TEACHERS</h4>
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
<section>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page_tital text-center">
                <h2>Certifications</h2>
                <hr class="tital_border">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
    <div class="row p-t-50">
        <div class="col-sm-4 col-12">
            <div class="m-b-30">
                <div class="teachers_pro custom_hover_img">
                <img src="{{ asset('web/assets/images/certificate.png') }}" alt="Certificate" class="img-responsive" />
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12">
            <div class="m-b-30">
                <div class="teachers_pro custom_hover_img">
                <img src="{{ asset('web/assets/images/certificate.png') }}" alt="Certificate" class="img-responsive" />
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12">
            <div class="m-b-30">
                <div class="teachers_pro custom_hover_img">
                <img src="{{ asset('web/assets/images/certificate.png') }}" alt="Certificate" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page_tital text-center">
                <h2>Best Experts</h2>
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
                    <img src="{{ asset('web/assets/images/teachers/teacher-1.jpg') }}" alt="Teacher Profile" class="img-responsive" />
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
                    <img src="{{ asset('web/assets/images/teachers/teacher-2.jpg') }}" alt="Teacher Profile" class="img-responsive" />
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
                    <img src="{{ asset('web/assets/images/teachers/teacher-3.jpg') }}" alt="Teacher Profile" class="img-responsive" />
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
                    <img src="{{ asset('web/assets/images/teachers/teacher-4.jpg') }}" alt="Teacher Profile" class="img-responsive" />
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
<section class="partner-sec text-center">
    <div class="container">
    <div class="logo-slider-block">
        <div id="logo-slider" class="owl-carousel owl-theme">
            <div>
                <a class="logo-block" href="javascript:void(0)"><img src="{{ asset('web/assets/images/logo.png') }}" alt="company logo"></a>
            </div>
            <div>
                <a class="logo-block" href="javascript:void(0)"><img src="{{ asset('web/assets/images/logo.png') }}" alt="company logo"></a>
            </div>
            <div>
                <a class="logo-block" href="javascript:void(0)"><img src="{{ asset('web/assets/images/logo.png') }}" alt="company logo"></a>
            </div>
            <div>
                <a class="logo-block" href="javascript:void(0)"><img src="{{ asset('web/assets/images/logo.png') }}" alt="company logo"></a>
            </div>
            <div>
                <a class="logo-block" href="javascript:void(0)"><img src="{{ asset('web/assets/images/logo.png') }}" alt="company logo"></a>
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
