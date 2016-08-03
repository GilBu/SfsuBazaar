<div class="container">

	<h3>Add a product</h3>

	<div class="box">

		<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo URL; ?>product/add" method="POST">
			
			<h4>Step 1: Product Detail</h3>
			<hr>
			<!-- Name -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="" required id="name" placeholder="Enter Product Name"/>
				</div>
			</div>

			<!-- Sellers ID -->
                        <!--			
                        <div class="form-group">
				<label class="control-label col-sm-2" for="name">Seller_ID:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="sellerID" value="" required id="sellerID" placeholder="Enter Seller ID"/>
				</div>
			</div>
                        -->

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
				<label class="control-label col-sm-2" for="name">Department:</label>
				<div class="col-sm-10">        
					<select id="department" name="department" class="form-control product-type" required>
						<option value="0">-Select One-</option>
						<option value="1">Department</option>
						<option value="2">Department</option>
						<option value="3">Department</option>
					</select>
				</div>
			</div>

			<!-- isService -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Is This A Service? (check only one):</label>
				<div class="col-sm-10">
					<input type="radio"  name="isService" class="input-xlarge" value="0" required><span>Yes</span>
					<input type="radio"  name="isService" class="input-xlarge" value="1" required><span>No</span>
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
			<h4>Step 2: Additional Details (optional)</h3>
			<hr>

			<!-- Tags -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Tags:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="tags" value="" data-role="tagsinput" id="tags" placeholder="Enter Tags"/>
				</div>
			</div>

			<hr>
			<br>

			<!-- Add Product Button -->
			<input type="submit" class="btn pull-right" name="addProduct" value="Add This Product"/>

		</form>
	</div>
</div>