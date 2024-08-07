<?php

include "./config/database.php";

// Connecting to SQL Database
class AuthRepository
{
    // Property declaration
    private $db;

    // Constructor to establish the connection
    public function __construct()
    {
        // Establish connection
        $this->db = new Database();
    }

    // Method to get the connection
    public function createUser()
    {
        return $this->db->getConnection();
    }

    // Destructor to close the connection
    public function __destruct()
    {
        if ($this->db) {
            $this->db;
        }
    }
}
