<?php

require_once "inc/header.php";
$datacheck = rowcount('atem_to_kitpotog_19', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('ভারোয়া মাইট ', 'শ্বাসনালীর মাইট', 'মৌচাক বিটল পোকা', 'মোমের মথ', 'ভীমরুল', 'পিঁপড়া', 'পাখি', 'অন্যান্য', 'ব্রাউল ফ্লাই', 'কোন ধারণা নেই');
    foreach ($kitnames as $row) {
        InsertData('atem_to_kitpotog_19', "user_id,kit_name", "'$id_user','$row'");
    }
}

?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">কীটপতঙ্গের জন্য নেওয়া ব্যবস্থা</h2>
            <?php
            $data = SelectData('atem_to_kitpotog_19', "WHERE user_id='$id_user'");
            echo $data->fetch_object()->lastupdated;
            ?>
            <span id="mess"></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>কীটপতঙ্গ নাম</th>
                        <th>কীট সংখ্যা/কলোনি</th>
                        <th>নিয়ন্ত্রণ বিকল্প</th>
                        <th>ব্যবস্থাপনা সম্পর্কিত খরচ (টাকা)</th>
                    </tr>

                    <?php
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->kit_name; ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="kit_sokkha<?php echo $row->id ?>" value="<?= $row->kit_sokkha ?>" class="form-control"></td>
                            <td><input type="text" id="niyoton_bikolp<?php echo $row->id ?>" value="<?= $row->niyoton_bikolp ?>" class="form-control"></td>
                            <td><input type="text" id="costforatem<?php echo $row->id ?>" value="<?= $row->costforatem ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#kit_sokkha<?php echo $row->id ?>, #niyoton_bikolp<?php echo $row->id ?>, #costforatem<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var kit_sokkha = $("#kit_sokkha<?php echo $row->id ?>").val();
                                    var niyoton_bikolp = $("#niyoton_bikolp<?php echo $row->id ?>").val();
                                    var costforatem = $("#costforatem<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table19_id: table_id,
                                            kit_sokkha: kit_sokkha,
                                            niyoton_bikolp: niyoton_bikolp,
                                            costforatem: costforatem
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