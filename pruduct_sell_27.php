<?php
require_once "inc/header.php";

$datacheck = rowcount('pruduct_sell_27', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    $kitnames = array('মধু ', 'পরাগ', 'রাজকীয় জেলি', 'মোম', 'মৌমাছির বিষ', 'প্রোপোলিস/মৌমাছির আঠা', 'পরাগায়ন', 'অন্যান্য');
    foreach ($kitnames as $row) {
        InsertData('pruduct_sell_27', "user_id, product_services", "'$id_user','$row'");
    }
}
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white table-title">
            <h2 class="p-2 m-0 pt-5">পন্য বিপণন</h2>
            <?php
                $data = SelectData('pruduct_sell_27', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
            ?>
            <span id="mess"></span>
        </div>

        <div class="card p-3 form_tabkle">
            <form action="" method="post">
                <table class="table-bordered">
                    <tr>
                        <th>ক্রমিক নং</th>
                        <th>পন্য/সার্ভিস নাম</th>
                        <th>উৎপাদন খরচ/কেজি</th>
                        <th>খুচরা মূল্য/কেজি</th>
                        <th>পাইকারি দাম/কেজি</th>
                        <th>প্রত্যাশিত মূল্য /কেজি</th>
                        <th>ক্রেতা সংস্থা/ব্যক্তি</th>
                    </tr>
                    <?php
                    $i = 1;
                    while ($row = $data->fetch_object()) { ?>

                        <tr>
                            <td><?= $i++; ?></td>
                            <input id="table_id_<?php echo $row->id ?>" value="<?php echo $row->id ?>" hidden>
                            <td><input type="text" id="product_services<?= $row->id ?>" value="<?= $row->product_services ?>" class="form-control"></td>
                            <td><input type="text" id="utpadon_khoroc<?= $row->id ?>" value="<?= $row->utpadon_khoroc ?>" class="form-control"></td>
                            <td><input type="text" id="khucra_price<?= $row->id ?>" value="<?= $row->khucra_price ?>" class="form-control"></td>
                            <td><input type="text" id="pakari_price<?= $row->id ?>" value="<?= $row->pakari_price ?>" class="form-control"></td>
                            <td><input type="text" id="potasit_price<?= $row->id ?>" value="<?= $row->potasit_price ?>" class="form-control"></td>
                            <td><input type="text" id="kreta_bekti<?= $row->id ?>" value="<?= $row->kreta_bekti ?>" class="form-control"></td>

                        </tr>

                        <script>
                            $(document).ready(function() {
                                $("#product_services<?php echo $row->id ?>, #utpadon_khoroc<?php echo $row->id ?>, #khucra_price<?php echo $row->id ?> , #pakari_price<?php echo $row->id ?>, #potasit_price<?php echo $row->id ?>, #kreta_bekti<?php echo $row->id ?>").keyup(function() {

                                    var table_id = $("#table_id_<?php echo $row->id ?>").val();
                                    var product_services = $("#product_services<?php echo $row->id ?>").val();
                                    var utpadon_khoroc = $("#utpadon_khoroc<?php echo $row->id ?>").val();
                                    var khucra_price = $("#khucra_price<?php echo $row->id ?>").val();
                                    var pakari_price = $("#pakari_price<?php echo $row->id ?>").val();
                                    var potasit_price = $("#potasit_price<?php echo $row->id ?>").val();
                                    var kreta_bekti = $("#kreta_bekti<?php echo $row->id ?>").val();

                                    $.ajax({
                                        type: 'POST',
                                        url: 'config/ajax.php',
                                        data: {
                                            table27_id: table_id,
                                            product_services: product_services,
                                            utpadon_khoroc: utpadon_khoroc,
                                            khucra_price: khucra_price,
                                            pakari_price: pakari_price,
                                            potasit_price: potasit_price,
                                            kreta_bekti: kreta_bekti
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