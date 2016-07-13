<?php

/* 
 * Class Product
 */

class Product extends Controller
{   
    /**
     * PAGE: index
     * Renders the product's index page
     */
    public function index() 
    {
        
    }
    
    /**
     * PAGE: add
     * Renders the product's add page
     */
    public function add()
    {   
        require APP . 'view/_templates/header.php';
        require APP . 'view/product/add.php';
        require APP . 'view/_templates/footer.php';
    }
    
    /**
     * ACTION: save
     * Saves the product infomation to the database
     */
    public function save()
    {
        // check if the form is set
        if (isset($_POST['addProduct']))
        {
            // get all data about the product
            $product = $this->getData();
            
            // save product to database
            $this->products->add($product);
        }
        
        // redirect to listing/index page
        header('location: ' . URL . 'listing/index');
    }
    
    /**
     * ACTION HELPER: getData
     * Get all the product's data
     * @return Associative Array with all data about the product
     */
    private function getData()
    {   
        $product = array();
        
        $product['name'] = filter_input(INPUT_POST, 'name');
        $product['price'] = filter_input(INPUT_POST, 'price');
        $product['seller_id'] = filter_input(INPUT_POST, 'seller_id');
        $product['picture'] = $this->processUploadedImage('picture');
        $product['video'] = filter_input(INPUT_POST, 'video');
        $product['description'] = filter_input(INPUT_POST, 'description');
        
        return $product;
    }
    
    /**
     * ACTION HEPLER: processUploadedImage
     * Get the uploaded image and move to the img directory
     * @param string $name name of (HTML)field
     * @return string Path of the image
     */
    private function processUploadedImage($name)
    {   
        $imagePath = "";
        $imageDir = '../public/img/';
        $tmpPath = $_FILES["$name"]['tmp_name'];
        
        if (is_uploaded_file($tmpPath))
        { 
            $imagePath = $imageDir . $_FILES["$name"]['name'];
            move_uploaded_file($tmpPath, $imagePath);
        }
        
        return $imagePath;
    }
}