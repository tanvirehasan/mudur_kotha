<?php

require_once "inc/header.php";
$datacheck = rowcount('kitpotung_porilokhito_12', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('ভারোয়া মাইট', 'ট্রপিলাইলাপস মাইট', 'শ্বাসনালীর মাইট', 'মোউচাক বিটল পোকা', 'মোমের মথ', 'ভীমরুল', 'পিঁপড়া', 'পাখি', 'অন্যান্য', 'ব্রাউলা ফ্লাই', 'কোন ধারনা নেই');
    foreach ($kitnames as $row) {
        InsertData('kitpotung_porilokhito_12', "user_id,kitpotoner_name", "'$id_user','$row'");
    }
}
?>





<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">মৌমাছির খামারে পরিলক্ষিত কীটপতঙ্গ</h2>
            <?php
            $data = SelectData('kitpotung_porilokhito_12', "WHERE user_id='$id_user'");
            echo $data->fetch_object()->lastupdated;
            ?>
            <p id="mess"></p>

        </div>

        <div class="card p-3 form_tabkle">

            <table class="table table-bordered">
                <tr>
                    <th>ক্রমিক নং</th>
                    <th>কীটপতঙ্গ নাম</th>
                    <th>আক্রমন করা বাক্সের সংখ্যা</th>
                    <th>লক্ষণ</th>
                    <th>সর্বোচ্চ আক্রমন মাস</th>
                    <th>সর্বনিম্ন আক্রমন মাস</th>
                </tr>

                <?php
                $i = 1;
                while ($row = $data->fetch_object()) { ?>
                    <form method="POST">
                        <tr>
                            <td><?= $i++; ?></td>
                            <td>
                                <?= $row->kitpotoner_name ?>
                                <input name="table_id" id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            </td>
                            <td><input type="text" id="box_sokha_<?php echo $row->id ?>" name="box_sokha" value="<?= $row->box_sokha ?>" class="form-control"></td>
                            <td><input type="text" id="lokkhon_<?php echo $row->id ?>" name="lokkhon" value="<?= $row->lokkhon ?>" class="form-control"></td>
                            <td><input type="text" id="max_akromon_mas_<?php echo $row->id ?>" name="max_akromon_mas" value="<?= $row->max_akromon_mas ?>" class="form-control"></td>
                            <td><input type="text" id="mini_akromon_mas_<?php echo $row->id ?>" name="mini_akromon_mas" value="<?php echo $row->mini_akromon_mas ?>" class="form-control"></td>
                        </tr>
                    </form>


                    <script>
                        $(document).ready(function() {
                            $("#box_sokha_<?php echo $row->id ?>, #lokkhon_<?php echo $row->id ?>, #max_akromon_mas_<?php echo $row->id ?>, #mini_akromon_mas_<?php echo $row->id ?> ").keyup(function() {

                                var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                var box_sokha = $("#box_sokha_<?php echo $row->id ?>").val();
                                var lokkhon = $("#lokkhon_<?php echo $row->id ?>").val();
                                var max_akromon_mas = $("#max_akromon_mas_<?php echo $row->id ?>").val();
                                var mini_akromon_mas = $("#mini_akromon_mas_<?php echo $row->id ?>").val();

                                // alert(box_sokha);

                                $.ajax({
                                    type: 'POST',
                                    url: 'config/ajax.php',
                                    data: {
                                        table_id: table_id,
                                        box_sokha: box_sokha,
                                        lokkhon: lokkhon,
                                        max_akromon_mas: max_akromon_mas,
                                        mini_akromon_mas: mini_akromon_mas
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

        </div>
    </div>

</div>












<?php require_once "inc/footer.php" ?>