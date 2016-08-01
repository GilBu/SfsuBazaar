	<style>

		.thumbnail
		{
			margin-bottom: 20px;
			padding: 0px;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;
		}

		.txt-overflow-hidden {
			white-space: nowrap; 
			overflow: hidden;
			text-overflow: ellipsis; 
		}
		
	</style>

	<div class="container-fluid">
		<div class="container-fluid">
			<div class="well">

				<!-- page title -->
				<font size="5">Search Results</font>
				<div class="row" style="float: right;">
					<div class="col-md-2">
						<label for="selectbasic"><small>Sort By:</small></label>
					</div>

					<!-- Sort By dropdown menu -->
					<div class="col-md-10">
						<select id="sortBy" name="sortBy" class="form-control">
							<option value="1">---Select One---</option>
							<option value="2">Price: Low To High</option>
							<option value="3">Price: High To Low</option>
						</select>
					</div>

				</div>
			</div>
			<!-- # of results found -->
			<p><big><strong class="text-danger"><?php echo count($products); ?> </strong> results found</big></p>
		</div>

    <!-- Product Listing -->
    <div class="container-fluid">
    	<div class="row-fluid">
    		<!-- product here -->
    		<?php foreach ($products as $product) { ?>
    			<div class="col-xs-3 col-lg-3 ">
    				<div class="thumbnail">
    					<a href="<?php echo URL . "product/index/$product->productID"; ?>">
    						<img src="../<?php echo $product->imagePath; ?>" alt="Cannot load image." style="width:250px; height:250px;" />
    					</a>

    					<!-- Product Title -->
    					<h4 class="txt-overflow-hidden ">
    						<b><?php echo $product->name; ?></b>
    					</h4>

    					<!-- Seller and Product price--> 
    					<p>
    						By: ????????? <br>
    						<h4> $ <?php echo $product->price; ?> </h4>
    					</p>

    					<!-- But It Now button -->
    					<input type="submit" class="btn btn-info" value="Buy It Now">    <!-- end row -->

    				</div>
    			</div> <!-- end of product -->
    			<?php } ?> <!-- end php -->

    			<!-- if no results found -->
    			<?php if (count($products) == 0) { 
    				echo "<h2><em>No results were found.</em></h2>"; 
    			} ?>

    		</div>
    	</div>
    </body>