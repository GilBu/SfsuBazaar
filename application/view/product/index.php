<style>

    .product-img{
        width: 450px;
        height: 450px;
    }
    .btn-qty {
        width: 52px;
        height: 46px;
    }

    .btn { 
        border-radius: 0; 
    }


    .buy-btn {
        border: 1px solid #ffc826; 
        -webkit-border-radius: 3px; 
        -moz-border-radius: 3px;
        border-radius: 3px;
        font-size: 15px;
        font-family: arial, helvetica, sans-serif; 
        padding: 11px 11px 11px 11px; 
        text-decoration: none; 
        display: inline-block;
        font-weight: bold; 
        color: #000000;
        background-color: #ffd65e; 
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ffd65e), to(#febf04));
        background-image: -webkit-linear-gradient(top, #ffd65e, #febf04);
        background-image: -moz-linear-gradient(top, #ffd65e, #febf04);
        background-image: -ms-linear-gradient(top, #ffd65e, #febf04);
        background-image: -o-linear-gradient(top, #ffd65e, #febf04);
        background-image: linear-gradient(to bottom, #ffd65e, #febf04);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffd65e, endColorstr=#febf04);
    }

    .buy-btn:hover {
        border: 1px solid #f7b800;
        background-color: #ffc92b; 
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ffc92b), to(#ce9a01));
        background-image: -webkit-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: -moz-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: -ms-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: -o-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: linear-gradient(to bottom, #ffc92b, #ce9a01);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffc92b, endColorstr=#ce9a01);
    }

</style>

<div class="container-fluid">
    <a href="#" onclick="goBack()"><h3>Go Back</h3></a>
    <br>
    <div class="row-fluid">
        <!-- product image -->
        <div class="col-lg-5">
            <img src="../../<?php echo $product->imagePath; ?>" class="image-responsive product-img" alt="Image Not Provided"/>
        </div>

        <!-- product data -->
        <div class="col-lg-7">
            <div class="row">

                <!-- product title -->
                <div class="row-fluid">
                    <h1><?php echo $product->name; ?></h1>
                </div>

                <!-- product seller -->
                <div class="row-fluid">
                    <div class="col-md-12">
                        <span>By: </span>
                        <span><?php echo User::get($product->sellerID)->email; ?></span>
                    </div>
                </div><!-- end row -->

                <!-- product price -->
                <div class="row-fluid">
                    <div class="col-md-7 bottom-rule">
                        <h2 class="product-price">  
                            <?php if ($product->isService == 0) { 
                                echo "$" . number_format($product->price, 2, '.', ''); 
                            }

                            else {
                                echo "$" . number_format($product->price, 2, '.', '') . " /hr"; 
                            }
                            ?>               
                        </h2>
                    </div>

                <?php if ($product->isService == 0) : ?>
                </div><!-- end row -->

                <!-- product condition -->
                <div class="row-fluid">
                    <div class="col-md-12 bottom-rule">
                        <h4 class="product-price">Condition: <?php echo $product->quality; ?></h4>
                        <br><br>
                    </div>
                </div><!-- end row -->
                
                <!-- quantity, buy it now buttons -->
                <div class="row-fluid add-to-cart">


                    <!-- change quantity -->
                    <div class="col-md-4 product-qty">

                        <!-- minus button -->
                        <button type="button" class="btn btn-number btn-default btn-lg btn-qty" data-type="minus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                        </button>

                        <!-- quantity input box -->
                        <input class="btn btn-default btn-lg btn-qty form-control input-number" type="text" name="quant[2]" value="1" min="1" max="<?php echo $product->quantity; ?>" />

                        <!-- plus button -->
                        <button type="button" class="btn btn-number btn-default btn-lg btn-qty" data-type="plus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </button>

                    </div>

                    <!-- buy it now -->
                    <div class="col-md-4">
                        <a href="<?php echo URL . "product/confirmation/$product->productID"; ?>"" class="btn btn-info btn-size buy-btn ">Buy It Now</a>   
                    </div>
                </div><!-- end row -->


                <?php else : ?>
                    <!-- buy it now buttons -->
                    <div class="col-md-5 add-to-cart">
                        <!-- buy it now -->
                        <a href="<?php echo URL . "product/confirmation/$product->productID"; ?>" class="btn btn-info btn-size buy-btn ">Buy It Now</a>   
                    </div><!-- end row -->
                </div>

                <?php endif; ?> <!-- end if statement -->


            </div><!-- end row -->
            <hr>
            <div class="row">
                <h4><u>Description:</u></h4>
                <br>
                <!-- Tab panes -->
                <div id="description">
                    <p>
                        <?php echo $product->description; ?> 
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <h4><u>Video:</u></h4>
                <br>
                <!-- Tab panes -->
                <div role="tabpanel" class="tab-pane active">
                    <p class="top-10">
                        <?php if (!empty($product->videoUrl) && strstr($product->videoUrl, 'youtube.com')) { ?>
                            <iframe width="420" height="345" src="<?php echo $product->videoUrl; ?> ">    
                            </iframe>
                        <?php } else { ?>
                            No video available.
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div><!-- end container -->
    <hr>
</div>