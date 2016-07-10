<!DOCTYPE html>
<html lang="en">
<head>
    <title>SFSU Bazzar</title>
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

            <!-- LOGO -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SFSU Bazaar</a>
            </div>
            
            <!-- Search Bar -->
            <form class="navbar-form navbar-left" action="<?php echo URL; ?>listing/search" method="POST">
                <input type="text" name="search-term" value="" required />
                <input type="submit" name="search" value="Search" />
            </form>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="<?php echo URL; ?>">Login</a>
                </li>
                <li class="active">
                    <a href="<?php echo URL; ?>">Register</a>
                </li>
            </ul>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a href="<?php echo URL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>listing/index">Browse</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>product/newProduct">add a product</a>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
