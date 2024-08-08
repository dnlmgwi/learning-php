<?php

include "./config/database.php";

// Connecting to SQL Database
class DbRepository
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
    public function initUserTable()
    {
        // Create connection
        $conn = $this->db->getConnection();
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL UNIQUE,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL
            );
        ";

        if (mysqli_query($conn, $sql)) {
            var_dump("User Table Created");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // mysqli_close($conn);
    }

    // Destructor to close the connection
    public function __destruct()
    {
        if ($this->db) {
            $this->db;
        }
    }
}