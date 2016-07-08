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
            if (!empty($results)) 
            {
                foreach ($results as $result) 
                {
                    echo '<tr>';
                    echo "<td>$result->name</td>";
                    echo "<td>$result->price</td>";
                    echo "<td>$result->seller_id</td>";
                    echo "<td>$result->picture</td>";
                    echo "<td>$result->video</td>";
                    echo "<td>$result->description</td>";
                }
            } else {
                echo '<p>No product matches the search.</p>';
            }
        ?>
        
    </table>
    
</div>

