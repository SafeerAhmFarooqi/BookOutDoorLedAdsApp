<div class="container">
    <div class="container">
      @include('common.validation')
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Fügen Sie eine neue LED hinzu </h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST" action="{{route('client.led.store')}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Led Typ</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Location of Led"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="ledtype" id="ledtype" aria-label="Select Led Type"  data-placeholder="Select Led Type..." class="form-select form-select-solid form-select-lg fw-bold">
                                    <option  value="1" {{old('ledtype')==1?'selected' : ''}}>Singlemedia</option>
                                    <option  value="2" {{old('ledtype')==2?'selected' : ''}}>Multimedia</option>                                        
                                </select>
                                @error('ledtype')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6" id="multimediaquantitydropdown">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Buchung pro Tag</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="multimediaquantity" class="form-control form-control-lg form-control-solid" placeholder="Wie viel Zeit buchen Sie das?" value="{{old('multimediaquantity')}}" />
                                @error('multimediaquantity')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6" id="multimediaquantitydropdown">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Buchungsdauer</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="bookingduration"  aria-label="Select Booking Duration"  data-placeholder="Select Booking Duration..." class="form-select form-select-solid form-select-lg fw-bold">    
                                       @foreach ($bookingDurations as $key => $value)
                                       <option  value="{{$key}}">{{$value}}</option>       
                                       @endforeach                                     
                                </select>
                                @error('bookingduration')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Titel</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="Title" value="{{old('title')}}" />
                                @error('title')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                           
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Beschreibung</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                {{-- <input type="text"  class="form-control form-control-lg form-control-solid"   /> --}}
                                <textarea id="kt_docs_tinymce_basic" class="form-control form-control-lg form-control-solid" name="description" value="{{old('description')}}" placeholder="Description">{{old('description')}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <livewire:city-country  />
                       
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Ort</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="location" class="form-control form-control-lg form-control-solid" placeholder="Ort" value="{{old('location')}}" id="myAddress"/>
                                @error('location')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>


                   

               

                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                           
                            <!--end::Label-->
                            <!--begin::Select-->
                           
                            <!--end::Select-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Preis Pro Tag</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="price" class="form-control form-control-lg form-control-solid" placeholder="Preis" value="{{old('price')}}" />
                                @error('price')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>
                    

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Geschätzte Aufrufe</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="estviews" class="form-control form-control-lg form-control-solid" placeholder="Geschätzte Aufrufe" value="{{old('estviews')}}" />
                                @error('estviews')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Geführte Bilder</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="file" name="images[]" class="form-control form-control-lg form-control-solid" multiple/> 
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                    @if (str_contains($error, 'Image'))
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                    @endif   
                                    @endforeach
                                @endif
                            </div>
                            <!--end::Col-->
                        </div>
                       
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="{{route('dashboard')}}" class="btn btn-light btn-active-light-primary me-2">Der Rücken
</a>
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Verwerfen
</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Änderungen speichern</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
@section('pageScripts')
<script src="{{asset('assets/Metronic-Theme/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'myAddress';
    
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
<script>
//     var options = {selector: "#kt_docs_tinymce_basic",
//   menubar: false,
//   statusbar: false,
//   toolbar: false,
//   readonly: 1,
//                     };
var options = {selector: "#kt_docs_tinymce_basic",
statusbar: false,
                    };

if (KTApp.isDarkMode()) {
    options["skin"] = "oxide-dark";
    options["content_css"] = "dark";
}

tinymce.init(options);
</script>

<script>
    $(document).ready(function(){
        checkLedType();
        function checkLedType()
        {
            if ("{{old('ledtype')}}"==1) {
                $("#ledtype").val(1);
            }
            if ("{{old('ledtype')}}"==2) {
                $("#ledtype").val(2);
            }
            if ($("#ledtype").val()==1) {
                $("#multimediaquantitydropdown").hide();
            } 
            if($("#ledtype").val()==2) {
                $("#multimediaquantitydropdown").show();
            }
        }
        function checkLedType2()
        {
            if ($("#ledtype").val()==1) {
                $("#multimediaquantitydropdown").hide();
            } 
            if($("#ledtype").val()==2) {
                $("#multimediaquantitydropdown").show();
            }
        }
        $("#ledtype").change(function(){
            checkLedType2();
});
    });
    </script>
@endsection