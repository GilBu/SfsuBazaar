<?php

/**
 * Singleton class Database
 */

class Database 
{   
    private $db = null;
    private static $instance = null;

    private function __construct() 
    {
        $this->db = $this->openDatabaseConnection();
    }
        
    private function __clone() {}
    
    public static function getInstance()
    {   
        if (!isset(self::$instance)) 
        {
            try 
            {   
                self::$instance = new Database();
            } 
            catch (PDOException $e) 
            {
                exit('Database connection could not be established.');
            }
        }
        
        return self::$instance;
    }
    
    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        return new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);        
    } 
    
    
    /************************ User queries ************************************/
    
    public function addUser($firstName, $lastName, $password, $email, $imagePath)
    {
	$sql =  "INSERT INTO user " .
		"(firstName, lastName, password, email, imagePath)" .
		"VALUES " .
		"(:firstName, :lastName, :password, :email, :imagePath)";
	$query = $this->db->prepare($sql);
	$param = array(	':firstName' 	=> $firstName,
			':lastName' 	=> $lastName,
			':password'	=> $password,
			':email' 	=> $email,
			':imagePath'	=> $imagePath	);

	$query->execute($param);
    }

    public function getUserByID($userID)
    {
	$sql =  "SELECT " .
		"userID" .
		"FROM users WHERE " .
		"userID = :userID LIMIT 1";
	$query = $this->db->prepare($sql);
	$params = array(':userID'	=> $userID);

	$query->execute($params);
    }

    public function updateUser(	$firstName, $lastName, $password,
				$email, $imagePath, $userID	)
    {
	$sql = 	"UPDATE song SET " .
		"firstName = :firstName, lastName = :lastName," .
		"password = :password, email = :email," .
		"imagePath = :imagePath" .
		"WHERE userID = :userID";
	$query = $this->db->prepare($sql);
	$params = array(	':firstName'	=> $firstName,
				':lastName'	=> $lastName,
				':password'	=> $password,
				':email'	=> $email,
				':imagePath'	=> $imagePath,
				':userID'	=> $userID	);

	$query->execute($params);
    }

    public function deleteUser($userID)
    {
	$sql =  "DELETE FROM users WHERE userID = :userID";
	$query = $this->db->prepare($sql);
	$params = array(':userID' => $userID);

	$query->execute($params);
    }
    
    
    
    
    
    /************************ Product queries *********************************/
    
     /**
     * Gets all data of the product table from the database
     * @return Array of product objects
     */
    public function getAllProducts()
    {
        $sql = "SELECT * FROM product";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    /**        
     * Get all products from the database with a similiar keyword in name
     *
     */
    public function getProductsByName($keyword)
    {
        $sql = "SELECT * FROM product WHERE name LIKE '%$keyword%'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    /**
     * Get the product with the giving id
     * @param int $id
     */
    public function getProductByID($id)
    {
        $sql = "SELECT * FROM product WHERE id = :id LIMIT 1";
        $query = $this->db->prepare($sql);
        $param = array(':id' => $id); 
        $query->execute($param);
        
        return $query->fetch();
    }
    
     /**
     * Delete the product with the giving id
     * @param int $id
     */
    public function deleteProductByID($id)
    {
        $sql = "DELETE FROM product WHERE id = :id";
        $query = $this->db->prepare($sql);
        $param = array(':id' => $id); 
        $query->execute($param);
    }

    
    /**
     * Add a product to the db
     * @param Product with all data about the product
     */
    public function addProduct($product) 
    {
        $sql = "INSERT INTO product " .
               "(name, seller_id, price, quantity, quality, imagePath, "
                . "videoUrl, description, tags, is_service)" .
               "VALUES ".
               "(:name, :seller_id, :price, :quantity, :quality, :imagePath, "
                . ":videoUrl, :description, :tags, :is_service)";
               
        $query = $this->db->prepare($sql);
        $param = array( ':name' => $product->name, 
                        ':seller_id' => $product->sellerID,
                        ':price' => $product->price, 
                        ':quantity' => $product->quantity, 
                        ':quality' => $product->quality, 
                        ':imagePath' => $product->imagePath,
                        ':videoUrl' => $product->videoUrl,
                        ':description' => $product->description, 
                        ':tags' => $product->tags, 
                        ':is_service' => $product->isService);
        
        $query->execute($param);
    }
    
    
    
    
    
    
    
    
    
    
    
    

    /**
     * Get all products from db with the giving name
     * @param string $name
     * @return Array Contain products with the same name in db
     */
//    public function getByName($name) 
//    {
//        $sql = "SELECT * FROM products WHERE name = '$name'";
//        $query = $this->db->prepare($sql);
//        $query->execute();
//        
//        return $query->fetchAll();
//    }
    
    /**
     * Change a Associative Array to the PDO param format
     * i.e. change array['key']['value'] to array[':key']['value']
     * @param Associative Array $array
     * @return Associative Array in PDO param format
     */
//    public function arrayToPDOParam($array)
//    {
//        $PDOParam = array();
//        
//        foreach ($array as $key => $value) 
//        {
//            $PDOParam[":$key"] = $value;
//        }
//        
//        return $PDOParam;
//    }
}
