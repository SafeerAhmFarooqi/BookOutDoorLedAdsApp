
@extends('layouts.led-theme')

@section('content')

 
    <section id="login">
        <div class="container-fluid w3-padding-48-top">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                    <h2 class="cp-heading">LOG IN</h2>
                    <p class="log-info-text">Administrator haben Zugriff auf alle Erfahrungen</p>
                         

                    <div class="row w3-padding-36-top">
                        <div class="col-md-12">
                            <div class="row">
                                 
                                 @include('common.validation')
                                <form id="kt_sign_in_form"  method="POST" action="{{ route('login') }}">
                                    @csrf

                                  
                                    <div class="col-sm-12 form-group">
                                        <label>Email</label> 
                                        <input class="cp-input-form" id="name"   placeholder=""  type="text" type="text" name="email"  value="{{old('email')}}" >
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label>Password</label> 
                                        <input class="cp-input-form" id="name"type="password" name="password" >
                                    </div>
                                
                            </div>
                            <div class="w3-padding-36-top w3-center">
                             <button type="submit" id="kt_sign_in_submit" class="cp-login-btn w3-ripple btn btn-lg btn-primary w-100 mb-5">
                            <span class="indicator-label">Log in</span> 
                        </button>
                        
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                  <img src="{{asset('assets/newtheme2023/images/loginledimage.jpg')}}" class="cp-img w3-hide-small w3-hide-medium w3-right w3-padding-right">
                </div>
            </div>
        </div>
    </section> 



@endsection  

@section('pageScripts')
<script src="{{ asset('assets/Metronic-Theme/js/custom/authentication/sign-in/general.js') }}"></script>
@endsection