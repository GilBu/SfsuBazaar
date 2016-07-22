  	<style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      	width: auto;
      	height: 250px;
      	margin: auto;
  		}
  		.cover-container {
		    height: 180px;
		    width: auto;
		    white-space: nowrap;
		    overflow-x: scroll;
		    overflow-y: hidden;
		}
		.cover-item {
		    position: relative;
		    display: inline-block;
		    margin: 8px 8px;
		    box-shadow: 2px 2px 4px #bbb;
		    border-top-right-radius: 4px;
		    width: 100px;
		    height: 100px;
		    vertical-align: bottom;
		    background-position: top left;
		    background-repeat: no-repeat;
		    background-size: cover;
		}
		.product-summary {
			font-size: 75%;
			width: 100px;	
		}

  	</style>

<!-- Carousel Ads -->
<div class="container-fluid">
  <div id="carousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/img1.jpg" >
        <div class="carousel-caption">
          <h3>1</h3>
          <p>123</p>
        </div>
      </div>

      <div class="item">
        <img src="img/img3.jpg" >
        <div class="carousel-caption">
          <h3>1</h3>
          <p>123</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/img4.jpg" >
        <div class="carousel-caption">
          <h3>1</h3>
          <p>123</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  	</div>
</div>

<!-- Featured Products -->
 <div class="container-fluid">  
	  	<div class="row-fluid">
  	<h2>Featured:</h2> 
			<div class="col-sm-5 col-md-2 ">
	      	<a href="img/img1.jpg"> 
	        	<img src="img/img1.jpg" alt="img1" style="width:100px;height:100px">
		        	<p class="product-summary">
			        	Name <br>
			        	Price <br>
			        	Avg. Rating <br>
			        	# of Reviews <br>
			        </p>  
  					<input type="submit" class="btn btn-info" value="Add To Cart">    
	      	</a>
			</div>
		 	<div class="col-sm-5 col-md-2">
		      	<a href="img/img3.jpg" >
		        	<img src="img/img3.jpg" alt="img3" style="width:100px;height:100px">
		        	<p class="product-summary">
			        	Name <br>
			        	Price <br>
			        	Avg. Rating <br>
			        	# of Reviews <br>
			        </p>  
  					<input type="submit" class="btn btn-info" value="Add To Cart">    
		      	</a>
			</div>
		 	<div class="col-sm-5 col-md-2">
		      	<a href="img/img4.jpg" >   
		        	<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
			        <p class="product-summary">
			        	Name <br>
			        	Price <br>
			        	Avg. Rating <br>
			        	# of Reviews <br>
			        </p>  
  					<input type="submit" class="btn btn-info" value="Add To Cart">    
		      	</a>
			</div>
		 	<div class="col-sm-5 col-md-2">
		      	<a href="img/img1.jpg"> 
		        	<img src="img/img1.jpg" alt="img1" style="width:100px;height:100px">
		        	<p class="product-summary">
			        	Name <br>
			        	Price <br>
			        	Avg. Rating <br>
			        	# of Reviews <br>
			        </p>  
  					<input type="submit" class="btn btn-info" value="Add To Cart">     
		      	</a>
			</div>
		 	<div class="col-sm-5 col-md-2">
		      	<a href="img/img3.jpg">
		    	    <img src="img/img3.jpg" alt="img3" style="width:100px;height:100px">
		        	<p class="product-summary">
			        	Name <br>
			        	Price <br>
			        	Avg. Rating <br>
			        	# of Reviews <br>
			        </p>  
  					<input type="submit" class="btn btn-info" value="Add To Cart">   
		      	</a>
			</div>
		 	<div class="col-sm-5 col-md-2">
		      	<a href="img/img4.jpg">     
		        	<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
		        	<p class="product-summary">
			        	Name <br>
			        	Price <br>
			        	Avg. Rating <br>
			        	# of Reviews <br>
			        </p> 
  					<input type="submit" class="btn btn-info" value="Add To Cart">  
		      	</a>
			</div>
		</div>
  	</div>
</div>


<!--
<div class="container-fluid">
  	<h2>Featured:</h2>           
  	<div class="row-fluid">
		<div class="col-lg-12">
			<div class="cover-container">
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
				<div class="cover-item">
					<img src="img/img4.jpg" alt="img4" style="width:100px;height:100px">
				</div>
			</div>
		</div>
	</div>
</div>
-->

