<?php
class Database
{
    private $databaseSignature = "mysql:host=localhost;dbname=image-gallery";
    private $dbUser = "root";
    private $dbPassword = "";

    public function __construct(){
        try {
            $pdo = new PDO($this->databaseSignature, $this->dbUser, $this->dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

$database = new Database();
?>