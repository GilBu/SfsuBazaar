	<style>
		.container img{
			width: 250px;
			height: 250px;
		}

		.navbar-fixed-left {
			width: 190px;
			position: static;
			border-radius: 0;
			height: 100%;
		}

		.navbar-fixed-left .navbar-nav > li {
			float: none;
			width: 100%;
		}

		.navbar-fixed-left + .container {
			padding-left: 195px;
		}

		.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
			margin-top: -50px;
			margin-left: 50px;
		}
		.glyphicon 
		{ 
			margin-right:5px; 
		}

		.thumbnail
		{
			margin-bottom: 20px;
			padding: 0px;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;
		}

		.product.list-group-product
		{
			float: none;
			width: 100%;
			background-color: #fff;
			margin-bottom: 10px;
		}
		.product.list-group-product:nth-of-type(odd):hover,.product.list-group-product:hover
		{
			background: #BA55D3;
		}

		.product.list-group-product .list-group-image
		{       
			margin-right: 10px;
		}
		.product.list-group-product .thumbnail
		{
			margin-bottom: 0px;
		}
		.product.list-group-product .caption
		{
			padding: 9px 9px 0px 9px;
		}
		.product.list-group-product:nth-of-type(odd)
		{
			background: #eeeeee;
		}

		.product.list-group-product:before, .product.list-group-product:after
		{
			display: table;
			content: " ";
		}

		.product.list-group-product img
		{
			float: left;
		}
		.product.list-group-product:after
		{
			clear: both;
		}
		.list-group-product-text
		{
			margin: 0 0 11px;
		}

		.left-navbar-container {
			padding-top: 100px; 
			height: 100%;
			left: 0;
			margin: 0;
			position: fixed;
			top: 3em;
			width: 190px;
		}

		.listing-header {
			padding-top: 10px; 
			padding-left: 210px;
			width: 100%;
		}

		.listing-body {
			padding-left: 210px;
			width: 100%;
		}
	</style>


	<div class="container-fluid">
		<!-- Fixed Left Navbar -->
		<div class="left-navbar-container">
			<h4>Filter By:</h4>
			<br>
			<ul>
				<!-- Filter By Departments -->
				<h5>Departments</h5>
				<li>
					<a href="#">Link</a>
				</li>
				<li>
					<a href="#">Link</a>
				</li>
				<li>
					<a href="#">Link</a>
				</li>
				<li>
					<a href="#">Link</a>
				</li>
				<br>

				<!-- Filter By Sellers Avg. Rating -->
				<h5>Seller Avg. Rating</h5>
				<div class="center">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group">
								<small>From:</small>
								<input type="text" name="minRating" class="form-control input-number" placeholder="Min">

							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<small>To:</small>
								<input type="text" name="maxRating" class="form-control input-number" placeholder="Max">
							</div>
						</div>
					</div>
				</div>
				<br><br>

				<!-- Filter By # of reviews -->
				<h5># of Reviews:</h5>
				<div class="center">
					<div class="row">
						<div class="col-md-6">
							<div class="input-group">
								<small>From:</small>
								<input type="text" name="minreview" class="form-control input-number" placeholder="Min">

							</div>
						</div>
						<div class="col-md-6">
							<div class="input-group">
								<small>To:</small>
								<input type="text" name="maxReview" class="form-control input-number" placeholder="Max">
							</div>
						</div>
					</div>
				</div>
			</ul>
		</div> <!-- end navbar -->
	</div> <!--end container -->

	<div class="container-fluid listing-header">
		<div class="well">

			<!-- page title -->
			<font size="5">Search Results</font>
			<div class="row" style="float: right;">
				<div class="container-fluid">
					<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<div class="col-md-2">
						<label for="selectbasic"><small>Sort By: </small></label>
					</div>

					<!-- Sort By dropdown menu -->
					<div class="col-md-6">
						<select id="sortBy" name="sortBy" class="form-control">
							<option value="1">Revelance</option>
							<option value="2">Price: Low To High</option>
							<option value="3">Price: High To Low</option>
							<option value="4">Avg. Seller Reivews</option>
							<option value="5">Avg. Seller Ratings</option>
						</select>
					</div>

					<!-- grid/listing view of products -->
					<div class=" col-md-2">
						<a href="#" id="list" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-th-list"></span>
							List
						</a> 
					</div>                     
					<div class=" col-md-2">
						<a href="#" id="grid" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-th"></span>
							Grid
						</a>
					</div> 
				</div>
			</div>
		</div>
		<!-- # of results found -->
		<p><big><strong class="text-danger">#</strong> results found</big></p>
	</div>
	
	<!-- Product Listing -->
	<div class="container-fluid listing-body">
		<div id="products" class="row-fluid list-group">
			<div id="products" class="row-fluid list-group">

				<!-- product here -->
				<?php foreach ($products as $product) { ?>
					<div class="product  col-xs-3 col-lg-3">
						<div class="thumbnail">
							<a href="<?php echo URL . "product/index/$product->productID"; ?>">
								<img class="group list-group-image" style="width:250px;height:250px" src="../<?php echo $product->imagePath; ?>" alt="Cannot load image." />
							</a>
							<div class="caption">

								<!-- Product Title -->
								<h4 class="group inner list-group-product-heading">
									<b><?php echo $product->name; ?></b>
								</h4>

								<!-- Product price, seller avg. rating, # of reviews --> 
								<p class="group inner list-group-product-text">
									$ <?php echo $product->price; ?>
									<br> 
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<br>
									<sup>(# of Reviews)</sup>                       
								</p>

								<!-- Add To Cart/ But It Now button -->
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<a class="btn btn-success" href="#">Add to cart</a>
									</div>
									<div class="col-xs-12 col-md-6">
										<a class="btn btn-success" href="#">Buy Now</a>
									</div>
								</div> <!-- end row -->
							</div>
						</div>
					</div> <!-- end of product -->
				<?php } ?> <!-- end php -->
			</div>
		</div>
	</div>
</body>