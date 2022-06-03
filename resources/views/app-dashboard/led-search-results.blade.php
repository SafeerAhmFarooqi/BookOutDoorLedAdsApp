@extends('layouts.get-theme')
@section('content')
<div class="site-wrap">
    
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar container py-0 bg-white" role="banner">

        <!-- <div class="container"> -->
          <div class="row align-items-center">
            
            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Classy<span class="text-primary">Ads</span>  </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
  
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="/">Home</a></li>
                  <li class="active"><a href="listings.html">Ads</a></li>
                  <li class="has-children">
                    <a href="about.html">About</a>
                    <ul class="dropdown">
                      <li><a href="#">The Company</a></li>
                      <li><a href="#">The Leadership</a></li>
                      <li><a href="#">Philosophy</a></li>
                      <li><a href="#">Careers</a></li>
                    </ul>
                  </li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact</a></li>
  
                  <li class="ml-xl-3 login"><a href="login.html"><span class="border-left pl-xl-4"></span>Log In</a></li>
                  <li><a href="register.html">Register</a></li>
  
                  <li><a href="#" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
                </ul>
              </nav>
            </div>
  
  
            <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
              <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>
  
          </div>
        <!-- </div> -->
        
      </header>

      <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{asset('assets/Led-Theme/images/hero_1.jpg')}}')"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
  
            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
              
              
              <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                  
                </div>
              </div>
  
              
            </div>
          </div>
        </div>
      </div>  
    <div class="site-section">
        <livewire:led-search-results :find="$find" :location="$location" />
    </div>

    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="footer-heading mb-4">About</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
                </div>
                
                <div class="col-md-3">
                  <h2 class="footer-heading mb-4">Navigations</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h2 class="footer-heading mb-4">Follow Us</h2>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
  </div>
@endsection

@section('Styles')

<link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/Led-Theme/fonts/icomoon/style.css')}}">

    
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/ion.rangeSlider.min.css')}}"/>
<!------ Include the above in your HEAD tag ---------->
@livewireStyles
@endsection

@section('pageScripts')
<script src="{{asset('assets/Bootstrap-4-1/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/popper.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/Led-Theme/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/Led-Theme/js/aos.js')}}"></script>
@livewireScripts
@endsection