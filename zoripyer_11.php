<?php

require_once "inc/header.php";
$datacheck = rowcount('box_size_11', "WHERE user_id='$id_user'");

if ($datacheck == 0) {

    $kitnames = array('', '', '', '', '', '');
    foreach ($kitnames as $row) {
        InsertData('box_size_11', "user_id,box", "'$id_user','$row'");
    }
}
?>


<div class="row justify-content-md-center">
    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">জরিপ বছর পরিচালিত মৌমাছির বাক্সের সংখ্যা</h2>
            <span style="font-family:Arial, Helvetica, sans-serif;">Last Updated: 
                <?php
                    $data = SelectData('box_size_11', "WHERE user_id='$id_user'");
                   echo $data->fetch_object()->lastupdated;
                ?>
            </span>
            <p id="mess"></p>

        </div>

        <div class="card p-3 form_tabkle">

            <table class="table table-bordered">
                <tr>
                    <th>ক্রমিক নং</th>
                    <th>মৌমাছির বাক্সের সংখ্যা</th>
                    <th>দখলক্রত মৌমাছির ফ্রেমের সংখ্যা</th>
                    <th>মাস</th>
                    <th>অবস্থান এলাকা</th>
                </tr>


                <?php $i = 1;
                while ($row = $data->fetch_object()) { ?>
                    <form method="POST">
                        <tr>
                            <td><?= $i++; ?></td>
                            <td>
                                <input name="table_id" id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                                <input type="text" id="box<?php echo $row->id ?>" name="box" value="<?= $row->box ?>" class="form-control">
                            </td>

                            <td><input type="text" id="fraem_size<?php echo $row->id ?>" name="fraem_size" value="<?= $row->fraem_size ?>" class="form-control"></td>
                            <td><input type="text" id="month<?php echo $row->id ?>" name="month" value="<?= $row->month ?>" class="form-control"></td>
                            <td><input type="text" id="location<?php echo $row->id ?>" name="location" value="<?php echo $row->location ?>" class="form-control"></td>
                        </tr>
                    </form>


                    <script>
                        $(document).ready(function() {
                            $("#box<?php echo $row->id ?>, #fraem_size<?php echo $row->id ?>, #month<?php echo $row->id ?>, #location<?php echo $row->id ?> ").keyup(function() {

                                var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                var box = $("#box<?php echo $row->id ?>").val();
                                var fraem_size = $("#fraem_size<?php echo $row->id ?>").val();
                                var month = $("#month<?php echo $row->id ?>").val();
                                var location = $("#location<?php echo $row->id ?>").val();

                                // alert(box_sokha);

                                $.ajax({
                                    type: 'POST',
                                    url: 'config/ajax.php',
                                    data: {
                                        table_id11: table_id,
                                        box: box,
                                        fraem_size: fraem_size,
                                        month: month,
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

        </div>
    </div>

</div>












<?php require_once "inc/footer.php" ?>