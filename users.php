<?php require_once "inc/header.php" ?>
<?php require_once "php/users_sql.php" ?>

<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
        </span> Events List
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">
                <a onclick="popup('view/new_user.php')" class="nav-link newclients">New <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i></a>
            </li>
        </ul>
    </nav>
</div>

<?php
if (isset($mess)) {
    echo "<div class='alert alert-danger' role='alert'>
        " . $mess . "
    </div>";
}
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">


            <table class="table">
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Roll </th>
                        <th> Status </th>
                        <th> Last Update </th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $data = SelectData("fls_users", 'limit 5');
                    while ($row = $data->fetch_object()) { ?>
                        <tr>
                            <td>
                                <img src="assets/images/faces/<?= $row->profile_pic ?>" class="mr-2" alt="image"> <?= $row->name ?>
                            </td>
                            <td> <?= $row->user_dregination ?> </td>
                            <td>
                                <label class="badge badge-gradient-success">
                                    <?php if ($row->status == 1) {
                                        echo "Active";
                                    } ?></label>
                            </td>
                            <td> <?php echo date("F d, Y | h:iA", strtotime($row->updates)); ?> </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>



        </div>
    </div>
</div>


<style>
    table tr td img {
        width: 10% !important;
        height: auto !important;
        border-radius: 0px !important;
    }
</style>


<!-- popup -->
<script>
    function popup(url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function(data) {
                $("#video").html(data);
                $("#dataModal").modal("show");
            },
        });
    }
</script>

<!-- Modal for Video -->
<div class="modal fade" id="dataModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" id="video">

        </div>
    </div>
</div>


<?php require_once "inc/footer.php" ?>