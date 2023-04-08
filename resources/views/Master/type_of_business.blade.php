@extends('layout')
@section('content')



		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-md-8 mx-auto" >
					
				<div class="card">
					@include('alert')
					<div class="card-body">
						<div class="card-title d-flex align-items-center">

							<h6>Type of Bussiness</h6>
						</div>
						<hr>
						<form class="row g-2" method="post" action="{{ route("typeofbussinessinsert") }}">
							@csrf

					
							<div class="col-md-4">
								<label>Type of bussiness</label>
								<input class="form-control from-text mb-3" type="text" name="bussiness_type"placeholder="Business Type">
							</div>


							<div class="col-md-4">
								<label>Type of bussiness</label>
								<input class="form-control to-text mb-3" type="text" name="bussiness_type1" placeholder="व्यवसायाचे प्रकार">
							</div>

							
								<div class="col-md-4">
								<label>Charges of Municipal Corporation</label>
								<input class="form-control mb-3" type="text" name="charges" placeholder="Charges">
								
							</div>
							<div class="col-md-4" style="margin-top:29px;">
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
				<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered">
								<thead>
									<tr>	
										<th>Sr. No.</th>
										<th>Type of Business</th>
										<th>Type of Business</th>

										<th>Charges of Muncipal Corporatio</th>  
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($bussinesstype_all as $all)
									<tr>
										<td>{{ $loop->index+1 }}</td>
										<td>{{ $all->bussiness_type }}</td>
										<td>{{ $all->bussiness_type1 }}</td>

										<td>{{ $all->charges }}</td>	
										<td>
											<a href="{{ route('typeofbussinessedit',$all->id) }}"><button type="button" class="btn1 btn-outline-success"><i class='bx bx-edit-alt me-0'></i></button></a> 
											<a href="{{ route('typeofbussinessdelete',$all->id) }}"><button type="button" class="btn1 btn-outline-danger" onclick="return confirm('Are You Sure To Delete This?')"><i class='bx bx-trash me-0'></i></button> </a>
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
{{-- 

			@section('js');
		
		<script >
			const fromText = $(".from-text").val();
			const toText = $(".to-text");
	  
			$(document).on("keyup",".from-text", function() {
				console.clear();
				console.log($(this).parent().next().find('.to-text'));
				let text =$(this).val(),
				translateFrom = 'en-GB',
				translateTo = 'mr-IN';
				console.log(text);
				if(!text) 
				return;
				$(this).parent().next().find('.to-text').attr("placeholder", "Translating...");
				let apiUrl = `https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`;
				fetch(apiUrl).then(res => res.json()).then(data => {
				  $(this).parent().next().find('.to-text').val(data.responseData.translatedText);
					data.matches.forEach(data => {
						if(data.id === 0) {
						  $(this).parent().next().find('.to-text').val(data.translation);
						}
					});
					$(this).parent().next().find('.to-text').attr("placeholder", "Translation");
				});
			});
	  
	  
		  </script>	 --}}
@stop
							

@section('js');
		
<script >
	const fromText = $(".from-text").val();
	//const toText = $(".to-text");

	$(document).on("keyup",".from-text", function() {
		console.clear();
		console.log($(this).parent().next().find('.to-text'));
		let text =$(this).val(),
		translateFrom = 'en-GB',
		translateTo = 'mr-IN';
		console.log(text);
		if(!text) 
		return;
		$(this).parent().next().find('.to-text').attr("placeholder", "Translating...");
		let apiUrl = `https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`;
		fetch(apiUrl).then(res => res.json()).then(data => {
		  $(this).parent().next().find('.to-text').val(data.responseData.translatedText);
			data.matches.forEach(data => {
				if(data.id === 0) {
				  $(this).parent().next().find('.to-text').val(data.translation);
				}
			});
			$(this).parent().next().find('.to-text').attr("placeholder", "Translation");
		});
	});


  </script>

  @stop						
				
				