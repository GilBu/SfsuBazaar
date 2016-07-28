<style>

    .product-img{
        width: 400px;
        height: 400px;
    }

    .add-to-cart .btn-qty {
        width: 52px;
        height: 46px;
    }

    .add-to-cart .btn-size {
        height: 46px;
    }

    .add-to-cart .btn { 
        border-radius: 0; 
    }

    .divider {
        height: 1px;
        width:100%;
        display:block; /* for use on default inline elements like span */
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5;
    }
</style>

<!-- change quantity script -->
<script>

    $(document).ready(function () {
        $('.btn-number').click(function (e) {
            e.preventDefault();

            var fieldName = $(this).attr('data-field');
            var type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    var minValue = parseInt(input.attr('min'));
                    if (!minValue)
                        minValue = 1;
                    if (currentVal > minValue) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == minValue) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {
                    var maxValue = parseInt(input.attr('max'));
                    if (!maxValue)
                        maxValue = 9999999999999;
                    if (currentVal < maxValue) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == maxValue) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function () {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function () {

            var minValue = parseInt($(this).attr('min'));
            var maxValue = parseInt($(this).attr('max'));
            if (!minValue)
                minValue = 1;
            if (!maxValue)
                maxValue = 9999999999999;
            var valueCurrent = parseInt($(this).val());

            var name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });

        // Allows key press functions
        $(".input-number").keydown(function (e) {
            // Allows backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allows Ctrl+A
                            (e.keyCode == 65 && e.ctrlKey === true) ||
                            // Allows home, end, left, right
                                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
    });

</script>

<div class="container" id="product-section">
    <div class="row">

        <!-- product image -->
        <div class="col-md-5">
            <img src="../../<?php echo $product->imagePath; ?>" class="image-responsive product-img"/>
        </div>

        <!-- product data -->
        <div class="col-md-7">
            <div class="row">

                <!-- product title -->
                <div class="row">
                    <h1><?php echo $product->name; ?></h1>
                </div>

                <!-- product seller and profile link -->
                <div class="row">
                    <div class="col-md-12">
                        <span>By: </span>
                        <span>
                            <a href="<?php echo URL; ?>">USERNAME</a>
                        </span>
                    </div>
                </div><!-- end row -->

                <!-- product/seller rating -->
                <div class="row">
                    <div class="col-md-5">
                        Sellers Rating: 
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <p>(# number of Reviews)</p>
                    </div>
                </div>

                <!-- product price -->
                <div class="row">
                    <div class="col-md-12 bottom-rule">
                        <h2 class="product-price">$ <?php echo $product->price; ?></h2>
                    </div>
                </div><!-- end row -->

                <!-- product condition -->
                <div class="row">
                    <div class="col-md-12 bottom-rule">
                        <h3 class="product-price">Condition:</h3>
                        <p><?php echo $product->quality; ?></p>
                    </div>
                </div><!-- end row -->

                <!-- sellers schedule -->
                <div class="row">
                    <div class="col-md-12 bottom-rule">
                        <h3 class="product-price">Schedule: </h3>
                        <p>Day: Su M T W Th F S</p>
                        <p>Time:  0:00 to 0:00</p>
                        <p>Location: </p>
                    </div>
                </div><!-- end row -->
                <br>

                <!-- quantity, add to cart, buy it now buttons -->
                <div class="row add-to-cart">
                    <!-- change quantity -->
                    <div class="col-md-4 product-qty">

                        <!-- minus button -->
                        <button type="button" class="btn btn-number btn-default btn-lg btn-qty" data-type="minus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                        </button>

                        <!-- quantity input box -->
                        <input class="btn btn-default btn-lg btn-qty form-control input-number" type="text" name="quant[2]" value="1" min="1" max="10" />

                        <!-- plus button -->
                        <button type="button" class="btn btn-number btn-default btn-lg btn-qty" data-type="plus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </button>

                    </div>
                    <!-- add to cart button -->
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-lg btn-brand btn-full-width btn-size" value="Add To Cart">

                    </div>
                    <!-- buy it now -->
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-lg btn-brand btn-full-width btn-size" value="Buy it Now">
                    </div>
                </div><!-- end row -->

                <div class="row">
                    <div class="col-md-12 bottom-rule top-10"></div>
                </div><!-- end row -->			
            </div><!-- end row -->
        </div>
    </div><!-- end container -->

    <li class="divider"></li>

    <div class="container-fluid">
        <div class="row-fluid">
            <!-- Nav tabs -->
            <h4><u>Description:</u></h4>
            <br>
            <!-- Tab panes -->
            <div role="tabpanel" class="tab-pane active" id="description">
                <p class="top-10">
                    <?php echo $product->description; ?> 
                </p>
            </div>

            <br>
        </div>
    </div>

    <li class="divider"></li>

    <!-- Similar Products -->
    <div class="container-fluid">  
        <div class="row-fluid">
            <br>

            <h4><u>Similar Products:</u></h4> 

            <!-- see more related products in listing -->
            <div align="right">
                <small><a href="<?php echo URL; ?>">(see more)</a></small>
            </div>

            <br>

            <!-- Product -->
            <div class="col-sm-5 col-md-2 ">

                <!-- Product Link -->
                <a href="#"> 
                    <!-- Product Img -->
                    <img src="http://placehold.it/200x200/000/fff" alt="img1" style="width:100px;height:100px">

                    <!-- Product Info-->
                    <p class="product-summary">
                        Name <br>
                        Price <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <br>
                        <sup>(# of Reviews)</sup> 
                    </p>  

                    <!-- Buttons -->
                    <input type="submit" class="btn btn-info" value="Add To Cart">  
                    <input type="submit" class="btn btn-info" value="Buy It Now">   
                </a>
            </div> <!-- end of product -->

            <div class="col-sm-5 col-md-2">
                <a href="#g" >
                    <img src="http://placehold.it/200x200/000/fff" alt="img3" style="width:100px;height:100px">
                    <p class="product-summary">
                        Name <br>
                        Price <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <br>
                        <sup>(# of Reviews)</sup> 
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart">    
                    <input type="submit" class="btn btn-info" value="Buy It Now"> 
                </a>
            </div>
            <div class="col-sm-5 col-md-2">
                <a href="#" >   
                    <img src="http://placehold.it/200x200/000/fff" alt="img4" style="width:100px;height:100px">
                    <p class="product-summary">
                        Name <br>
                        Price <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <br>
                        <sup>(# of Reviews)</sup> 
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart">   
                    <input type="submit" class="btn btn-info" value="Buy It Now">  
                </a>
            </div>
            <div class="col-sm-5 col-md-2">
                <a href="#"> 
                    <img src="http://placehold.it/200x200/000/fff" alt="img1" style="width:100px;height:100px">
                    <p class="product-summary">
                        Name <br>
                        Price <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <br>
                        <sup>(# of Reviews)</sup> 
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart"> 
                    <input type="submit" class="btn btn-info" value="Buy It Now">     
                </a>
            </div>
            <div class="col-sm-5 col-md-2">
                <a href="#">
                    <img src="http://placehold.it/200x200/000/fff" alt="img3" style="width:100px;height:100px">
                    <p class="product-summary">
                        Name <br>
                        Price <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <br>
                        <sup>(# of Reviews)</sup> 
                    </p>  
                    <input type="submit" class="btn btn-info" value="Add To Cart">  
                    <input type="submit" class="btn btn-info" value="Buy It Now">  
                </a>
            </div>
            <div class="col-sm-5 col-md-2">
                <a href="#">     
                    <img src="http://placehold.it/200x200/000/fff" alt="img4" style="width:100px;height:100px">
                    <p class="product-summary">
                        Name <br>
                        Price <br>
                        <span class="glyphicon glyphicon-thumbs-up"> %%  |</span>
                        <span class="glyphicon glyphicon-thumbs-down"> %%</span> 
                        <br>
                        <sup>(# of Reviews)</sup> 
                    </p> 
                    <input type="submit" class="btn btn-info" value="Add To Cart"> 
                    <input type="submit" class="btn btn-info" value="Buy It Now"> 
                </a>
            </div>
        </div> <!-- end of row -->

    </div>
</div>
