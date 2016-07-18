<div class="container">
    <h2>This is the index of listing</h2>
    
    <!--
    <p>showing products <?php //echo $products ?></p>
    -->
    
    <table>
        <tr>
            <td>name</td>
            <td>price</td>
            <td>seller_id</td>
            <td>picture</td>
            <td>video</td>
            <td>description</td>
        </tr>

        <?php
            if (!empty($products)) 
            {
                foreach ($products as $product) 
                {
                    echo '<tr>';
                    echo "<td>$product->name</td>";
                    echo "<td>$product->price</td>";
                    echo "<td>$product->seller_id</td>";
                    if (empty($product->picture))
                    {
                        echo '<td>No picture avaliable.</td>';
                    } else {
                        echo '<td><img src="'. $product->picture 
                            . '" alt="Image could not load." '
                            . 'style="width:100px;height:100px;"></td>';
                    }             
                    echo "<td>$product->video</td>";
                    echo "<td>$product->description</td>";
                }
            } else {
                echo '<p>No product matches the search.</p>';
            }
        ?>
        
    </table>
    
</div>

