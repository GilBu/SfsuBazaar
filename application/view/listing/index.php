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

		.txt-overflow-hidden {
		    white-space: nowrap; 
		    overflow: hidden;
		    text-overflow: ellipsis; 
		}
	</style>


<div class="container-fluid">
	<!-- Fixed Left Navbar -->
	<div class="left-navbar-container">
		<h4>Filter By:</h4>
		<hr>
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
			<hr>
			<!-- Filter By Sellers Avg. Rating -->
			<h5>Sellers Avg. Rating</h5>
			<div class="center">
				<a href="<?php echo URL; ?>">
					<span>80% & Up</span>
				</a>
				<br>
				<a href="<?php echo URL; ?>">
					<span>60% & Up</span>
				</a>
				<br>
				<a href="<?php echo URL; ?>">
					<span>40% & Up</span>
				</a>
				<br>
				<a href="<?php echo URL; ?>">
					<span>20% & Up</span>
				</a>
			</div>
			<hr>
			<!-- Filter By # of reviews -->
			<h5># of Buyers Reviews</h5>
			<div class="center">
				<div class="row">

					<div class="input-group">
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<small>Greater Than:</small> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><small>Greater Than:</small></a></li>
								<li><a href="#"><small>Less Than:</small></a></li>
								<li><a href="#"><small>Equal To:</small></a></li>
							</ul>
						</div>
						<input type="text" name="numreview" class="form-control input-number" placeholder="#">

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
				</div>
			</div>
		</div>
		<!-- # of results found -->
		<p><big><strong class="text-danger"><?php echo count($products); ?> </strong> results found</big></p>
	</div>
	
	<!-- Product Listing -->
	<div class="container-fluid listing-body">
		<div id="products" class="row-fluid">
			<ul id="products" class="thumbnails list-unstyled">

				<!-- product here -->
				<?php foreach ($products as $product) { ?>
					<li class="col-xs-3 col-lg-3">
						<div class="thumbnail">
							<a href="<?php echo URL . "product/index/$product->productID"; ?>">
								<img class="group" style="width:250px height:250px" src="../<?php echo $product->imagePath; ?>" alt="Cannot load image." />
							</a>
							<div class="caption">

								<!-- Product Title -->
								<h4 class="group inner txt-overflow-hidden ">
									<b><?php echo $product->name; ?></b>
								</h4>

								<!-- Product price, seller avg. rating, # of reviews --> 
								<p class="group inner">
								
									By: ????????? <br>
			                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
			                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
									<br>

									<sup>(# of Reviews)</sup>  
									<h4> $ <?php echo $product->price; ?> <h4>
									                    
								</p>

								<!-- Add To Cart/ But It Now button -->
								<div class="row" align="center">
									<div class="col-xs-12 col-md-6">
										<a class="btn btn-success" href="#">Add to cart</a>
									</div>
									<div class="col-xs-12 col-md-6">
										<a class="btn btn-success" href="#">Buy Now</a>
									</div>
								</div> <!-- end row -->
								</div>
						</div>
					</li> <!-- end of product -->
				<?php } ?> <!-- end php -->

				<!-- if no results found -->
				<?php if (count($products) == 0) { 
					echo "<h2><em>No results were found.</em></h2>"; 
				} ?>
				
			</ul>
		</div>
	</div>
</body>