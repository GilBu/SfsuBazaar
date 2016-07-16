<?php

class Product
{   
    private $id;
    private $name;
    private $sellerID;
    private $isService;
    private $price;
    private $imagePath;
    private $videoUrl;
    private $quanlity;
    private $quantity;
    private $description;
    private $tags;
    private $meetupId;
    
    private $createAt;
    private $updatedAt;
    
    private static $tableName = 'products';

    public function __construct()
    {
        
    }
    
    public function create()
    {
        
    }
    
    public function get()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function delete()
    {
        
    }
    
    public static function all()
    {   
        return Database::getInstance()->getAll(self::$tableName);
    }
    
    public static function withKeywordInName($keyword)
    {
        return Database::getInstance()->getByKeywordInName(self::$tableName, $keyword);
    }




































    /**
     * Gets all existing products from the database
     * @return Array Contain all the exiting products in db
     */
    public function getAll() 
    {
        $sql = 'SELECT * FROM products';
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    /**
     * Get the product with the giving id
     * @param int $id
     */
    public function getById($id)
    {
        
    }

    /**
     * Get all products from db with the giving name
     * @param string $name
     * @return Array Contain products with the same name in db
     */
    public function getByName($name) 
    {
        $sql = "SELECT * FROM products WHERE name = '$name'";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    /**        
     * Get all products from database similiar to keywords searched
     *
     */
    public function getByKeywords($keyword)
    {
        $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * Add a product to the db
     * @param Associative Array $product with all data about the product
     */
    public function add($product) 
    {
        $sql = "INSERT INTO products " .
               "(name, price, seller_id, picture, video, description)" .
               "VALUES ".
               "(:name, :price, :seller_id, :picture, :video, :description)";
               
        $query = $this->db->prepare($sql);
        $param = $this->arrayToPDOParam($product);
        
        $query->execute($param);
    }
    
    /**
     * Change a Associative Array to the PDO param format
     * i.e. change array['key']['value'] to array[':key']['value']
     * @param Associative Array $array
     * @return Associative Array in PDO param format
     */
    public function arrayToPDOParam($array)
    {
        $PDOParam = array();
        
        foreach ($array as $key => $value) 
        {
            $PDOParam[":$key"] = $value;
        }
        
        return $PDOParam;
    }
}

