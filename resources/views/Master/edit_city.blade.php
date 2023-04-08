@extends('layout')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-6 mx-auto" >
					
				<div class="card">
					@include('alert')
					<div class="card-body">
						<div class="card-title d-flex align-items-center">

							<h6>City Master</h6>
						</div>
						<hr>
						<form class="row g-2" method="post" action="{{ route('cityupdate') }}">
							@csrf
                            <input type="hidden" name="id" value="{{$edit_data->id}}">	

							<div class="col-md-3"></div>
							<div class="col-md-4">
								<label>City Name</label>
								<input class="form-control mb-3" type="text" placeholder="City" name="city" value="{{ $edit_data->city }}">
								
							</div>
							<div class="col-md-4" style="margin-top:30px;">
								<div class="col">
									<button type="submit" class="btn btn-primary px-5"> <i class="lni lni-circle-plus"></i>Add</button>
								</div>
							</div>



						</form>

					</div>

				</div>
					</div>
				</div>


                <div class="overlay toggle-icon"></div>
				<hr/>
				<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>	
										<th>Sr. No.</th>
										<th>City Name</th>  
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($city_all as $city_all)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $city_all->city }}</td>	
										<td>
											<a href="{{ route('cityedit',$city_all->id) }}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button> </a>
											<a href="{{ route('citydelete',$city_all->id) }}"><button type="button" class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0'></i></button> </a>
										</td>											
							
									</tr>
									@endforeach
									
							
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>			
@stop
							
				
				<!--end page wrapper -->
				<!--start overlay-->
				
				
				
				
		