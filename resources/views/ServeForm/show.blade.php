@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
				



		<div class="col">
			<h6 class="mb-0 text-uppercase">SURVEY FORM</h6>
			<hr/>
			<div class="card">
				<div class="card-body">
					<ul class="nav nav-tabs nav-primary" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
								<div class="d-flex align-items-center">
									<div class="tab-icon"><i class='bx bx-file font-18 me-1'></i>
									</div>
									<div class="tab-title">New Survey</div>
								</div>
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
								<div class="d-flex align-items-center">
									<div class="tab-icon"><i class='bx bx-file font-18 me-1'></i>
									</div>
									<div class="tab-title">Existing Survey</div>
								</div>
							</a>
						</li>
						{{-- <li class="nav-item" role="presentation">
							<a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
								<div class="d-flex align-items-center">
									<div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
									</div>
									<div class="tab-title">Contact</div>
								</div>
							</a>
						</li> --}}
					</ul>
					<div class="tab-content py-3">
						<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
							{{-- <div class="col-md-12 mx-auto"> --}}
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered">
												<thead>
													<tr>	
														<th>Sr. No.</th>
														<th>Serve Application Number</th>
														<th>Name of Establishment</th>
														<th>Address</th>
														{{-- <th>Ward/Prabhag Name/No</th>
														<th>Pin Code</th>
														<th>Whatsapp No</th>
														<th>Email ID</th>
														<th>GST No</th> --}}
														{{-- <th>Year of Starting of Business</th> --}}
														{{-- <th>Nature of Business</th> --}}
														{{-- <th>Number of Employees Working as on date</th>
														<th>Area of Business in square Feet</th> --}}
														
														<th style="background-color: #fff">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach($serve_all as $serve_all)
													<tr>
														<td>{{ $loop->index+1 }}</td>
														<td>{{$serve_all->survey_app_no  }}</td>
														<td
														data-bs-toggle="tooltip" data-bs-placement="top" title=
														"
														 BUssiness Owner :- {{$serve_all->bussiness_owner}} 
														Contact_Person :- {{$serve_all->contact_person}}
														Street_Name :- {{$serve_all->street_name}}
														Shop_ House_ NO :- {{$serve_all->shop_house_no}}
														Building Name :- {{$serve_all->bulding}}			
														" 
														
														>{{$serve_all->establishment  }}</td>
													
													
														<td data-bs-toggle="tooltip" data-bs-placement="top" title=
														" Locality :- {{$serve_all->locality  }}	
														Prabhag Name:-  {{$serve_all->prabhag_name  }}	
														Pincode:- {{$serve_all->pincode  }}	
														What's App No:- {{$serve_all->wht_app_no  }}
														Email:- {{$serve_all->email  }}	
														GST No:- {{$serve_all->gst_no  }}
														Year:- {{$serve_all->year  }}	
														No Of Employee Working:- {{$serve_all->no_of_employee_working  }}	
														Area Of Bussiness:-	{{$serve_all->area_of_bussiness  }}	"> {{$serve_all->locality  }}
														</td>
														<td style="background-color: #fff">
				
															<a href="{{ route('print',$serve_all->id)}}"><button type="button" class="btn1 btn-outline-primary" ><i class="lni lni-printer"></i></button> </a>
				
															<a href="{{ route('newserveedit',$serve_all->id) }}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
															<a href="{{ route('newservedelete',$serve_all->id)}}"><button type="button" class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0'></i></button> </a>
														</td>										
											
													</tr>
													@endforeach
				
											
												</tbody>
											</table>
										</div>
									</div>
								</div>
							{{-- </div> --}}
						</div>
						<div class="tab-pane fade" id="primaryprofile" role="tabpanel">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="example1" class="table table-striped table-bordered">
											<thead>
												<tr>	
													<th>Sr. No.</th>
													<th>Serve Application Number</th>
													<th>Name of Establishment</th>
													<th>Address</th>
													{{-- <th>Ward/Prabhag Name/No</th>
													<th>Pin Code</th>
													<th>Whatsapp No</th>
													<th>Email ID</th>
													<th>GST No</th> --}}
													{{-- <th>Year of Starting of Business</th> --}}
													{{-- <th>Nature of Business</th> --}}
													{{-- <th>Number of Employees Working as on date</th>
													<th>Area of Business in square Feet</th> --}}
													
													<th style="background-color: #fff">Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data1 as $data1)
												<tr>
													<td>{{ $loop->index+1 }}</td>
													<td>{{$data1->survey_app_no  }}</td>
													<td
													data-bs-toggle="tooltip" data-bs-placement="top" title=
													"
													 BUssiness Owner :- {{$data1->bussiness_owner}} 
													Contact_Person :- {{$data1->contact_person}}
													Street_Name :- {{$data1->street_name}}
													Shop_ House_ NO :- {{$data1->shop_house_no}}
													Building Name :- {{$data1->bulding}}			
													" 
													
													>{{$data1->establishment  }}</td>
												
												
													<td data-bs-toggle="tooltip" data-bs-placement="top" title=
													" Locality :- {{$data1->locality  }}	
													Prabhag Name:-  {{$data1->prabhag_name  }}	
													Pincode:- {{$data1->pincode  }}	
													What's App No:- {{$data1->wht_app_no  }}
													Email:- {{$data1->email  }}	
													GST No:- {{$data1->gst_no  }}
													Year:- {{$data1->year  }}	
													No Of Employee Working:- {{$data1->no_of_employee_working  }}	
													Area Of Bussiness:-	{{$data1->area_of_bussiness  }}	"> {{$data1->locality  }}
													</td>
													<td style="background-color: #fff">
			
														<a href="{{ route('print',$data1->id)}}"><button type="button" class="btn1 btn-outline-primary" ><i class="lni lni-printer"></i></button> </a>
			
														<a href="{{ route('edit_existing',$data1->id) }}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
														<a href="{{ route('delete_existing',$data1->id)}}"><button type="button" class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0'></i></button> </a>
													</td>										
										
												</tr>
												@endforeach
			
										
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="tab-pane fade" id="primarycontact" role="tabpanel">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
						</div> --}}
					</div>
				</div>
			</div>
		</div>




		@stop		
				
			
				
				
				
	