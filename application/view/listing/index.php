<style>

	.thumbnail
	{
		margin-bottom: 30px;
		padding: 0;
		-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px;
	}

	.txt-overflow-hidden {
		white-space: nowrap; 
		overflow: hidden;
		text-overflow: ellipsis; 
	}

	.left-padding {
		padding-left: 10px;
	}
	

	.sm-buy-btn {
		border: 1px solid #ffc826; 
		-webkit-border-radius: 3px; 
		-moz-border-radius: 3px;
		border-radius: 3px;
		font-size: 15px;
		font-family: arial, helvetica, sans-serif; 
		padding: 5px 8px 5px 8px; 
		text-decoration: none; 
		display: inline-block;
		font-weight: bold; 
		color: #000000;
		background-color: #ffd65e; 
		background-image: -webkit-gradient(linear, left top, left bottom, from(#ffd65e), to(#febf04));
		background-image: -webkit-linear-gradient(top, #ffd65e, #febf04);
		background-image: -moz-linear-gradient(top, #ffd65e, #febf04);
		background-image: -ms-linear-gradient(top, #ffd65e, #febf04);
		background-image: -o-linear-gradient(top, #ffd65e, #febf04);
		background-image: linear-gradient(to bottom, #ffd65e, #febf04);
		filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffd65e, endColorstr=#febf04);
	}

	.sm-buy-btn:hover {
		border: 1px solid #f7b800;
		background-color: #ffc92b; 
		background-image: -webkit-gradient(linear, left top, left bottom, from(#ffc92b), to(#ce9a01));
		background-image: -webkit-linear-gradient(top, #ffc92b, #ce9a01);
		background-image: -moz-linear-gradient(top, #ffc92b, #ce9a01);
		background-image: -ms-linear-gradient(top, #ffc92b, #ce9a01);
		background-image: -o-linear-gradient(top, #ffc92b, #ce9a01);
		background-image: linear-gradient(to bottom, #ffc92b, #ce9a01);
		filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffc92b, endColorstr=#ce9a01);
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

			</div> <!-- end row -->
		</div>

		<!-- # of results found -->
		<p><big><strong class="text-danger"><?php echo count($products); ?> </strong> results found</big></p>

	</div> <!-- end container -->

	<!-- Product Listing -->
	<div class="container-fluid">
		<div class="row-fluid">
			<!-- product here -->
			<?php foreach ($products as $product) { ?>
				<div class="col-xs-3 col-lg-3 ">
					<div class="thumbnail">

						<!-- Product Img -->
						<a href="<?php echo URL . "product/index/$product->productID"; ?>">
							<img src="../<?php echo $product->imagePath; ?>" alt="Cannot load image." style="width:250px; height:250px;" />
						</a>

						<!-- Product Detail -->
						<div class="container-fluid left-padding">
							<!-- Product Title -->
							<h4 class="txt-overflow-hidden">
								<b><?php echo $product->name; ?></b>
							</h4>

							<div class="row-fluid">

								<!-- Seller and Product Price--> 
								<div class="col-md-7">
									By: ????????? 
									<h4><b><?php echo "$" . number_format($product->price, 2, '.', ''); ?></b></h4>
								</div>

								<!-- Buy It Now button -->
								<div class="col-md-5">
									<br>
									<a href="<?php echo URL . "product/confirmation/$product->productID"; ?>" class="btn sm-buy-btn btn-info pull-right">Buy It Now</a> 
								</div>
							</div> <!-- end row -->
						</div> <!-- end container -->
					</div> <!-- end thumbnail -->
				</div> <!-- end of product -->
			<?php } ?> <!-- end php -->

			<!-- if no results found -->
			<?php if (count($products) == 0) { 
				echo "<h2><em>No results were found.</em></h2>"; 
			} ?>

		</div> <!-- end row -->
	</div> <!-- end container -->
</div> <!-- end container -->