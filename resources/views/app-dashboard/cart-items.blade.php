@extends('layouts.get-theme')
@section('content')


<form action="{{route('led.place.order')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="row">
            @include('common.validation')
        </div>
    </div>
    <div class="card">
        
        <div class="row">
            
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Einkaufswagen</b></h4></div>
                        <div class="col align-self-center text-right text-muted">{{count($cartItems)}} Produkte  {{count($cartItems)>1?'s' : ''}}</div>
                    </div>
                </div>
                @if (count($cartItems)>0)
                @foreach ($cartItems as $item)
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="{{asset('storage/'.(($item->images->first())->path??''))}}"></div>
                        <div class="col">
                            <div class="row text-muted">{{$item->title}}</div>
                            <div class="row">{{substr(strip_tags($item->description),0,20)}}...</div>
                        </div>
                        {{-- <div class="col">
                            <div class="row text-muted">Tax</div>
                            <div class="row">    {{$item->tax}}%</div>
                        </div> --}}
                        <div class="col">
                            <div class="row text-muted">aus : {{\Carbon\Carbon::parse($item->startDate)->translatedFormat('F d, Y') }}</div>
                            <div class="row text-muted">zu : {{\Carbon\Carbon::parse($item->endDate)->translatedFormat('F d, Y')}}</div>
                        </div>
                        <div class="col">
                            <div class="row"> {{$item->noOfDays}} Tag(e)</div>
                        </div>
                        
                        
                            <div class="col">
                                <form action="{{route('cart.list.led.delete')}}" method="post">
                                    @csrf        
                                
                                 {{$item->price}} &euro; / Tag <button type="submit" name="led_id" value="{{$item->id}}" class="close">&#10005;</button>
                            </form>
                            </div>
                            
                        
                    </div>
                  <input type="file" name="images[{{$loop->iteration}}][]" multiple>
                  <textarea name="description[{{$loop->iteration}}][]" id="" cols="30" rows="10"></textarea>
                </div>    
                @endforeach   
                @else
                        {{header("refresh: 0; /");}}
                @endif    
                
    
               
             
                <div class="back-to-shop"><a href="/">&leftarrow;<span style="margin-left: 2%;" class="text-muted">Zurück zum Shop
    </span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Zusammenfassung</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Produkte {{count($cartItems)}}</div>
                </div>
                {{-- <form>
                    <p>SHIPPING</p>
                    <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                    <p>GIVE CODE</p>
                    <input id="code" placeholder="Enter your code">
                </form> --}}
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col"> PREIS</div>
                    <div class="col text-right">{{$price}} &euro;</div>
                </div>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">Steuer</div>
                    <div class="col text-right">{{$totalTax}} &euro;</div>
                </div>
             
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col"> GESAMTPREIS </div>
                    <div class="col text-right">{{$totalPrice}} &euro;</div>
                </div>
                {{-- <a href="{{route('led.checkout')}}" class="btn">Zahlen Sie jetzt</a> --}}
                <button class="btn" type="submit">{{__('Submit')}}</button>
            </div>
        </div>
        
    </div>
            
</form>

@endsection

@section('Styles')
<link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}">

<style>
    body{
    background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold;
}
.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
form{
    margin: auto;
    max-width: 950px;
    width: 90%;
   
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}
</style>
@endsection

@section('pageScripts')
<script src="{{asset('assets/Bootstrap-4-1/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/popper.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/bootstrap.min.js')}}"></script>
@endsection