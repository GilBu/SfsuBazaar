<style>

	.add-to-cart .btn-qty {
		width: 52px;
		height: 46px;
	}

	.add-to-cart .btn { 
		border-radius: 0; 
	}

	.monospaced { 
		font-family: 'Ubuntu Mono', monospaced ; 
	}
</style>

<div class="container" id="product-section">
	<div class="row">

		<!-- product image -->
		<div class="col-md-5">
			<img src="img/img1.jpg" class="image-responsive"/>
		</div>

		<!-- product data -->
		<div class="col-md-7">
			<div class="row">

				<!-- product title -->
				<div class="row">
					<h1>Life of a Programmer</h1>
				</div>

				<!-- product seller and profile link -->
				<div class="row">
					<div class="col-md-12">
						<span>By </span>
						<span>
							<a class="monospaced" href="#">USERNAME</a>
						</span>
					</div>
				</div><!-- end row -->

				<!-- product/seller rating -->
				<div class="row">
					<div class="col-md-5">
						<span class="sr-only">Four out of Five Stars</span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
						<p>(# number of Reviews)</p>
					</div>
				</div>

				<!-- product price -->
				<div class="row">
					<div class="col-md-12 bottom-rule">
						<h2 class="product-price">$100,000,000.00</h2>
					</div>
				</div><!-- end row -->

				<!-- product condition -->
				<div class="row">
					<div class="col-md-12 bottom-rule">
						<h3 class="product-price">Condition:</h3>
						<p>Good/Bad</p>
					</div>
				</div><!-- end row -->

				<!-- product condition -->
				<div class="row">
					<div class="col-md-12 bottom-rule">
						<h3 class="product-price">Schedule: </h3>
						<p>Day: S M T W Th F Sa</p>
						<p>Time:  0:00 to 0:00</p>
						<p>Location: </p>
					</div>
				</div><!-- end row -->
				<br>

				<!-- quantity, add to cart, buy it now buttons -->
				<div class="row add-to-cart">
					<!-- change quantity -->
					<div class="col-md-4 product-qty">
						<span class="btn btn-default btn-lg btn-qty">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</span>

						<input class="btn btn-default btn-lg btn-qty" value="1" />

						<span class="btn btn-default btn-lg btn-qty">
							<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
						</span>
					</div>
					<!-- add to cart button -->
					<div class="col-md-4">
						<button class="btn btn-lg btn-brand btn-full-width">
							Add to Cart
						</button>
					</div>
					<!-- buy it now -->
					<div class="col-md-4">
						<button class="btn btn-lg btn-brand btn-full-width">
							Buy it Now
						</button>
					</div>
				</div><!-- end row -->

				<div class="row">
					<div class="col-md-12 bottom-rule top-10"></div>
				</div><!-- end row -->			
			</div><!-- end row -->
		</div>
	</div><!-- end container -->
	<div class="container">
		<div class="row">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#description"
					aria-controls="description"
					role="tab"
					data-toggle="tab"
					>Description</a>
				</li>
				<li role="presentation">
					<a href="#features"
					aria-controls="features"
					role="tab"
					data-toggle="tab"
					>Features</a>
				</li>
				<li role="presentation">
					<a href="#notes"
					aria-controls="notes"
					role="tab"
					data-toggle="tab"
					>Notes</a>
				</li>
				<li role="presentation">
					<a href="#reviews"
					aria-controls="reviews"
					role="tab"
					data-toggle="tab"
					>Reviews</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="description">
					<p class="top-10">
						Description :
						Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah 
					</p>
				</div>
				<div role="tabpanel" class="tab-pane top-10" id="features">
					<p class="top-10">
						Features:
						Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah 
					</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="notes">
					<p class="top-10">
						Notes:
						Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah 
					</p>
				</div>
				<div role="tabpanel" class="tab-pane" id="reviews">
					<p class="top-10">
						Reviews:
						Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah 
					</p>
				</div>
			</div>
		</div>
	</div>