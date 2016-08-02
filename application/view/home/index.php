<style>
    .product-summary {
        font-size: 75%;
        width: 100px;	
    }

    .txt-overflow-hidden {
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: ellipsis; 
    }
</style>

<!-- Featured Products -->
<div class="container-fluid">  
    <div class="row-fluid">
        <h2>Featured:</h2>     
        <?php for ($i = 0, $size = count($featuredProducts); ($i < 6 && $i < $size); $i++) { ?>
            <div class="col-sm-5 col-md-2 ">
                <a href="product/index/<?php echo $featuredProducts[$i]->productID; ?>" > 
                    <img src="<?php echo $featuredProducts[$i]->imagePath; ?>" alt="Cannot load image." style="width:100px;height:100px">
                    <p class="product-summary inner txt-overflow-hidden">
                        <?php echo $featuredProducts[$i]->name; ?> <br>
                        $ <?php echo $featuredProducts[$i]->price; ?> <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span>  <br>
                        (# of Reviews) <br>
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart">    
                    <input type="submit" class="btn btn-info" value="Buy It Now">    
                </a>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Featured Products -->
<div class="container-fluid">  
    <div class="row-fluid">
        <h2>Featured:</h2>     
        <?php for ($i = 0, $size = count($featuredProducts); ($i < 6 && $i < $size); $i++) { ?>
            <div class="col-sm-5 col-md-2 ">
                <a href="product/index/<?php echo $featuredProducts[$i]->productID; ?>" > 
                    <img src="<?php echo $featuredProducts[$i]->imagePath; ?>" alt="Cannot load image." style="width:100px;height:100px">
                    <p class="product-summary inner txt-overflow-hidden">
                        <?php echo $featuredProducts[$i]->name; ?> <br>
                        $ <?php echo $featuredProducts[$i]->price; ?> <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span>  <br>
                        (# of Reviews) <br>
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart">    
                    <input type="submit" class="btn btn-info" value="Buy It Now">    
                </a>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Featured Products -->
<div class="container-fluid">  
    <div class="row-fluid">
        <h2>Featured:</h2>     
        <?php for ($i = 0, $size = count($featuredProducts); ($i < 6 && $i < $size); $i++) { ?>
            <div class="col-sm-5 col-md-2 ">
                <a href="product/index/<?php echo $featuredProducts[$i]->productID; ?>" > 
                    <img src="<?php echo $featuredProducts[$i]->imagePath; ?>" alt="Cannot load image." style="width:100px;height:100px">
                    <p class="product-summary inner txt-overflow-hidden">
                        <?php echo $featuredProducts[$i]->name; ?> <br>
                        $ <?php echo $featuredProducts[$i]->price; ?> <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span>  <br>
                        (# of Reviews) <br>
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart">    
                    <input type="submit" class="btn btn-info" value="Buy It Now">    
                </a>
            </div>
        <?php } ?>
    </div>
</div>

