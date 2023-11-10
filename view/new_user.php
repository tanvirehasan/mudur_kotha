<?php require_once "../config/db_conn.php"; ?>
<?php require_once "../config/function.php"; ?>
<div class="modal-header">
    <h1>New Users</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body p-0 m-0">
    <div class="row p-5">

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputUsername1">User name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Designation </label>
                            <input type="text" class="form-control" name="user_dregination" placeholder="Designation">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Password</label>
                            <input type="password" class="form-control" name="user_pass" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Profile photo</label>
                            <input type="file" class="form-control" name="profile_pic">
                        </div>
                        <button type="submit" name="new_user_add" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="modal-footer">

</div>