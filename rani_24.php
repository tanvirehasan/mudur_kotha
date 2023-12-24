<?php
require_once "inc/header.php";

$datacheck = rowcount('ranir_poristhi_24', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    $kitnames = array('', '', '', '');
    foreach ($kitnames as $row) {
        InsertData('ranir_poristhi_24', "user_id, somsa_somadan", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">রানীর পরিস্থতি</h2>
            <?php
            $data = SelectData('ranir_poristhi_24', "WHERE user_id='$id_user'");
            echo $data->fetch_object()->lastupdated;
            ?>
            <span id="mess"></span>
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
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="somsa_somadan<?= $row->id ?>" value="<?= $row->somsa_somadan ?>" class="form-control"></td>
                            <td><input type="text" id="somoykal<?= $row->id ?>" value="<?= $row->somoykal ?>" class="form-control"></td>
                            <td><input type="text" id="location<?= $row->id ?>" value="<?= $row->location ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#somsa_somadan<?php echo $row->id ?>, #somoykal<?php echo $row->id ?>, #location<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var somsa_somadan = $("#somsa_somadan<?php echo $row->id ?>").val();
                                    var somoykal = $("#somoykal<?php echo $row->id ?>").val();
                                    var location = $("#location<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table24_id: table_id,
                                            somsa_somadan: somsa_somadan,
                                            somoykal: somoykal,
                                            location: location
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