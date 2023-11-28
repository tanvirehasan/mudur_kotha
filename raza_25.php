<?php require_once "inc/header.php" ?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">ড্রোন পরিস্থতি</h2>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>রানীর সমস্যা/সমাধান</th>
                        <th>সময়কাল</th>
                        <th>অবস্থান এলাকা</th>
                    </tr>

                    <?php
                    $kitnames = array('', '', '', '');
                    ?>

                    <?php
                    $i = 1;
                    foreach ($kitnames as $row) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row ?></td>
                            <td><input type="text" value="২০" class="form-control"></td>
                            <td><input type="text" value="N/A" class="form-control"></td>
                        </tr>
                    <?php } ?>

                </table>
            </form>
        </div>
    </div>

</div>

<?php require_once "inc/footer.php" ?>