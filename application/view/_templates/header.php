<!DOCTYPE html>
<html lang="en">
<head>
	<title>SFSU Bazaar</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- JS -->
	<!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
	<!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

	<!-- CSS -->
	<link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>

<style>

	body { 
		padding-top: 75px; 
	}

	.search-bar {
		padding-top: 20px; 
		margin: auto;
		max-width: 50%;
	}

	.scrollable-menu {
		height: auto;
		max-height: 500px;
		overflow-x: hidden;
		padding-left: 10px;
	}

	.top-right {
		position: absolute;
		top: 0px;
		right: 0px;
	}
	.nav-btns {
		padding-top: 20px; 
	}




</style>

<!-- search dropdown feature -->
<script>
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>

<body>

	<div class="container-fluid">
		<!-- Navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">

					<!-- collapse toggle button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- LOGO -->
					<a class="navbar-brand" href="<?php echo URL; ?>">SFSU<br>Bazaar</a>

				</div>

				<!-- department, sell, search bar be callapsed here -->
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav nav-btns">
						<li class="dropdown nav-item">

							<!-- Departments dropdown button -->	
							<a href="<?php echo URL; ?>" class="dropdown-toggle" data-toggle="dropdown">
								Departments
								<b class="caret"></b> 
							</a>

							<!-- departments list-->
							<ul class="dropdown-menu scrollable-menu">
								<li><a href="<?php echo URL; ?>">All Departments</a></li>
								<li><a href="<?php echo URL; ?>">Appliances</a></li>
								<li><a href="<?php echo URL; ?>">Automotive</a></li>
								<li><a href="<?php echo URL; ?>">Books</a></li>
							</ul> <!-- end list of departments -->

						</li> <!-- end dropdown -->

						<!-- Sell Product Button -->
						<li><a href="<?php echo URL; ?>product/newProduct">Sell</a></li>

					</ul> <!-- end of departments and sell buttons -->
					
					<!-- login/register links -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo URL; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<li><a href="<?php echo URL; ?>" style="padding-right:15px;"><span class="glyphicon glyphicon-user"></span>Register</a></li>
					</ul>

					<!-- Search Bar -->
					<div class="search-bar nav-item">
						<form action="<?php echo URL; ?>listing/search" method="POST">

							<div class="form-group" style="display:inline;">
								<div class="input-group" style="display:table;">

									<!-- search departments -->
									<div class="input-group-btn search-panel">

										<!-- departments dropdown button-->
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span id="search_concept">All </span>
											<span class="caret"></span>
										</button>

										<!-- departments list -->
										<ul class="dropdown-menu scrollable-menu" role="menu">
											<li class="active"><a href="#all">All </a></li>
											<li><a href="#appliances">Appliances</a></li>
											<li><a href="#arts-crafts">Arts, Crafts & Sewing</a></li>
											<li><a href="#automotive">Automotive</a></li>
											<li><a href="#beauty">Beauty & Personal Care</a></li>
											<li><a href="#stripbooks">Books</a></li>
										</ul>
									</div>

									<!-- Search Bar --> 
									<input class="form-control" type="text" name="search-term" value="" />

									<!-- Search Button -->
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit" name="search" value="Search">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>
					</div> <!-- end of search bar -->
				</div> <!-- end of collapse -->
			</div>
		</nav> <!-- end of nav -->
	</div>
