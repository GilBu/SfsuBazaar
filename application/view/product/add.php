<div class="container">
    <div class="box">
        <h3>Add a product</h3>
        <form enctype="multipart/form-data" action="<?php echo URL; ?>product/save" method="POST">
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
            <input type="file" name="picture"/>
            <br>
            <label>video</label>
            <input type="text" name="video" value=""/>
            <br>
            <label>description</label>
            <input type="text" name="description" value=""/>
            <br>
            <input type="submit" name="addProduct" value="Add" />
        </form>
    </div>
    
</div>