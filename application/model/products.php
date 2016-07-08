<?php

class Products extends Model
{
    /**
     * Gets all existing products from the database
     */
    public function getAllProducts() 
    {
        $sql = 'SELECT * FROM products';
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }

    /**
     * Get all products from database with the giving name
     * @param string $name
     */
    public function getProductsByName($name) 
    {
        $sql = "SELECT * FROM products WHERE name = '$name'";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
}

