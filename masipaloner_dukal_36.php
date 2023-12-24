<?php

require_once "inc/header.php";
$datacheck = rowcount('paloner_jispotro_kenar_dukan_36', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('মৌমাছির বাক্স ', "মৌমাছির পালনের (হাইভ টুল, বিব্রাশ, গ্লাভস, মুখোশ, ফ্রেম, হনেয় এক্সত্রাচতর ইত্যাদি)", 'মৌমাছির কলোনি', 'রানী', 'মৌমাছির খাদ্য', 'মৌমাছির ওষধ');
    foreach ($kitnames as $row) {
        InsertData('paloner_jispotro_kenar_dukan_36', "user_id, product", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">মৌমাছির পালনের আনুষাঙ্গিক সংগ্রহের দোকান/প্রতিষ্ঠান </h2>
            <?php
            $data = SelectData('paloner_jispotro_kenar_dukan_36', "WHERE user_id='$id_user'");
            echo $data->fetch_object()->lastupdated;
            ?>
            <p id="mess"></p>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>পন্য/সার্ভিস নাম</th>
                        <th>ক্রয় মূল্য</th>
                        <th>পরিমান/বছর</th>
                        <th>খামার স্থাপন থেকে পরিমান</th>
                        <th>সংগ্রহকারী দোকানের নাম</th>
                    </tr>

                    <?php
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>
                        <form method="POST">
                            <tr>
                                <td><?= $i++; ?></td>
                                <td>
                                    <input name="table_id" id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                                    <input type="text" id="product<?php echo $row->id ?>" name="product" value="<?= $row->product ?>" class="form-control">
                                </td>
                                <td><input type="text" id="buy_cost<?php echo $row->id ?>" name="buy_cost" value="<?= $row->buy_cost ?>" class="form-control"></td>
                                <td><input type="text" id="poriman_yearly<?php echo $row->id ?>" name="poriman_yearly" value="<?= $row->poriman_yearly ?>" class="form-control"></td>
                                <td><input type="text" id="total_poriman<?php echo $row->id ?>" name="total_poriman" value="<?php echo $row->total_poriman ?>" class="form-control"></td>
                                <td><input type="text" id="dukaner_name<?php echo $row->id ?>" name="dukaner_name" value="<?php echo $row->dukaner_name ?>" class="form-control"></td>
                            </tr>
                        </form>


                        <script>
                            $(document).ready(function() {
                                $("#product<?php echo $row->id ?>, #buy_cost<?php echo $row->id ?>, #poriman_yearly<?php echo $row->id ?>, #total_poriman<?php echo $row->id ?>, #dukaner_name<?php echo $row->id ?> ").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var product = $("#product<?php echo $row->id ?>").val();
                                    var buy_cost = $("#buy_cost<?php echo $row->id ?>").val();
                                    var poriman_yearly = $("#poriman_yearly<?php echo $row->id ?>").val();
                                    var total_poriman = $("#total_poriman<?php echo $row->id ?>").val();
                                    var dukaner_name = $("#dukaner_name<?php echo $row->id ?>").val();

                                    // alert(box_sokha);

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table_id36: table_id,
                                            product: product,
                                            buy_cost: buy_cost,
                                            poriman_yearly: poriman_yearly,
                                            total_poriman: total_poriman,
                                            dukaner_name: dukaner_name
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