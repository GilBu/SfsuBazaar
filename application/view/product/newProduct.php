<div class="container">
    <div class="box">
        <h3>Add a product</h3>
        <form action="<?php echo URL; ?>product/add" method="POST">
            <label>name</label>
            <input type="text" name="name" value="" required />
            <br>
            <label>price</label>
            <input type="text" name="price" value="" required />
            <br>
            <label>seller_id</label>
            <input type="text" name="seller_id" value="" required />
            <br>
            <label>picture</label>
            <input type="text" name="picture" value=""/>
            <br>
            <label>video</label>
            <input type="text" name="video" value=""/>
            <br>
            <label>description</label>
            <input type="text" name="description" value=""/>
            <br>
            <label>hourly</label>
            <input type="text" name="hourly" value=""/>
            <br>
            <input type="submit" name="addProduct" value="Submit" />
        </form>
    </div>
    
</div>

