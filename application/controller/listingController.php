<?php

class ListingController extends Controller
{
    public function index($products = '')
    {
        if ($products == '') 
        {
            //$results = $this->products->getAll();
            $products = Product::all();
            
        }
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/listing/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function search()
    {
        $keyword = '';

        if(isset($_POST['search']))
        {
            $keyword = filter_input(INPUT_POST, 'search-term');
        }
        $products = Product::withKeywordInName($keyword);

        $this->index($products);
    }
}
