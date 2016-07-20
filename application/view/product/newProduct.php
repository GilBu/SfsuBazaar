<div class="container">
    <div class="box">
        <h3>Add a product</h3>
        <form enctype="multipart/form-data" action="<?php echo URL; ?>product/add" method="POST">
            <label>name</label>
            <input type="text" name="name" value="" required />
            <br>
            <label>seller_id</label>
            <input type="text" name="sellerID" value="" required />
            <br>
            <label>price</label>
            <input type="text" name="price" value="" required />
            <br>
            <label>quantity</label>
            <input type="text" name="quantity" value="" required />
            <br>
            <label>quality</label>
            <input type="text" name="quality" value=""/>
            <br>
            <label>image</label>
            <input type="file" name="image"/>
            <br>
            <label>video URL</label>
            <input type="text" name="videoUrl" value=""/>
            <br>
            <label>description</label>
            <input type="text" name="description" value=""/>
            <br>
            <label>tags</label>
            <input type="text" name="tags" value=""/>
            <br>
            <label>Is this a service? (check only one)</label>
            <br>
            <input type="checkbox" name="isService" value="1"/> Yes
            <br>
            <input type="checkbox" name="isService" value="0"/> No
            <br>
            <input type="submit" name="addProduct" value="Add" />
        </form>
    </div>
</div>