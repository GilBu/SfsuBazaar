<?php

class Listing extends Controller
{
    public function index($results = '')
    {
        if ($results == '') 
        {
            $results = $this->products->getAll();
        }
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/listing/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function search()
    {
        $searchedKeyword = '';

        if(isset($_POST['search']))
        {
            $searchedKeyword = filter_input(INPUT_POST, 'search-term');
        }
        $results = $this->products->getProductsByKeywords($searchedKeyword);

        $this->index($results);
    }
}
