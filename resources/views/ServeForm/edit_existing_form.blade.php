@extends('layout')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 mx-auto">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center">

                                <h6>EXISTING SURVEY FORM</h6>
                            </div>
                            <hr>
                            <form class="row g-2" method="post" action="{{ route('update_existing') }}">
                                @csrf

                                <div class="col-md-4">
                                    <label class="form-label">Survey Application No.</label>
                                    <input class="form-control " type="text" placeholder="Survey Application No."
                                        aria-label="default input example" name="survey_app_no" id="serve" value="{{ $edit_data->survey_app_no}}">

                                </div>
                                {{-- @json($edit_data->photo)
                                exit(); --}}
                                <div class="col-md-2" style="margin-top:6vh;">
                                    <div class="col">

                                        <button type="button" id="search_button" class="btn btn-primary px-5"
                                            style=" height: 40px;"> <i class='bx bx-search'
                                                style="font-size: 110%; "></i></button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {{-- <img src="" value="" class="logo-icon" alt="logo icon"
                                        style="height:100px; width: 200px;" id="photo">
                                    <input type="hidden" name="photo" id="photo2"> --}}
                                    <img src="{{ asset('images/serve_photo/' . $edit_data->photo) }}"
                                            style="height:100px;width:auto;" alt="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Name of Establishment</label>
                                    <input class="form-control  from-text" type="text"
                                        placeholder="Name of Establishment" aria-label="default input example"
                                        name="establishment" id="establishment" value="{{ $edit_data->establishment}}">

                                </div>


                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control  to-text" type="text" placeholder="स्थापनेचे नाव"
                                        aria-label="default input example" style="margin-top:8px;" name="establishment1" value="{{ $edit_data->establishment1}}">

                                </div>



                                <div class="col-md-6">
                                    <label class="form-label">Name of Business Owner</label>
                                    <input class="form-control from-text " type="text"
                                        placeholder="Name of Business Owner" aria-label="default input example"
                                        name="bussiness_owner" value="{{ $edit_data->bussiness_owner }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text " type="text" placeholder="व्यवसाय मालकाचे नाव"
                                        aria-label="default input example" style="margin-top:8px;" name="bussiness_owner1"
                                        value="{{ $edit_data->bussiness_owner1 }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Name of Contact Person</label>
                                    <input class="form-control from-text" type="text" placeholder="Name of Corporation"
                                        aria-label="default input example" name="contact_person"
                                        value="{{ $edit_data->contact_person }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text " type="text" placeholder="संपर्क व्यक्तीचे नाव"
                                        aria-label="default input example" style="margin-top:8px;" name="contact_person1"
                                        value="{{ $edit_data->contact_person1 }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label">Shop/House No</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Shop/House No"
                                        aria-label="default input example" name="shop_house_no"
                                        value="{{ $edit_data->shop_house_no }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="दुकान घर क्र."
                                        aria-label="default input example" style="margin-top:8px;" name="shop_house_no1"
                                        value="{{ $edit_data->shop_house_no1 }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Name of Building</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Building Name"
                                        aria-label="default input example" name="bulding"
                                        value="{{ $edit_data->bulding }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="इमारतीचे नाव"
                                        aria-label="default input example" style="margin-top:8px;" name="bulding1"
                                        value="{{ $edit_data->bulding1 }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Lane/Street Name</label>
                                    <input class="form-control  from-text mb-3" type="text"
                                        placeholder="Lane/Street Name" aria-label="default input example"
                                        name="street_name" value="{{ $edit_data->street_name }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text  mb-3" type="text"
                                        placeholder="लेन रस्त्याचे नाव" aria-label="default input example"
                                        style="margin-top:8px;" name="street_name1"
                                        value="{{ $edit_data->street_name1 }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Locality</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Locality"
                                        aria-label="default input example" name="locality"
                                        value="{{ $edit_data->locality }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="परिसर"
                                        aria-label="default input example" style="margin-top:8px;" name="locality1"
                                        value="{{ $edit_data->locality1 }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Prabhag Name</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Prabhag Name"
                                        aria-label="default input example" name="prabhag_name"
                                        value="{{ $edit_data->prabhag_name }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="प्रभाग नाव"
                                        aria-label="default input example" style="margin-top:8px;" name="prabhag_name1"
                                        value="{{ $edit_data->prabhag_name1 }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Zone No.</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Zone No."
                                        aria-label="default input example" name="zone_no"
                                        value="{{ $edit_data->zone_no }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="झोन क्र."
                                        aria-label="default input example" style="margin-top:8px;" name="zone_no1"
                                        value="{{ $edit_data->zone_no1 }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Pin Code</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Pin Code"
                                        aria-label="default input example" name="pincode"
                                        value="{{ $edit_data->pincode }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="पिन कोड"
                                        aria-label="default input example" style="margin-top:8px;" name="pincode1"
                                        value="{{ $edit_data->pincode1 }}">
                                </div>



                                <div class="col-md-6">
                                    <label class="form-label">Email ID</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="Email ID"
                                        aria-label="default input example" name="email"
                                        value="{{ $edit_data->email }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control  to-text mb-3" type="text" placeholder="ईमेल आयडी"
                                        aria-label="default input example" style="margin-top:8px;" name="email1"
                                        value="{{ $edit_data->email1 }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Whatsapp No</label>
                                    <input class="form-control  from-text mb-3" type="text" placeholder="Whatsapp No."
                                        aria-label="default input example" name="wht_app_no"
                                        value="{{ $edit_data->wht_app_no }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="व्हॉट्सअॅप नंबर"
                                        aria-label="default input example" style="margin-top:8px;" name="wht_app_no1"
                                        value="{{ $edit_data->wht_app_no1 }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">GST No</label>
                                    <input class="form-control from-text mb-3" type="text" placeholder="GST"
                                        aria-label="default input example" name="gst_no"
                                        value="{{ $edit_data->gst_no }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text" placeholder="जीएसटी नंबर"
                                        aria-label="default input example" style="margin-top:8px;" name="gst_no1"
                                        value="{{ $edit_data->gst_no1 }}">
                                </div>


                                {{-- <div class="col-md-6">
								<label class="form-label">Nature of Business</label>								
								<input class="form-control from-text mb-3" type="text" placeholder="Nature of Business"
									aria-label="default input example"  name="nature_of_bussiness" value="{{ $edit_data->nature_of_bussiness}}">
							</div>
							<div class="col-md-6">
								<label class="form-label"></label>								
								<input class="form-control  to-text mb-3" type="text" placeholder="व्यवसायाचे स्वरूप"
									aria-label="default input example" style="margin-top:8px;" name="nature_of_bussiness1" value="{{ $edit_data->nature_of_bussiness1}}">
							</div> --}}
                                {{-- <div class="col-md-6">
								<label class="form-label">Type of Business</label>		
								<select class="form-select from-text mb-3" aria-label="Default select example" name="type_of_bussiness_id">
									<option selected>Select</option>
									@foreach ($ty_bussiness as $ty_bussiness)
									<option value="{{ $ty_bussiness->id }}">{{$ty_bussiness->bussiness_type }}

									</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-6">
								<label class="form-label">Type of Business</label>	
								<input class="form-control to-text mb-3" type="text" placeholder="व्यवसायाचे प्रकार "
									aria-label="default input example" style="margin-top:8px;" name="">	
								
							</div>
							
							<div class="col-md-6">
								<label class="form-label">Type of License</label>		
								<select class="form-select from-tex mb-3" aria-label="Default select example" name="type_of_licence_id">
									<option selected>Select</option>
									@foreach ($ty_licence as $ty_licence)
									<option value="{{ $ty_licence->id }}">{{$ty_licence->type_of_licence }}
									</option>
									@endforeach
							    </select>
							</div>
							<div class="col-md-6">
								<label class="form-label">Type of License</label>		
								<select class="form-select to-text mb-3" aria-label="Default select example" name="type_of_licence_id1">
									@foreach ($ty_licence as $ty_licence)
									<option value="{{ $ty_licence->id }}">{{$ty_licence->type_of_licence }}
									</option>
									@endforeach
							    </select>
							</div> --}}

                                <div class="col-md-6">
                                    <label class="form-label">Type of Business</label>
                                    <select class="form-select from-text mb-3" aria-label="Default select example"
                                        name="type_of_bussiness_id" id="bussiness">
                                        <option value="">Select</option>
                                        @foreach ($ty_bussiness as $ty_bussiness)
                                            <option value="{{ $ty_bussiness->id }}"
                                                @if ($edit_data->type_of_bussiness_id == $ty_bussiness->id) selected @endif>
                                                {{ $ty_bussiness->bussiness_type }}
                                            </option>
                                        @endforeach
                                        <option value="Hotel" @if ($edit_data->type_of_bussiness_id == 'Hotel') selected @endif>Hotel
                                        </option>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Type of Business</label>
                                    <input class="form-control to-text mb-3" type="text"
                                        placeholder="व्यवसायाचे प्रकार " aria-label="default input example"
                                        style="margin-top:8px;" name="type_of_bussiness_id1" id="bussinesss"
                                        value="{{ $edit_data->type_of_bussiness_id1 }}">

                                </div>

                                <div class="row" id="other_hotel">

                                    <div class="col-md-3">
                                        <label class="form-label">No Of Ac Room</label>
                                        <input class="form-control from-text mb-3" type="text"
                                            placeholder="No Of Ac Room" aria-label="default input example"
                                            style="margin-top:8px;" name="ac_room" id="other6"
                                            value="{{ $edit_data->ac_room }}">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">No Of Ac Room</label>
                                        <input class="form-control to-text mb-3" type="text"
                                            placeholder="एसी रूमची संख्या " aria-label="default input example"
                                            style="margin-top:8px;" name="ac_room1" id="other16"
                                            value="{{ $edit_data->ac_room1 }}">

                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">No Of Non Ac Room</label>
                                        <input class="form-control from-text mb-3" type="text"
                                            placeholder="No Of Non Ac Room " aria-label="default input example"
                                            style="margin-top:8px;" name="non_ac_room" id="other36"
                                            value="{{ $edit_data->non_ac_room }}">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="form-label">No Of Non Ac Room</label>
                                        <input class="form-control to-text mb-3" type="text"
                                            placeholder="नॉन एसी रूमची संख्या " aria-label="default input example"
                                            style="margin-top:8px;" name="non_ac_room1" id="other366"
                                            value="{{ $edit_data->non_ac_room1 }}">
                                    </div>
                                    {{-- <div class="col-md-3">
									<label class="form-label">No Of Non Ac Room</label>
									<input class="form-control to-text mb-3" type="text" placeholder="नॉन एसी रूमची संख्या "
										aria-label="default input example" style="margin-top:8px;" name="non_ac_room1"
										id="other46">

								</div> --}}
                                </div>
                                {{-- @json($ty_licence) --}}

                                <div class="col-md-6">
                                    <label class="form-label">Type of License</label>
                                    <select class="form-select from-text mb-3" aria-label="Default select example"
                                        name="type_of_licence_id" id="licence_id">
                                        <option value="">Select</option>
                                        @foreach ($ty_licence as $ty_licence)
                                            <option value="{{ $ty_licence->id }}"
                                                @if ($edit_data->type_of_licence_id == $ty_licence->id) selected @endif>
                                                {{ $ty_licence->bussiness_reg_type }}
                                            </option>
                                        @endforeach
                                        <option value="Other">Other</option>

                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label">Type of License</label>
                                    <input class="form-control to-text mb-3 " type="text"
                                        placeholder="लायसन्सचा प्रकार " aria-label="default input example"
                                        style="margin-top:8px;" name="type_of_licence_id1" id="licencess_id"
                                        value="{{ $edit_data->type_of_licence_id1 }}">

                                </div>


                                <div class="row" id="other_div">

                                    <div class="col-md-6">
                                        <label class="form-label">License Name</label>
                                        <input class="form-control from-text mb-3" type="text"
                                            placeholder="License Name " aria-label="default input example"
                                            style="margin-top:8px;" name="licence_name" id="other"
                                            value="{{ $edit_data->licence_name }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">License Name</label>
                                        <input class="form-control to-text mb-3" type="text"
                                            placeholder="लायसन्सचे नाव " aria-label="default input example"
                                            style="margin-top:8px;" name="licence_name1" id="other1"
                                            value="{{ $edit_data->licence_name1 }}">

                                    </div>
                                    {{-- </div>

							<div class="row" id="other_div"> --}}

                                    <div class="col-md-6">
                                        <label class="form-label">License No</label>
                                        <input class="form-control from-text mb-3" type="text"
                                            placeholder="License No " aria-label="default input example"
                                            style="margin-top:8px;" name="licence_no" id="other3"
                                            value="{{ $edit_data->licence_no }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">License No</label>
                                        <input class="form-control to-text mb-3" type="text"
                                            placeholder="लायसन्सचे क्रमांक " aria-label="default input example"
                                            style="margin-top:8px;" name="licence_no1" id="other4"
                                            value="{{ $edit_data->licence_no1 }}">

                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <label class="form-label">Number of Employees Working as on date </label>
                                    <input class="form-control from-text mb-3" type="text"
                                        placeholder="Number of Employees Working as on date"
                                        aria-label="default input example" name="no_of_employee_working"
                                        value="{{ $edit_data->no_of_employee_working }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text"
                                        placeholder="आजपर्यंत काम करणाऱ्या कर्मचाऱ्यांची संख्या"
                                        aria-label="default input example" style="margin-top:8px;"
                                        name="no_of_employee_working1" value="{{ $edit_data->no_of_employee_working1 }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label">Area of Business in square Feet</label>
                                    <input class="form-control from-text mb-3" type="text"
                                        placeholder="Area of Business in square Feet" aria-label="default input example"
                                        name="area_of_bussiness" value="{{ $edit_data->area_of_bussiness }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"></label>
                                    <input class="form-control to-text mb-3" type="text"
                                        placeholder="व्यवसायाचे क्षेत्रफळ चौरस फुटात" aria-label="default input example"
                                        style="margin-top:8px;" name="area_of_bussiness1"
                                        value="{{ $edit_data->area_of_bussiness1 }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Year of Starting of
                                        Business</label>
                                    <input class="form-control mb-3" type="text"
                                        placeholder="Year of starting of Business" aria-label="default input example"
                                        name="year" value="{{ $edit_data->year }}">
                                </div>



                                <div class="col-md-12" style="text-align: center;">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary px-5"> <i
                                                class="lni lni-circle-plus"></i>Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @section('js');

        <script>
            const fromText = $(".from-text").val();
            //const toText = $(".to-text");

            $(document).on("keyup", ".from-text", function() {
                console.clear();
                console.log($(this).parent().next().find('.to-text'));
                let text = $(this).val(),
                    translateFrom = 'en-GB',
                    translateTo = 'mr-IN';
                console.log(text);
                if (!text)
                    return;
                $(this).parent().next().find('.to-text').attr("placeholder", "Translating...");
                let apiUrl =
                    `https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`;
                fetch(apiUrl).then(res => res.json()).then(data => {
                    $(this).parent().next().find('.to-text').val(data.responseData.translatedText);
                    data.matches.forEach(data => {
                        if (data.id === 0) {
                            $(this).parent().next().find('.to-text').val(data.translation);
                        }
                    });
                    $(this).parent().next().find('.to-text').attr("placeholder", "Translation");
                });
            });
        </script>


        <script>
            $(document).ready(function() {
                // alert(1);
                $("#bussiness").on('change', function() {
                    var bussiness = $("#bussiness").val()
                    // var medicine=$("#medicine").val()
                    // if(serve==''){
                    // }
                    $.ajax({
                        url: "{{ route('get_busness') }}",
                        type: 'get',
                        data: {

                            serve: $(this).val(),

                        },
                        cache: false,
                        success: function(result) {
                            console.log(result);
                            $("#bussinesss").val(result.bussiness_type1);
                            //$("#bussiness").keyup();

                            // $("#photo").val(result.photo);
                        }
                    });
                })
            })
        </script>
        <script>
            $(document).ready(function() {
                // alert(1);
                $("#licence_id").on('change', function() {
                    var bussiness = $("#licence_id").val()
                    // var medicine=$("#medicine").val()
                    // if(serve==''){
                    // }
                    $.ajax({
                        url: "{{ route('get_licence_id') }}",
                        type: 'get',
                        data: {

                            serve: $(this).val(),

                        },
                        cache: false,
                        success: function(result) {
                            console.log(result);
                            $("#licencess_id").val(result.bussiness_reg_type1);
                            // $("#photo").val(result.photo);
                        }
                    });
                })
            })
        </script>
        <script>
            $("#other_div").hide();

            $(document).on('change', '#licence_id', function() {
                if ($(this).val() == 'Other') {
                    //$("#select_service").hide();
                    $("#other_div").show();
                } else {
                    //if ($(this).val() == 'service') {
                    //$("#select_service").show();
                    $("#other_div").hide();
                }

            })
        </script>

        <script>
            $("#other_hotel").hide();

            $(document).on('change', '#bussiness', function() {
                if ($(this).val() == 'Hotel') {
                    //$("#select_service").hide();
                    $("#other_hotel").show();
                } else {
                    //if ($(this).val() == 'service') {
                    //$("#select_service").show();
                    $("#other_hotel").hide();
                }

            })
        </script>


    @stop
