<?php

require_once "inc/header.php";
$datacheck = rowcount('khamerer_rug_13', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('ইউরোপীয় ফাউল ব্রুড ', ' আমেরিকান ফাউল ব্রুড', 'থলি ব্রুড', 'চক ব্রুড', 'নসেমা', 'আমাশয়', 'ভাইরাস', 'অন্যান্য', 'কোন ধারনা নেই');
    foreach ($kitnames as $row) {
        InsertData('khamerer_rug_13', "user_id,ruger_name", "'$id_user','$row'");
    }
}

?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">মৌমাছির খামারে পরিলক্ষিত রোগ</h2>            
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th> রোগের নাম</th>
                        <th>আক্রমন করা বাক্সের সংখ্যা</th>
                        <th>লক্ষণ</th>
                        <th>সর্বোচ্চ আক্রমন মাস</th>
                        <th>সর্বনিম্ন আক্রমন মাস</th>
                    </tr>

                    <?php

                    $i = 1;
                    $data = SelectData('khamerer_rug_13', "WHERE user_id='$id_user'");
                    while ($row = $data->fetch_object()) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->ruger_name ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="box_sokha_<?php echo $row->id ?>" value="<?= $row->box_sokha ?>" class="form-control"></td>
                            <td><input type="text" id="lokkhon_<?php echo $row->id ?>" value="<?= $row->lokkhon ?>" class="form-control"></td>
                            <td><input type="month" id="max_akromon_mas_<?php echo $row->id ?>" value="<?= $row->max_akromon_mas ?>" class="form-control"></td>
                            <td><input type="month" id="mini_akromon_mas_<?php echo $row->id ?>" value="<?= $row->mini_akromon_mas ?>" class="form-control"></td>
                        </tr>


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
                                            table13_id: table_id,
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
            </form>
        </div>
    </div>

</div>




<?php require_once "inc/footer.php" ?>