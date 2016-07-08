<?php

class Listing extends Controller
{
    public function index($products = '')
    {
       
        if ($products == '') {
            $products = $this->model->getAllProducts();
        }
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/listing/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function search() {
        if (isset($_POST['search'])) {
            //$searchTerm = $_POST["search-term"];
            $searchTerm = filter_input(INPUT_POST, 'search-term');
        }
        
        $products = $this->model->getProductsByName($searchTerm);
        
        $this->index($products);
    }
}
