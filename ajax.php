<?php
    $action = $_REQUEST['action'];

    if (!empty($action)) {
        require_once '/partials/Table.php';
        $object = new Table();
    }

    if ($action == 'addImage' && !empty($_POST[''])) {
        $imageName = $_POST['imageName'];
        $image = $_POST['image'];
        $phoneNo = $_POST['phoneNo'];
        $date = $_POST['modifiedDate'];

        $imageId = (!empty($_POST['imageId'])) ? $_POST['imageId'] : "";

        $imageName = "";

        if (!empty($image['image'])) {
            $imageName = $object->uploadImage($image);
            $imageData = [
                'imageName' => $imageName,
                'phoneNo' => $phoneNo,
                'image' => $image,
                'modifiedDate' => $date,
            ];
        } else {
            $imageData = [
                'imageName' => $imageName,
                'phoneNo' => $phoneNo,
                'modifiedDate' => $date,
            ];
        }
        $imageId = $object->addImage($imageData);

        if (!empty($imageId)) {
            $image= $object->getRow('imageId', $imageId);
            echo json_encode($image);
            exit();
        }
    }
?>