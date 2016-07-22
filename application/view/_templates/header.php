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
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <a href="<?php echo URL; ?>">Login</a>
                Or
                <a href="<?php echo URL; ?>" style="padding-right:15px;">Register</a>
            </ul>
        </div>

        <div class="container-fluid">

            <!-- LOGO -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SFSU Bazaar</a>
            </div>
            
            <!-- Search Bar -->
            <form class="navbar-form navbar-left" action="<?php echo URL; ?>listing/search" method="POST">
                <div class="form-group" style="display:inline;">
                    <div class="input-group" style="display:table;">
                        
                        <!-- Search Bar -->
                        <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
                        
                        <!-- Search Button -->
                        <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
            </form>

            <div class="navbar-form navbar-right">
                <a href="<?php echo URL; ?>">Cart</a>
            </div>           
        </div>

        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="<?php echo URL; ?>" class="dropdown-toggle" data-toggle="dropdown">Departments<b class="caret"></b> </a>
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
                <li>
                    <a href="<?php echo URL; ?>listing/index">Browse</a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>product/newProduct">Add a Product</a>
                </li>
            </ul>
        </div>
    </nav>
