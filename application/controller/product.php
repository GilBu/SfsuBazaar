<?php

/* 
 * Class Product
 */

class Product extends Controller
{   
    
    public function index() 
    {
        
    }
    
    public function newProduct()
    {   
        require APP . 'view/_templates/header.php';
        require APP . 'view/product/newProduct.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function add()
    {
        $product = array();
        
        if (isset($_POST['addProduct']))
        {
            $product['name'] = filter_input(INPUT_POST, 'name');
            $product['price'] = filter_input(INPUT_POST, 'price');
            $product['seller_id'] = filter_input(INPUT_POST, 'seller_id');
            $product['picture'] = filter_input(INPUT_POST, 'picture');
            $product['video'] = filter_input(INPUT_POST, 'video');
            $product['description'] = filter_input(INPUT_POST, 'description');
            $product['hourly'] = filter_input(INPUT_POST, 'hourly');
            
            if ($product['hourly'] == "") 
            {
                $product['hourly'] = "0";
            }
                 
//            foreach ($product as $key => $value)
//            {
//                $product[$key] = filter_input(INPUT_POST, $value);
//            }
            
            $this->products->add($product);
        }
        
       // header('location: ' . URL . 'listing/index');
    }
}