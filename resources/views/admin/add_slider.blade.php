@extends('admin_layouts')

@section('admin_content')
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Dashboard</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Slider</a>
				</li>
			</ul>
	<div class="box span12">
					<a class="alert-success">
					<?php
						$message = Session::get('message');
						if ($message) {
							echo $message;
							Session::put('message', null);
						}
					?>
					</a>
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/save-slider') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field()}}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="slider_image" id="fileInput" type="file" required="">
							  </div>
							</div>



							 <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
							  	<input type="checkbox" name="publication_status" value="1" required="">
							 </div>
							 </div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>
@endsection