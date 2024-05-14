<?php
    require_once "partials/connection.php";
    $imageGallery = new Database();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/css/all.min.css">
    <link rel="stylesheet" href="plugins/css/custom.css">

</head>
<body>

<h1 class="bg-dark text-light text-center py-2">Gallery</h1>
<div class="container">
    <?php include 'includes/imageModal.php'?>
    <div class="row mb-5">
        <div class="col-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-dark text-light"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search Image">
            </div>
        </div>
        <div class="col-2">
            <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#imageModal">Add Image</button>
        </div>
    </div>
    <?php include 'includes/imageTable.php' ?>
    <?php include 'includes/imagePagination.php'?>
</div>



<script src="plugins/js/jquery.js"></script>
<script src="plugins/js/bootstrap.min.js"></script>
<script src="plugins/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>