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
        $this->openDatabaseConnection();
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
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);        
    }
    
    /**
     * Gets all data of a table from the database
     * @param string $table Name of the table
     * @return Object Array
     */
    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    /**        
     * Get all data from database similiar to keyword searched in name
     *
     */
    public function getByKeywordInName($table, $keyword)
    {
        $sql = "SELECT * FROM $table WHERE name LIKE '%$keyword%'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

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

    public function updateSong(	$firstName, $lastName, $password,
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

    public function deleteUser (userID)
    {
	$sql =  "DELETE FROM users WHERE userID = :userID";
	$query = $this->db->prepare($sql);
	$params = array(':userID' => $userID);

	$query->execute($params);
    }
    /**
     * Get the product with the giving id
     * @param int $id
     */
//    public function getById($id)
//    {
//        
//    }

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
     * Add a product to the db
     * @param Associative Array $product with all data about the product
     */
//    public function add($product) 
//    {
//        $sql = "INSERT INTO products " .
//               "(name, price, seller_id, picture, video, description)" .
//               "VALUES ".
//               "(:name, :price, :seller_id, :picture, :video, :description)";
//               
//        $query = $this->db->prepare($sql);
//        $param = $this->arrayToPDOParam($product);
//        
//        $query->execute($param);
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
