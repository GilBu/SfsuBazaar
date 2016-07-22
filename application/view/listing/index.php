<style>
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
</style>

<script>
    $(document).ready(function () {
        $('#list').click(function (event) {
            event.preventDefault();
            $('#products .product').addClass('list-group-product');
        });
        $('#grid').click(function (event) {
            event.preventDefault();
            $('#products .product').removeClass('list-group-product');
            $('#products .product').addClass('grid-group-product');
        });
    });
</script>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar-nav-fixed affix">
                    <div class="well">
                        <ul class="nav">
                            <li class="nav-header">Filter By Departments:</li>
                            <li class="active"><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li class="nav-header">Filter By Avg. Seller Rating</li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li class="nav-header">Filter By # of Reviews:</li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                            <li><a href="#">Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <div class="well">
                        <font size="5">Search Results</font>
                        <div class="btn-group" style="float: right;">
                            <a href="#" id="list" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-th-list"></span>
                                List
                            </a> 
                            <a href="#" id="grid" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-th"></span>
                                Grid
                            </a>
                        </div>				
                    </div>

                    <p><big><strong class="text-danger"><?php echo count($products); ?></strong> results found</big></p>

                    <div class="container-fluid">
                        <div id="products" class="row list-group">
                            <div id="products" class="row list-group">

                                <?php foreach ($products as $product) { ?>
                                    <div class="product  col-xs-4 col-lg-4">
                                        <div class="thumbnail">
                                            <a href="<?php echo URL . "product/index/$product->productID"; ?>">
                                            <img class="group list-group-image" src="<?php echo $product->imagePath; ?>" alt="Cannot load image." />
                                            </a>
                                            <div class="caption">
                                                <h4 class="group inner list-group-product-heading">
                                                    <b><?php echo $product->name; ?></b>
                                                </h4>
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
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <a class="btn btn-success" href="#">Add to cart</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <a class="btn btn-success" href="#">Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
