<style>
    .product-summary {
        font-size: 75%;
        width: 100px;	
    }

    .bottom-padding {
        padding-bottom: 20px;
    }

    .txt-overflow-hidden {
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: ellipsis; 
    }

    .sm-buy-btn {
        border: 1px solid #ffc826; 
        -webkit-border-radius: 3px; 
        -moz-border-radius: 3px;
        border-radius: 3px;
        font-size: 15px;
        font-family: arial, helvetica, sans-serif; 
        padding: 5px 8px 5px 8px; 
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

    .sm-buy-btn:hover {
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

<!-- Featured Products -->
<div class="container-fluid">  
    <div class="row-fluid">
        <h2>Featured:</h2>     
        <?php for ($i = 0, $size = count($featuredProducts); ($i < 6 && $i < $size); $i++) { ?>
            <div class="col-sm-5 col-md-2 bottom-padding">
                <a href="product/index/<?php echo $featuredProducts[$i]->productID; ?>" > 
                    <img src="<?php echo $featuredProducts[$i]->imagePath; ?>" alt="Cannot load image." style="width:100px;height:100px">
                    <p class="txt-overflow-hidden">
                        <?php echo $featuredProducts[$i]->name; ?> <br>
                        <?php echo "$" . number_format($featuredProducts[$i]->price, 2, '.', ''); ?> <br>
                    </p>    
                    <a href="product/confirmation/<?php echo $featuredProducts[$i]->productID; ?>" class="btn btn-info sm-buy-btn">Buy It Now</a>  
                </a>
            </div>
        <?php } ?> <!-- end of product detail-->
    </div> <!-- end row -->
</div> <!-- end container -->

<hr>

<!-- Recently Posted Products -->
<div class="container-fluid">  
    <div class="row-fluid">
        <h2>Recently Posted:</h2>     
        <?php for ($i = 0, $size = count($featuredProducts); ($i < 6 && $i < $size); $i++) { ?>
            <div class="col-sm-5 col-md-2 bottom-padding">
                <a href="product/index/<?php echo $featuredProducts[$i]->productID; ?>" > 
                    <img src="<?php echo $featuredProducts[$i]->imagePath; ?>" alt="Cannot load image." style="width:100px;height:100px">
                    <p class="txt-overflow-hidden">
                        <?php echo $featuredProducts[$i]->name; ?> <br>
                        <?php echo "$" . number_format($featuredProducts[$i]->price, 2, '.', ''); ?> <br>
                    </p>    
                    <a href="product/confirmation/<?php echo $featuredProducts[$i]->productID; ?>" class="btn btn-info sm-buy-btn">Buy It Now</a>  
                </a>
            </div>
        <?php } ?> <!-- end of product detail-->
    </div> <!-- end row -->
</div> <!-- end container -->