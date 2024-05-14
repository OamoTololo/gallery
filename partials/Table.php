<?php
require_once 'includes/Database.php';
class Image extends Database
{
    protected $tableName = "image";

    // function to add image
    public function addImage($data)
    {
        if (!empty($data)) {
            $fields = $placeholder = [];
            foreach ($data as $key => $value) {
                $fields[] = $key;
                $placeholder[] = $value;

            }
        }
        $insertImage = "INSERT INTO {$this->tableName} (" . implode(',', $fields) . ") VALUES (" . implode(',', $placeholder) . ")";
        $insertStatement = $this->dbConnection->prepare($insertImage);

        try {
            $this->dbConnection->beginTransaction();
            $insertStatement->execute($data);
            $lastInsertedId = $this->dbConnection->lastInsertId();
            $this->dbConnection->commit();
            return $lastInsertedId;

        }catch (PDOException $e) {
            echo $e->getMessage();
            $this->dbConnection->rollBack();
        }
    }
    // function to get rows

    //function to get single row

    // function to count number of rows

    // function to upload image

    // function to update image

    // function to delete image

    // function to search image
}

?>