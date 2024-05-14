<!-- Image Modal -->
<div class="modal fade" id="imageModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="addImage" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Image Name -->
                    <div class="form-group">
                        <label for="imageName">Image Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-user-alt text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Image Name" autocomplete="off" required="required" id="imageName" name="imageName">
                        </div>
                    </div>
                    <!-- Mobile No -->
                    <div class="form-group">
                        <label for="phoneNo">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-phone text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Phone No." autocomplete="off" required="required" id="phoneNo" name="phoneNumber" maxlength="10" minlength="10">
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="form-group">
                        <div class="input-group">
                        <label for="image" class="custom-file-label">Choose Image</label>
                            <input type="file" class="custom-file-input" autocomplete="off" required="required" id="image" name="image">
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="form-group">
                            <input type="date" class="form-control" autocomplete="off" required="required" id="modifiedDate" name="modifiedDate">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-outline-danger">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>