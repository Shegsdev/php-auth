<?php

include($_SERVER['DOCUMENT_ROOT'].'\auth_system\api\autoload.php');

define('DB_HOST', env('DB_HOST'));
define('DB_NAME', env('DB_NAME'));
define('DB_USERNAME', env('DB_USERNAME'));
define('DB_PASSWORD', env('DB_PASSWORD'));


class Database {

    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    public $conn;

    public function getConnection() {
 
        $this->conn = null; 
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>