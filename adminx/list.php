<?php require_once "inc/header.php"; ?>

<div class="row justify-content-md-center">
    <div class="card p-5">
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>


            <?php
            $i = 1;
            $data = SelectData('fls_users', "");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->phone_no ?></td>
                    <td> <img src="../assets/images/faces/<?= $row->profile_pic ?>" alt=""> </td>
                    <td><a class="" href="../print.php?id=<?= $row->user_id ?>">Print</a></td>

                </tr>

            <?php } ?>

        </table>
    </div>
</div>
<?php require_once "inc/footer.php" ?>