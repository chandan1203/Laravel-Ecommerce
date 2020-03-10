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
					<a href="#">Add Product</a>
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
						<form class="form-horizontal" action="{{ url('/save-product') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field()}}
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker hasDatepicker" name="product_name" required="">
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError3">Product Category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
								  	<option value="">Select Category</option>
								  	<?php
                                		$all_published_category = DB::table('tbl_category')
                                                ->where('publication_status', 1)
                                                ->get()
                            		?>
                            		@foreach ($all_published_category as $category)
                            			<option value="{{ $category->category_id}}">{{ $category->category_name }}</option>
                            		@endforeach
									
								  </select>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="selectError3">Manufacture Name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacture_id">
								  	<option value="">Select Manufacture</option>
									<?php
                                		$all_published_manufacture = DB::table('tbl_manufacture')
                                                ->where('publication_status', 1)
                                                ->get()
                            		?>
                            		@foreach ($all_published_manufacture as $manufacture)
                            			<option value="{{ $manufacture->manufacture_id}}">{{ $manufacture->manufacture_name }}</option>
                            		@endforeach
								  </select>
								</div>
							  </div>

          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short description</label>
							  <div class="controls">
							  	<textarea class="cleditor" name="product_short_description" id="" cols="" rows="3" required=""></textarea>
							 </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product long description</label>
							  <div class="controls">
							  	<textarea class="cleditor" name="product_long_description" id="" cols="" rows="3" required=""></textarea>
							 </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01">Product Price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker hasDatepicker" name="product_price" required="">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Product Size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker hasDatepicker" name="product_size" required="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Product Color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker hasDatepicker" name="product_color" required="">
							  </div>
							</div>

							 <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
							  	<input type="checkbox" name="publication_status" value="1">
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