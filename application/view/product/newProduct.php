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
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Seller_ID:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="sellerID" value="" required id="sellerID" placeholder="Enter Seller ID"/>
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
					<select id="quality" name="quality" class="form-control product-type">
						<option value="0">-Select One-</option>
						<option value="1">Great</option>
						<option value="2">Good</option>
						<option value="3">Bad</option>
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
			<h4>Step 2: Set Up A Meet Up Schedule</h3>
			<hr>

			<!-- Days -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Days Available To Meet: (check all that applies)</label>
				<div class="col-sm-10">
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Sunday
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Monday
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Tuesday
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Wednesday
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Thursday
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Friday
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" name="days" value="">Saturday
					</label>
				</div>
			</div>

			<!-- Time Dropdown -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Time Available:</label>
				<div class="col-sm-10"> 
					<span>From: </span>       
					<select id="quality" name="quality" class="product-type">
						<option value="0">-Select One-</option>
						<option value="1">7:00 am</option>
						<option value="2">8:00 am</option>
						<option value="3">9:00 am</option>
						<option value="4">10:00 am</option>
						<option value="5">11:00 am</option>
						<option value="6">12:00 pm</option>
						<option value="7">1:00 pm</option>
						<option value="8">2:00 pm</option>
						<option value="9">3:00 pm</option>
						<option value="10">4:00 pm</option>
						<option value="11">5:00 pm</option>
						<option value="12">6:00 pm</option>
						<option value="13">7:00 pm</option>
						<option value="14">8:00 pm</option>
						<option value="15">9:00 pm</option>
					</select>   
					<span>To: </span>     
					<select id="quality" name="quality" class="product-type">
						<option value="0">-Select One-</option>
						<option value="1">7:00 am</option>
						<option value="2">8:00 am</option>
						<option value="3">9:00 am</option>
						<option value="4">10:00 am</option>
						<option value="5">11:00 am</option>
						<option value="6">12:00 pm</option>
						<option value="7">1:00 pm</option>
						<option value="8">2:00 pm</option>
						<option value="9">3:00 pm</option>
						<option value="10">4:00 pm</option>
						<option value="11">5:00 pm</option>
						<option value="12">6:00 pm</option>
						<option value="13">7:00 pm</option>
						<option value="14">8:00 pm</option>
						<option value="15">9:00 pm</option>
					</select>
				</div>
			</div>

			<!-- Location Dropdown -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Choose a Location To Meet Up:</label>
				<div class="col-sm-10">       
					<select id="quality" name="quality" class="form-control product-type">
						<option value="0">-Select One-</option>
						<option value="1">Library Entrance</option>
						<option value="2">Bookstore Entrance</option>
					</select>   
				</div>
			</div>

			<hr>
			<h4>Step 3: Additional Details (optional)</h3>
			<hr>

			<!-- Tags -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Tags:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="tags" value="" data-role="tagsinput" required id="tags" placeholder="Enter Tags"/>
				</div>
			</div>

			<hr>
			<br>

			<!-- Add Product Button -->
			<input type="submit" class="btn pull-right" name="addProduct" value="Add This Product"/>

		</form>
	</div>
</div>