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
					<a href="#">Edit Manufacture</a>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Manufacture</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('/update_manufacture/'.$manufacture->manufacture_id) }}" method="post">
							{{ csrf_field()}}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Category Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker hasDatepicker" name="manufacture_name" value="{{ $manufacture->manufacture_name }}">
							  </div>
							</div>

          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description</label>
							  <div class="controls">
							  	<textarea class="cleditor" name="manufacture_description" id="" cols="" rows="3" >{{ $manufacture->manufacture_description }}</textarea>
							 </div>

							 <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
							  	<input type="checkbox" name="publication_status" value="1">
							 </div>
							  

							 </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>
@endsection