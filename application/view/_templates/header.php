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
                    <a class="navbar-brand" href="#">SFSU Bazaar</a>
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
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span id="search_concept">All</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="active"><a href="#All">All</a></li>
                                            <li><a href="#Department_1">Department 1</a></li>
                                            <li><a href="#Department_2">Department 2</a></li>
                                            <li><a href="#Department_3">Department 3</a></li>
                                            <li><a href="#Department_4">Department 4</a></li>
                                        </ul>
                                    </div>

                                    <!-- Search Bar --> 
                                    <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">

                                    <!-- Search Button -->
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
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
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row" style="width: 500px;">
                                        <ul class="list-unstyled col-md-4">
                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">test1-1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">test1-2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>" style="padding-left:10px;">test1-3</a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-4">
                                            <li>
                                                <a href="<?php echo URL; ?>">test2-1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>">test2-2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>">test2-3</a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled col-md-4">
                                            <li>
                                                <a href="<?php echo URL; ?>">test3-1</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>">test3-2</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>">test3-3</a>
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
