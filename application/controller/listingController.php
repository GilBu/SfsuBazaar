<?php

class ListingController extends Controller
{
    public function index($products = '')
    {
        if ($products == '') 
        {
            $products = Product::all();
        }
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/listing/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function search()
    {
        $products= '';

        if (isset($_GET['search']))
        {
            $keyword = filter_input(INPUT_GET, 'search-term');
        }
        
        if ($keyword != ''){
            $products = Product::withKeywordInName($keyword);
        }
         
        $this->index($products);
    }
}
