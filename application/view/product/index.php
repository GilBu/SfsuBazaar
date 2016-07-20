<div class="container">
    <h2>This is the index of product</h2>
    
    <?php
        echo "<h4>id: $product->productID</h4>";
        echo "<h4>name: $product->name</h4>";
        echo "<h4>seller_id: $product->sellerID</h4>";
        echo "<h4>price: $product->price</h4>";
        echo "<h4>quantity: $product->quantity</h4>";
        echo "<h4>quality: $product->quality</h4>";
        echo '<img src="../'. $product->imagePath 
                            . '" alt="Image could not load." '
                            . 'style="width:300px;height:300px;">';
        echo "<h4>video Url: $product->videoUrl</h4>";
        echo "<h4>description: $product->description</h4>";
        echo "<h4>tags: $product->tags</h4>";
    ?>
    
    <form action="<?php echo URL; ?>product/delete/<?php echo $product->productID ?>">
        <input type="submit" value="Delete" />
    </form>
</div>

