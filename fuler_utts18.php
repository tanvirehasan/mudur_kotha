<?php

require_once "inc/header.php";
$datacheck = rowcount('fuleruttso_18', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('সরিষা ', 'সূর্যমুখী', 'ধোনে', 'কালোজিরা', 'লিচু', 'রাবার', 'সুন্দরবন-১', 'সুন্দরবন-২', 'সুন্দরবন-৩', 'খেসারি', 'ভাঙ্গি', 'তরমুজ', 'ধৈঞ্চা', 'বরই', 'অন্যান্য', 'সুন্দরবন অন্যান্য');
    foreach ($kitnames as $row) {
        InsertData('fuleruttso_18', "user_id, udbider_name", "'$id_user','$row'");
    }
}

?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">ফুল উৎস</h2>
            <span id="mess" ></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>উদ্ভিদের নাম</th>
                        <th>সময়কাল(মাস)</th>
                        <th>অবস্থান এলাকা</th>
                        <th>ফলন/বাক্স</th>
                        <th>ফলন/ফুল ঋতু</th>
                    </tr>

                    <?php
                    $i = 1;
                    $data = SelectData('fuleruttso_18', "WHERE user_id='$id_user'");
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->udbider_name ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="somoykal<?php echo $row->id ?>" value="<?= $row->somoykal ?>" class="form-control"></td>
                            <td><input type="text" id="location<?php echo $row->id ?>" value="<?= $row->location ?>" class="form-control"></td>
                            <td><input type="text" id="flon_box<?php echo $row->id ?>" value="<?= $row->flon_box ?>" class="form-control"></td>
                            <td><input type="text" id="folon_ful_retu<?php echo $row->id ?>" value="<?= $row->folon_ful_retu ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#somoykal<?php echo $row->id ?>, #location<?php echo $row->id ?>, #flon_box<?php echo $row->id ?>, #folon_ful_retu<?php echo $row->id ?> ").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var somoykal = $("#somoykal<?php echo $row->id ?>").val();
                                    var location = $("#location<?php echo $row->id ?>").val();
                                    var flon_box = $("#flon_box<?php echo $row->id ?>").val();
                                    var folon_ful_retu = $("#folon_ful_retu<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table18_id: table_id,
                                            somoykal: somoykal,
                                            location: location,
                                            flon_box: flon_box,
                                            folon_ful_retu: folon_ful_retu
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