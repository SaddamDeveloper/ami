<!DOCTYPE html>
<html lang="en-us">
   <head>
      <title>{{ config('app.name') }}</title>
      <link rel="icon" href="assets/images/fave.png" type="image/x-icon" />
      <meta http-equiv="content-language" content="en-us">
      <meta http-equiv="content-type" content="text/HTML" charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="noindex, follow" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="blog, news, education">
      <meta property="og:description" content="blog, news, education" />
      <meta name="keywords" content="blog, news, education">
      <meta property="og:title" content="blog, news, education" />
      <meta name="author" content="Crescent-Theme">
      <meta name="copyright" content="copyright 2019 Crescent Theme">
      <link href="{{ asset('web/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/css/font-awesome.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/css/custom-font.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/plugins/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/plugins/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/css/navigation.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/css/preloader.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet" />
      <link href="{{ asset('web/assets/css/responsive.css') }}" rel="stylesheet" />
      <style>
          .mean-bar::before{background:url("../images/white-logo.png") no-repeat center center/cover;height:39px;width:130px;content:"";left:20px;position:absolute;text-transform:uppercase;top:8px;z-index:1}
      </style>
   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="50" class="home">
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
                         <div class="mobile"><i class="fa fa-phone m-r-5"></i><a class="value" href="tel:+91-{{ !empty($frontend) ? $frontend->mobile : '' }}">+91-{{ !empty($frontend) ? $frontend->mobile : '' }}</a></div>
                     </div>
                     </div>
                     <div class="col-sm-6">
                     <div class="child_login pull-right">
                         <i class="fa fa-envelope"></i><a class="value" href="mailto:{{ !empty($frontend) ? $frontend->email : '' }}"> {{ !empty($frontend) ? $frontend->email : '' }}</a>
                         <a href="{{ route('web.admission') }}" class="register m-l-10">Admission</a>
                         <a href="javascript:void(0)" class="login js-modal-show">Login</a>
                     </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="study_nav">
             <div class="container">
                 <nav class="navbar navbar-expand-md navbar-light bg-faded mb-0 ">
                     <a class="navbar-brand" href="{{ route('web.index') }}"><img src="{{ !empty($frontend) ? asset('admin/homepage/').'/'.$frontend->logo : 'ASIAN MISSION INSTITUTE' }}" alt="Main Logo"></a>
                     <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav nav lavalamp ml-auto menu main_menu">
                         <li class="nav-item single_nav menu-item"><a href="{{ route('web.index') }}" class="nav-link current">Home</a> </li>
                         {{-- <li class="nav-item single_nav menu-item"><a href="{{ route('web.about') }}" class="nav-link">About Us</a></li> --}}
                         {{-- @foreach($pages as $page)
                         <li class="nav-item single_nav menu-item">
                             <a class="nav-link" href="{{ $page->uri }}">{{ $page->name }}</a>
                         </li>
                        @endforeach --}}
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
                         <li class="nav-item single_nav menu-item"><a href="{{ route('web.verify') }}" class="nav-link">Certificate</a></li>
                     </ul>
                     </div>
                 </nav>
             </div>
         </div>
         </header>