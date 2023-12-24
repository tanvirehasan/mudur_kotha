<?php
require_once "inc/header.php";

$datacheck = rowcount('ovaber_somoy_21', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    $kitnames = array('চিনি', 'কত্রিম পরাগ', 'কত্রিম খাদ্য', 'অন্যান্য');
    foreach ($kitnames as $row) {
        InsertData('ovaber_somoy_21', "user_id, fid_sorborho", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">অভাবের সময় ব্যবস্থাপনা</h2>
            <?php
                $data = SelectData('ovaber_somoy_21', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
            ?>
            <span id="mess"></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>ফিড সরবরাহ</th>
                        <th>প্রয়োজনীয় পরিমান/বাক্স (কেজি)</th>
                        <th>সময়(মাস)</th>
                        <th>খরচ/বাক্স (টাকা)</th>
                    </tr>

                    <?php
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->fid_sorborho ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="poriman_box<?php echo $row->id ?>" value="<?= $row->poriman_box ?>" class="form-control"></td>
                            <td><input type="text" id="somoy_month<?php echo $row->id ?>" value="<?= $row->somoy_month ?>" class="form-control"></td>
                            <td><input type="text" id="cost_taka<?php echo $row->id ?>" value=" <?= $row->cost_taka ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#poriman_box<?php echo $row->id ?>, #somoy_month<?php echo $row->id ?>, #cost_taka<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var poriman_box = $("#poriman_box<?php echo $row->id ?>").val();
                                    var somoy_month = $("#somoy_month<?php echo $row->id ?>").val();
                                    var cost_taka = $("#cost_taka<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table21_id: table_id,
                                            poriman_box: poriman_box,
                                            somoy_month: somoy_month,
                                            cost_taka: cost_taka
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