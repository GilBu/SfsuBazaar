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
            display: block; padding: .6rem; min-width:320px;
        }
        table#product tbody tr td:first-child { 
            background: #333; color: #fff; 
        }
        table#product tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }

        table#product tfoot td{
            display:block; 
        }
        table#product tfoot td .btn{
            display:block;
        }

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
                <th style="width:40%">Product</th>
                <th style="width:30%">Seller</th>
                <th style="width:30%">Price</th>
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
                            <h4><?php echo $product->name; ?></h4>
                        </div>
                    </div>
                    
                </td>

                <!-- Seller Username -->
                <td data-th="Seller">????????????????</td>

                <!-- Product Price -->
                <td data-th="Price"> $ <?php echo $product->price; ?></td>

            </tr>
        </tbody>

        <!-- Cancel/Confirm Purchase -->
        <tfoot>
            <!-- Cancel/Confirm Purchase Button -->
            <tr>
                <td><a href="#" class="btn btn-warning" onclick="goBack()"><i class="fa fa-angle-left"></i> Cancel</a></td>
                <td colspan="1" class="hidden-xs"></td>
                <td><a href="#" class="btn btn-success btn-block" onclick="msgSent(), goBack()"> Confirm<i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
