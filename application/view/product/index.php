<style>

	.product-img{
		width: 450px;
		height: 450px;
	}
	.btn-qty {
		width: 52px;
		height: 46px;
	}

	.btn-size {
		height: 46px;
	}

	.btn { 
		border-radius: 0; 
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

<div class="container-fluid">
	<a href="#"><h3>Back To Search</h3></a>
	<br>
	<div class="row-fluid">
		<!-- product image -->
		<div class="col-lg-5">
			<img src="../../<?php echo $product->imagePath; ?>" class="image-responsive product-img"/>
		</div>

		<!-- product data -->
		<div class="col-lg-7">
			<div class="row">

				<!-- product title -->
				<div class="row-fluid">
					<h1><?php echo $product->name; ?></h1>
				</div>

				<!-- product seller -->
				<div class="row-fluid">
					<div class="col-md-12">
						<span>By: </span>

						<!-- PLACE SELLER USERNAME HERE -->
						<span><?php echo User::get($product->sellerID)->email; ?></span>
					</div>
				</div><!-- end row -->

				<!-- product price -->
				<div class="row-fluid">
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
				<br>

				<!-- quantity, buy it now buttons -->
				<div class="row-fluid add-to-cart">
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

					<!-- buy it now -->
					<div class="col-md-4">
						<input type="submit" class="btn btn-lg btn-brand btn-full-width btn-size" value="Buy it Now">
					</div>
				</div><!-- end row -->

		
			</div><!-- end row -->
			<hr>
			<div class="row">
				<h4><u>Description:</u></h4>
				<br>
				<!-- Tab panes -->
				<div role="tabpanel" class="tab-pane active" id="description">
					<p class="top-10">
						<?php echo $product->description; ?> 
					</p>
				</div>
			</div>
                        
                        <hr>
                        <div class="row">
				<h4><u>Video:</u></h4>
				<br>
				<!-- Tab panes -->
				<div role="tabpanel" class="tab-pane active">
					<p class="top-10">
                                            <?php if (!empty($product->videoUrl) && strstr($product->videoUrl, 'youtube.com')) { ?>
                                                <iframe width="420" height="345" src="<?php echo $product->videoUrl; ?> ">    
                                                </iframe>
                                            <?php } else { ?>
                                                No video available.
                                            <?php } ?>
					</p>
				</div>
			</div>
		</div>
	</div><!-- end container -->



	<hr>

</div>
</div>
