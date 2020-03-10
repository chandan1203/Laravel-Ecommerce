@extends('admin_layouts')

@section('admin_content')
				
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
				<a class="alert-success">
					<?php
						$message = Session::get('message');
						if ($message) {
							echo $message;
							Session::put('message', null);
						}
					?>
				</a>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Product ID</th>
								  <th>Product Image</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <?php
						  	$i=0;
						  ?>
						  @foreach ($all_slider_info as $slider)
						  	<?php
						  		$i++;
						  	?>
						  
						  <tbody>
							<tr>
								<td>{{ $i }}</td>
								<td> <img src="{{ url($slider->slider_image) }}" style="height: 80px; width: 200px"></td>
								<td class="center">
									@if ($slider->publication_status == 1)
										<span class="label label-success">active</span>
									@else
									<span class="label label-danger">Inactive</span>
									@endif

									
								</td>
								<td class="center">
									@if ($slider->publication_status == 1)
									<a class="btn btn-danger" href="{{ url('/unactive_slider/'.$slider->slider_id) }}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else

									<a class="btn btn-success" href="{{ url('/active_slider/'.$slider->slider_id) }}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-danger" href="{{ url('/delete_slider/'.$slider->slider_id) }}" id="delete" >
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						</tbody>
						@endforeach   
					</table>
				</div>
			</div>
		</div>

	@endsection
							