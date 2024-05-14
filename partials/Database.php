<?php
class Database
{
    private $databaseSignature = "mysql:host=localhost;dbname=image-gallery";
    private $dbUser = "root";
    private $dbPassword = "";

    private $dbConnection;

    public function __construct(){
        try {
            $this->dbConnection = new PDO($this->databaseSignature, $this->dbUser, $this->dbPassword);
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

$database = new Database();
?>