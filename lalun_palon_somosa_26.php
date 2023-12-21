<?php
require_once "inc/header.php";

$datacheck = rowcount('paloner_somsa_somadhan_26', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    $kitnames = array('', '', '', '', '', '');
    foreach ($kitnames as $row) {
        InsertData('paloner_somsa_somadhan_26', "user_id, somsa", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">মৌমাছি পালন সংক্রান্ত সমস্যা</h2>
            <span id="mess"></span>

        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>সমস্যা</th>
                        <th>কখন এবং কোথায় </th>
                        <th>কীভাবে সমাধান করব</th>
                    </tr>

                    <?php
                    $i = 1;
                    $data = SelectData('paloner_somsa_somadhan_26', "WHERE user_id='$id_user'");
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="somsa<?= $row->id ?>" value="<?= $row->somsa ?>" class="form-control"></td>
                            <td><input type="text" id="smomy_location<?= $row->id ?>" value="<?= $row->smomy_location ?>" class="form-control"></td>
                            <td><input type="text" id="howtosolv<?= $row->id ?>" value="<?= $row->howtosolv ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#somsa<?php echo $row->id ?>, #smomy_location<?php echo $row->id ?>, #howtosolv<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var somsa = $("#somsa<?php echo $row->id ?>").val();
                                    var smomy_location = $("#smomy_location<?php echo $row->id ?>").val();
                                    var howtosolv = $("#howtosolv<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table26_id: table_id,
                                            somsa: somsa,
                                            smomy_location: smomy_location,
                                            howtosolv: howtosolv
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