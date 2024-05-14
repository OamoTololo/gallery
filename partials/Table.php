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
    public function getRows($start = 0, $limit = 5)
    {
        try {
            $selectEverything = "SELECT * FROM {$this->tableName} ORDER BY imageId DESC LIMIT {$start}, {$limit}";
            $insertStatement = $this->dbConnection->prepare($selectEverything);
            $insertStatement->execute();

            if ($insertStatement->rowCount() > 0) {
                $results = $insertStatement->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $results = [];
            }
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //function to get single row
    public function getSingleRow($field, $value)
    {
        try {
            $selectRow = "SELECT * FROM {$this->tableName} WHERE {$field} = {$value}";
            $insertStatement = $this->dbConnection->prepare($selectRow);
            $insertStatement->execute();

            if ($insertStatement->rowCount() > 0) {
                $result = $insertStatement->fetch(PDO::FETCH_ASSOC);
            } else {
                $result = [];
            }
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // function to count number of rows
    public function getCount()
    {
        try {
            $selectRow = "SELECT COUNT(*) AS count FROM {$this->tableName}";
            $insertStatement = $this->dbConnection->prepare($selectRow);
            $insertStatement->execute();
            $result = $insertStatement->fetch(PDO::FETCH_ASSOC);
            $result = ['count' => $result['count']];
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // function to upload image
    public function uploadImage($file)
    {
        if (!empty($file)) {
            $tmpName = $file['tmp_name'];
            $name = $file['name'];
            $type = $file['type'];
            $fileNameCmps = explode(".", $name);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time()) . $name . '.' . $fileExtension;
            $allowedExtension = array("gif", "jpeg", "jpg", "png");

            if (in_array($fileExtension, $allowedExtension)) {
                $uploadFileDir = getcwd() . '/uploads/';
                $destFilePath = $uploadFileDir . $newFileName;

                if (move_uploaded_file($tmpName, $destFilePath)) {
                    return $newFileName;
                }
            }


        }
    }

    // function to update image

    // function to delete image

    // function to search image
}

?>