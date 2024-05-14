<?php include 'includes/imageDetailsModal.php'?>
<?php include 'includes/editImageModal.php'?>
<!-- Image Table -->
<table class="table" id="imageTable">
    <thead class="table-dark">
        <tr>
            <th>Image</th>
            <th>Image Name</th>
            <th>Phone No</th>
            <th>Modified Date</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>XXXXXXX</td>
            <td>XXXXXXX</td>
            <td>XXXXXXX</td>
            <td>XXXXXXX</td>
            <td>
                <a href="" class="mr-3 image" data-target="#viewModal" data-toggle="modal" title="View Image"><i class="fas fa-eye text-success"></i></a>
                <a href=""class="mr-3 editImage" data-target="#editModal" data-toggle="modal" title="Edit Image"><i class="fas fa-edit text-info"></i></a>
                <a href="" class="mr-3 deleteImage"><i class="fas fa-trash-alt text-danger" title="Delete Image"></i></a>
            </td>
        </tr>
    </tbody>
</table>