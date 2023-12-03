<?php
require_once "inc/header.php";

$datacheck = rowcount('traning_23', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    $kitnames = array('', '', '');
    foreach ($kitnames as $row) {
        InsertData('traning_23', "user_id, training_subject", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">প্রশিক্ষণ</h2>
            <span id="mess"></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>প্রশিক্ষণের বিষয়</th>
                        <th>সময়কাল</th>
                        <th>কোন প্রতিষ্ঠান</th>
                    </tr>

                    <?php
                    $i = 1;
                    $data = SelectData('traning_23', "WHERE user_id='$id_user'");
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="training_subject<?= $row->id ?>" value="<?= $row->training_subject ?>" class="form-control"></td>
                            <td><input type="text" id="somoykal<?= $row->id ?>" value="<?= $row->somoykal ?>" class="form-control"></td>
                            <td><input type="text" id="traning_fram<?= $row->id ?>" value="<?= $row->traning_fram ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#training_subject<?php echo $row->id ?>, #somoykal<?php echo $row->id ?>, #traning_fram<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var training_subject = $("#training_subject<?php echo $row->id ?>").val();
                                    var somoykal = $("#somoykal<?php echo $row->id ?>").val();
                                    var traning_fram = $("#traning_fram<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table23_id: table_id,
                                            training_subject: training_subject,
                                            somoykal: somoykal,
                                            traning_fram: traning_fram
                                        },
                                        success: function(data) {
                                            $("#mess").html(data);
                                        }
                                    });
                                });
                            });
                        </script>


                    <?php } ?>
                </table>
            </form>
        </div>
    </div>

</div>

<?php require_once "inc/footer.php" ?>