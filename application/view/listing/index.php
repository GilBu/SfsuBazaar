<div class="container">
    <h2>This is the index of listing</h2>
    
    <!--
    <p>showing products <?php //echo $products ?></p>
    -->
    
    <table>
        <tr>
            <td>name</td>
            <td>seller_id</td>
            <td>price</td>
            <td>quantity</td>
            <td>quality</td>
            <td>image</td>
            <td>video Url</td>
            <td>description</td>
            <td>tags</td> 
        </tr>

        <?php
            if (!empty($products)) 
            {
                foreach ($products as $product) 
                {
                    echo '<tr>';
                    echo '<td><a href="'. URL . "product/index/$product->id" . '">' . $product->name . '</a></td>';
                    echo "<td>$product->seller_id</td>";
                    echo "<td>$product->price</td>";
                    echo "<td>$product->quantity</td>";
                    echo "<td>$product->quality</td>";
                    if (empty($product->imagePath))
                    {
                        echo '<td>No picture avaliable.</td>';
                    } else {
                        echo '<td><img src="'. $product->imagePath 
                            . '" alt="Image could not load." '
                            . 'style="width:100px;height:100px;"></td>';
                    }             
                    echo "<td>$product->videoUrl</td>";
                    echo "<td>$product->description</td>";
                    echo "<td>$product->tags</td>";
                }
            } else {
                echo '<p>No product matches the search.</p>';
            }
        ?>
        
    </table>
    
</div>

