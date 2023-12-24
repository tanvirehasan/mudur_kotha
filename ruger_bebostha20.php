<?php
require_once "inc/header.php";
$datacheck = rowcount('rogerbebostha_20', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    $kitnames = array('ইউরোপীয় ফাউল ব্রুড ', ' আমেরিকান ফাউল ব্রুড', 'থলি ব্রুড', 'চক ব্রুড', 'নসেমা', 'আমাশয়', 'ভাইরাস', 'অন্যান্য', 'কোন ধারনা নেই');
    foreach ($kitnames as $row) {
        InsertData('rogerbebostha_20', "user_id, rugername", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">রোগের জন্য নেওয়া ব্যবস্থা</h2>
            <?php
            $data = SelectData('rogerbebostha_20', "WHERE user_id='$id_user'");
            echo $data->fetch_object()->lastupdated;
            ?>
            <span id="mess"></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>রোগের নাম</th>
                        <th>রোগাক্রান্ত কীট সংখ্যা/কলোনি</th>
                        <th>নিয়ন্ত্রণ বিকল্প</th>
                        <th>ব্যবস্থাপনা সম্পর্কিত খরচ (টাকা)</th>
                    </tr>

                    <?php
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->rugername ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="roge_akrantu_mashi<?php echo $row->id ?>" value="<?= $row->roge_akrantu_mashi ?>" class="form-control"></td>
                            <td><input type="text" id="niramoy_bikolp<?php echo $row->id ?>" value="<?= $row->niramoy_bikolp ?>" class="form-control"></td>
                            <td><input type="text" id="cost_taka<?php echo $row->id ?>" value="<?= $row->cost_taka ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#roge_akrantu_mashi<?php echo $row->id ?>, #niramoy_bikolp<?php echo $row->id ?>, #cost_taka<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var roge_akrantu_mashi = $("#roge_akrantu_mashi<?php echo $row->id ?>").val();
                                    var niramoy_bikolp = $("#niramoy_bikolp<?php echo $row->id ?>").val();
                                    var cost_taka = $("#cost_taka<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table20_id: table_id,
                                            roge_akrantu_mashi: roge_akrantu_mashi,
                                            niramoy_bikolp: niramoy_bikolp,
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