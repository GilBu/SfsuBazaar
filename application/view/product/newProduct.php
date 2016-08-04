<script>
	$(document).ready(function () 
	{ 

		//default hides all
		$("#service").hide();


		$("#isService").click(function()
		{
			$("#service:hidden").show('slow');
			$("#product").hide();
		});
		$("#isService").click(function()
		{
			if($('isService').prop('checked')===false)
			{
				$('#service').hide();
			}
		});


		$("#notService").click(function()
		{
			$("#product:hidden").show('slow');
			$("#service").hide();
		});
		$("#notService").click(function()
		{
			if($('notService').prop('checked')===false)
			{
				$('#product').hide();
			}
		});

	});

</script>
<div class="container-fluid">
	<br>
	<h2>Add a Post</h2>
	<br>
	<hr>

	<div class="row-fluid">

		<!-- is this a product or service -->
		<h4>Step 1: Product or Service</h4>
		<hr>
		<form class="form-horizontal" id='form-id'>
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Product or Service? <br> (check only one):</label>
				<input id='notService' name='isService' type='radio' checked="checked"/> Product
				<input id="isService" name='isService' type='radio' /> Service
			</div>
		</form>
		<br>

		<hr>

		<!-- Product -->
		<div class="box" id="product">

			<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo URL; ?>product/add" method="POST">

				<h4>Step 2: Product Detail</h4>
				<hr>
				<!-- Name -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="" required id="name" placeholder="Enter Product Name"/>
					</div>
				</div>

				<!-- Price -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Price:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price" value="" required id="price" placeholder="Enter Product Price"/>
					</div>
				</div>

				<!-- Quantity -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Quantity:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quantity" value="" required id="quantity" placeholder="Enter Product Quantity"/>
					</div>
				</div>

				<!-- Quality Dropdown -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Quality:</label>
					<div class="col-sm-10">        
						<select id="quality" name="quality" class="form-control product-type" required>
							<option value="">-Select One-</option>
							<option value="New">New</option>
							<option value="Refurbished">Refurbished</option>
							<option value="Used - Like New">Used - Like New</option>
							<option value="Used - Very Good">Used - Very Good</option>
							<option value="Used - Good">Used - Good</option>
							<option value="Used - Acceptable">Used - Acceptable</option>
							<option value="Used - Poor">Used - Poor</option>
							<option value="Used - Very Poor">Used - Very Poor</option>
							<option value="Used - Unusable">Used - Unusable</option>
						</select>
					</div>
				</div>

				<!-- Department Dropdown -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Category:</label>
					<div class="col-sm-10">        
						<select id="department" name="department" class="form-control product-type" required>
							<option value="">-Select One-</option>
							<option value="Books">Books</option>
							<option value="Office Supplies">Office Supplies</option>
							<option value="Electronics">Electronics</option>
							<option value="Miscellaneous">Miscellaneous</option>
						</select>
					</div>
				</div>

				<!-- Image -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Image:</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="image" value="" id="image"/>
					</div>
				</div>

				<!-- Video URL -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Video URL:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="videoUrl" value="" id="videoUrl" placeholder="Enter URL"/>
						<p>*** Only YouTube links are supported.</p>              
					</div>               
				</div>

				<!-- Description -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Description:</label>
					<div class="col-sm-10">
						<textarea type="text" class="form-control" name="description" value="" id="description" rows="5"></textarea> 
					</div>
				</div>

				<hr>
				<br>

				<!-- Add Product Button -->
				<input type="submit" class="btn pull-right" name="addProduct" value="Add This Product"/>

			</form>
		</div>

		<!-- services -->
		<div class="box" id="service">

			<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo URL; ?>product/add" method="POST">

				<h4>Step 2: Service Detail</h4>
				<hr>
				<!-- Name -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="" required id="name" placeholder="Enter Product Name"/>
					</div>
				</div>

				<!-- Price -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Price Per Hour:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price" value="" required id="price" placeholder="Enter Product Price"/>
					</div>
				</div>

				<!-- Image -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Image: (Optional)</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="image" value="" id="image"/>
					</div>
				</div>

				<!-- Video URL -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Video URL: (Optional)</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="videoUrl" value="" id="videoUrl" placeholder="Enter URL"/>
						<p>*** Only YouTube links are supported.</p>              
					</div>               
				</div>

				<!-- Description -->
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">Description:</label>
					<div class="col-sm-10">
						<textarea type="text" class="form-control" name="description" value="" id="description" rows="5"></textarea> 
					</div>
				</div>

				<hr>
				<br>

				<!-- isService is true -->
  				<input type="hidden" name="isService" value="1"/>

				<!-- Add Product Button -->
				<input type="submit" class="btn pull-right" name="addProduct" value="Add This Service"/>

			</form>
		</div>
	</div>
</div>



