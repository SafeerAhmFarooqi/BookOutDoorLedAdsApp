@extends('layouts.led-theme')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url({{asset('assets/Led-Theme/images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">
          
          
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              @include('led-theme.top-message')
              <p data-aos="fade-up" data-aos-delay="100">{{ __('Admin Approval Pending') }}</p>
              
            </div>
          </div>

          
        </div>
      </div>
    </div>
  </div>  

  
  
  <div class="site-section" data-aos="fade">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Bestätigung ausstehend</h2>
          <p class="color-black-opacity-5">{{ __('Sie sind vom Administrator nicht berechtigt, sich anzumelden, auf Genehmigung per E-Mail zu warten oder die Verwaltung zu kontaktieren') }}</p>
        </div>
      </div>
      <div class="row justify-content-center mb-1">

      </div>

      <div class="row justify-content-center mb-5">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary">{{ __('Log Out') }}</button>
          </form>
      </div>
    </div>
  </div>   
@endsection

@section('Styles')
    @parent

    
<style>
    /*
    # Welcome
    --------------------------------*/
    
    .symbol.symbol-50px>img{width:50px;height:50px}
    .symbol-label{display:flex;align-items:center;justify-content:center;font-weight:500;color:#3f4254;background-color:#f5f8fa;background-repeat:no-repeat;background-position:center center;background-size:cover;border-radius:.475rem}

    .home-page-welcome {
        position: relative;
        padding: 96px 0;
        background: url("assets/Led-Theme/images/slide1.jpg") no-repeat center;
        background-size: cover;
        z-index: 99;
    }
    
    .home-page-welcome::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        background: rgba(21,21,21,.9);
    }
    
    .welcome-content .entry-title {
        position: relative;
        padding-bottom: 24px;
        font-size: 36px;
        font-weight: 600;
        color: #fff;
    }
    
    .welcome-content .entry-title::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 64px;
        height: 4px;
        border-radius: 2px;
        background: #2c35da;
    }
    
    .welcome-content .entry-content {
        font-size: 14px;
        line-height: 2;
        color: #b7b7b7;
    }
    
    .home-page-welcome img {
        display: block;
        width: 100%;
    }
    
    @media screen and (max-width: 992px){
        .home-page-welcome img {
            margin-bottom: 60px;
        }
    }
    
    /*
    
    /*
    # Home Milestone
    --------------------------------*/
    .home-page-limestone {
        padding: 96px 0;
    }
    
    .home-page-limestone .section-heading .entry-title {
        padding-bottom: 36px;
        line-height: 1.6;
    }
    
    .home-page-limestone .section-heading p {
        font-size: 14px;
        color: #595858;
    }
    .site-footer::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 101%;
        background: rgba(22,22,22,.92);
    }
    .footeruiclass li a
    {
      color: #fff;
      font-size: 15px;
    }
    .footeruiclass
    {
        padding-top: 15px;
    }
    </style>
@endsection


@section('modals')
<div class="modal" id="showLedCalanderModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="showLedCalander">
          <!--<input type="text" name="daterange" id="demoDate" class="demo">-->
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('pageScripts')


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'googleLocation';
    
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode']
               
            });
        
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
            });
        });
</script>
@endsection