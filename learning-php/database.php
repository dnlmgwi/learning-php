<?php

// Connecting to SQL Database
class Database
{
    // Property declaration
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "learning_php";
    private $conn;

    // Constructor to establish the connection
    public function __construct()
    {
        // Establish connection
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to get the connection
    public function getConnection()
    {
        return $this->conn;
    }

    // Destructor to close the connection
    public function __destruct()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
