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
    
    public function browse() 
    {
        $this->index($this->products->getAll());
    }


    public function search()
    {
        $searchTerm = '';
        
        if (isset($_POST['search'])) 
        {
            //$searchTerm = $_POST["search-term"];
            $searchTerm = filter_input(INPUT_POST, 'search-term');
            
            $results = $this->products->getByName($searchTerm);
        }
        
        $this->index($results);
    }
}
