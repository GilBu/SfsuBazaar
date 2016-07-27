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
        padding-top: 200px; 
    }

    .search-bar {
            padding-top: 10px; 
    }

    .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
    }

</style>
    
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

            <div class="row-fluid">
                <!-- LOGO -->
                <div class="col-md-1">
                    <a class="navbar-brand" href="<?php echo URL; ?>listing/index">SFSU Bazaar</a>
                </div>

                <div class="col-md-11">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav navbar-right">
                            <a href="<?php echo URL; ?>">Login</a>
                            Or
                            <a href="<?php echo URL; ?>" style="padding-right:15px;">Register</a>
                        </ul>
                    </div>

                    <div class="container-fluid search-bar">

                        <form action="<?php echo URL; ?>listing/search" method="POST">

                            <div class="form-group" style="display:inline;">
                                <div class="input-group" style="display:table;">

                                    <div class="input-group-btn search-panel">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">All Departments <span class="caret"></span></button>
                                        <ul class="dropdown-menu scrollable-menu" role="menu">

                                    <!-- <div class="input-group-btn search-panel">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span id="search_concept">All</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu"> -->
                                        
                                            <li class="active"><a href="#all">All Departments</a></li>
                                            <li><a href="#appliances">Appliances</a></li>
                                            <li><a href="#arts-crafts">Arts, Crafts & Sewing</a></li>
                                            <li><a href="#automotive">Automotive</a></li>
                                            <li><a href="#beauty">Beauty & Personal Care</a></li>
                                            <li><a href="#stripbooks">Books</a></li>
                                            <li><a href="#popular">CDs & Vinyl</a></li>
                                            <li><a href="#mobile">Cell Phones & Accessories</a></li>
                                            <li><a href="#fashion">Clothing, Shoes & Jewelry</a></li>
                                            <li><a href="#computers">Computers</a></li>
                                            <li><a href="#electronics">Electronics</a></li>
                                            <li><a href="#gift-cards">Gift Cards</a></li>
                                            <li><a href="#grocery">Grocery & Gourmet Food</a></li>
                                            <li><a href="#handmade">Handmade</a></li>
                                            <li><a href="#hpc">Health, Household & Baby Care</a></li>
                                            <li><a href="#local-services">Home & Business Services</a></li>
                                            <li><a href="#garden">Home & Kitchen</a></li>
                                            <li><a href="#industrial">Industrial & Scientific</a></li>
                                            <li><a href="#fashion-luggage">Luggage & Travel Gear</a></li>
                                            <li><a href="#luxury-beauty">Luxury Beauty</a></li>
                                            <li><a href="#movies-tv">Movies & TV</a></li>
                                            <li><a href="#mi">Musical Instruments</a></li>
                                            <li><a href="#office-products">Office Products</a></li>
                                            <li><a href="#lawngarden">Patio, Lawn & Garden</a></li>
                                            <li><a href="#pets">Pet Supplies</a></li>
                                            <li><a href="#software">Software</a></li>
                                            <li><a href="#sporting">Sports & Outdoors</a></li>
                                            <li><a href="#tools">Tools & Home Improvement</a></li>
                                            <li><a href="#toys-and-games">Toys & Games</a></li>
                                            <li><a href="#videogames">Video Games</a></li>
                                            <li><a href="#wine">Wine</a></li>
                                        </ul>
                                    </div>

                                    <!-- Search Bar --> 
                                     <input class="form-control" type="text" name="search-term" value="" required />
                              

                                    <!-- Search Button -->
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" name="search" value="Search">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="container-fluid">
                    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="<?php echo URL; ?>" class="dropdown-toggle" data-toggle="dropdown">        Departments<b class="caret"></b> 
                            </a>
                            <ul class="dropdown-menu scrollable-menu">
                                <li>
                                    <div class="row" style="width: 300px;">
                                        <ul class="list-unstyled col-md-12">
                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">All Departments</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Appliances</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Arts, Crafts & Sewing</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Automotive</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Beauty & Personal Care</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Books</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">CDs & Vinyl</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Cell Phones & Accessories</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Clothing, Shoes & Jewelry</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Collectibles & Fine Art</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Computers</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Electronics</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Gift Cards</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Grocery & Gourmet Food</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Handmade</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Health, Household & Baby Care</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Home & Business Services</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Home & Kitchen</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Industrial & Scientific</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Luggage & Travel Gear</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Luxury Beauty</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Movies & TV</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Musical Instruments</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Office Products</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Patio, Lawn & Garden</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Pet Supplies</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Prime Pantry</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Software</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Sports & Outdoors</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Tools & Home Improvement</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Toys & Games</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Video Games</a>
                                            </li>

                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">Wine</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Listing -->
                        <li>
                            <a href="<?php echo URL; ?>listing/index">Browse</a>
                        </li>
                        <!-- New Product -->
                        <li>
                            <a href="<?php echo URL; ?>product/newProduct">Add a Product</a>
                        </li>
                        <!--User Profile -->
                        <li>
                            <a href="<?php echo URL; ?>user/index">User Profile</a>
                        </li>                      
                        <!-- Cart Button -->
                        <li>
                            <a href="<?php echo URL; ?>cart/index">Cart</a>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>
    </div>
