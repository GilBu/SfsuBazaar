<style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }

    @media screen and (max-width: 600px) {
        table#product tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }

        table#product thead { 
            display: none; 
        }
        table#product tbody td { 
            display: block; 
            padding: .6rem; 
            min-width:320px;
        }
        table#product tbody tr td:first-child { 
            background: #333; 
            color: #fff; 
        }
        table#product tbody td:before {
            content: attr(data-th); 
            font-weight: bold;
            display: inline-block; 
            width: 8rem;
        }

        table#product tfoot td{
            display:block; 
        }
        table#product tfoot td .btn{
            display:block;
        }

    }


    .sm-buy-btn {
        border: 1px solid #ffc826; 
        -webkit-border-radius: 3px; 
        -moz-border-radius: 3px;
        border-radius: 3px;
        font-size: 15px;
        font-family: arial, helvetica, sans-serif; 
        padding: 5px 8px 5px 8px; 
        text-decoration: none; 
        display: inline-block;
        font-weight: bold; 
        color: #000000;
        background-color: #ffd65e; 
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ffd65e), to(#febf04));
        background-image: -webkit-linear-gradient(top, #ffd65e, #febf04);
        background-image: -moz-linear-gradient(top, #ffd65e, #febf04);
        background-image: -ms-linear-gradient(top, #ffd65e, #febf04);
        background-image: -o-linear-gradient(top, #ffd65e, #febf04);
        background-image: linear-gradient(to bottom, #ffd65e, #febf04);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffd65e, endColorstr=#febf04);
    }

    .sm-buy-btn:hover {
        border: 1px solid #f7b800;
        background-color: #ffc92b; 
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ffc92b), to(#ce9a01));
        background-image: -webkit-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: -moz-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: -ms-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: -o-linear-gradient(top, #ffc92b, #ce9a01);
        background-image: linear-gradient(to bottom, #ffc92b, #ce9a01);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffc92b, endColorstr=#ce9a01);
    }
</style>

<script>
function msgSent() {
    alert("Message has been sent to seller.");
}
function goBack() {
    window.history.back();
}
</script>

<div class="container">
    <h1>Confirm Purchase</h1>
    <table id="product" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:60%">Product</th>
                <th style="width:20%">Seller</th>
                <th style="width:20%">Price</th>
            </tr>
        </thead>

        <!-- Place Products Here -->
        <tbody>
            <tr>
                <!-- Product -->
                <td data-th="Product">

                    <!-- Product img and title -->
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                            <img src="../../<?php echo $product->imagePath; ?>"/>
                        </div>
                        <div class="col-sm-6">
                            <h4><b><?php echo $product->name; ?></b></h4>
                        </div>
                    </div>
                    
                </td>

                <!-- Seller Username -->
                <td data-th="Seller"><h6>????????????????</h6></td>

                <!-- Product Price -->
                <td data-th="Price"><h5><b><?php echo "$" . number_format($product->price, 2, '.', ''); ?></b></h5></td>

            </tr>
        </tbody>

        <!-- Cancel/Confirm Purchase -->
        <tfoot>
            <!-- Cancel/Confirm Purchase Button -->
            <tr>
                <td colspan="1" class="hidden-xs"></td>
                <td><a href="#" class="btn btn-link" onclick="goBack()"><i class="fa fa-angle-right"></i> Cancel</a></td>
                <td><a href="#" class="btn btn-success sm-buy-btn btn-block" onclick="msgSent(), goBack()"> Confirm<i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
