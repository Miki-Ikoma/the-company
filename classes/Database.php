<?php
  class Database{
    #Properties
    private $server_name = "localhost";
    private $username = "root";
    private $password = "root"; // For MAMP users, use "root" as password.
    private $db_name = "the_company";
    protected $conn;

    public function __construct(){
      // 'localhost' = $this->server_name, 'root' = $this->username, ...
      $this->conn = new mysqli( $this->server_name, $this->username, $this->password, $this->db_name);

      if($this->conn->connect_error){
        die("Unable to connect to the database: " . $this->conn->connect_error);
      }
    }
  }


?>