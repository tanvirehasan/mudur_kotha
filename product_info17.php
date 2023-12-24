<?php

require_once "inc/header.php";
$datacheck = rowcount('product_info_17', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('মধু ', 'পরাগ', 'রাজকীয় জেলি', 'মোম', 'মৌমাছির বিষ', 'প্রোপোলিস/মৌমাছির আঠা', 'পরাগায়ন', 'অন্যান্য');
    foreach ($kitnames as $row) {
        InsertData('product_info_17', "user_id,product_services", "'$id_user','$row'");
    }
}

?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">পন্য সম্পর্কিত তথ্য</h2>
            <?php
            $data = SelectData('product_info_17', "WHERE user_id='$id_user'");
            echo $data->fetch_object()->lastupdated;
            ?>
            <span id="mess"></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>পন্য/সার্ভিস নাম</th>
                        <th>ফলন/বাক্স</th>
                        <th>ফলন/মৌমাছির খামার</th>
                    </tr>

                    <?php
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row->product_services ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="box_ruselt_<?php echo $row->id ?>" value="<?= $row->box_ruselt ?>" class="form-control"></td>
                            <td><input type="text" id="result_khamarer_<?php echo $row->id ?>" value="<?= $row->result_khamarer ?>" class="form-control"></td>
                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#box_ruselt_<?php echo $row->id ?>, #result_khamarer_<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var box_ruselt = $("#box_ruselt_<?php echo $row->id ?>").val();
                                    var result_khamarer = $("#result_khamarer_<?php echo $row->id ?>").val();


                                    // alert(box_sokha);

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table17_id: table_id,
                                            box_ruselt: box_ruselt,
                                            result_khamarer: result_khamarer,
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