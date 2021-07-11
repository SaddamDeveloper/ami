@extends('web.template.master')
@section('content')
<div class="teacher_bg">
    <div class="header_title">
    <h1>Verify Certificate</h1>
    <hr class="tital_border">
    </div>
</div>
<div class="breadcrumb_bg">
    <div class="container">
    <ul class="breadcrumb breadcrumb-arrow">
        <li><a href="index.html">Home</a></li>
        <li class="active"><span>Verify Certificate</span></li>
    </ul>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-sm-6 mb-2">
                                <input type="text" placeholder="Enter Registration No" id="id" class="form-control" required="">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-default profile_btn">
                                    submit now
                                </button>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row p-t-50">
            <div class="col-sm-4">
                {{-- <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-user"></i></a>
                    <h5>Name</h5>
                    <p>Saddam Hussain</p>
                </div> --}}
            </div>
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-phone"></i></a>
                    <h5>Father's Name</h5>
                    <p>Nurul Islam</p>
                </div>
            </div>
            <div class="col-sm-4">
                {{-- <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-map-marker"></i></a>
                    <h5>Course</h5>
                    <p>PGDCA</p>
                </div> --}}
            </div>
        </div>
        <div class="row p-t-50">
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-user"></i></a>
                    <h5>Name</h5>
                    <p>Saddam Hussain</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-phone"></i></a>
                    <h5>Father's Name</h5>
                    <p>Nurul Islam</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-map-marker"></i></a>
                    <h5>Course</h5>
                    <p>PGDCA</p>
                </div>
            </div>
        </div>
        <div class="row p-t-50">
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-envelope-o"></i></a>
                    <h5>Email</h5>
                    <a href="mailto:hello@education.com">hello@education.com</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-phone"></i></a>
                    <h5>Phone number</h5>
                    <a href="tel:917001133322">+91 (700)11 333 22</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="emial_icon">
                    <a href="javascript:void(0)"><i class="fa fa-map-marker"></i></a>
                    <h5>Address</h5>
                    <p>59,Downtown St,Melbourne Australia</p>
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
