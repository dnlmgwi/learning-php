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
    public function SignUp($email, $username, $password)
    {
        // Create connection
        $conn = $this->db->getConnection();
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO users (email, username, password ) VALUES ('{$email}', '{$username}', '{$password}')";

        if (mysqli_query($conn, $sql)) {
            echo "Created successfully";
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