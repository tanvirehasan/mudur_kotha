<?php

require_once "inc/header.php";
$datacheck = rowcount('ay_vey', "WHERE user_id='$id_user'");
if ($datacheck == 0) {
    InsertData('ay_vey', "user_id", "'$id_user'");
}
$row = SelectData("ay_vey", "WHERE user_id='$id_user'")->fetch_object();
?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="card p-3">
            <span id="mess"></span>
            
            <form method="POST" id="ay_vey" name="ay_vey" action="" enctype="multipart/form-data">

                <table class="table" style="width: 100%;">
                    <tr>
                        <input id="ay_vey_id" name="ay_vey_id" value="<?= $id_user ?>" type="hidden">
                        <td><label for="name">প্রশিক্ষণ প্রদানকারী সংস্থা</label></td>
                        <td><input id="name" name="posikhon_prodankari_sonstha" value="<?= $row->posikhon_prodankari_sonstha ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">সহায়তাকারী সংস্থা</label></td>
                        <td><input id="name" name="sohyatakari_songstha" value="<?= $row->sohyatakari_songstha ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">অধিভুক্ত সংস্থা</label></td>
                        <td><input id="name" name="odivukot_songstha" value="<?= $row->odivukot_songstha ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">মাসিক ব্যয়</label></td>
                        <td><input id="name" name="masik_bey" value="<?= $row->masik_bey ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">মাসিক আয়</label></td>
                        <td><input id="name" name="masik_ay" value="<?= $row->masik_ay ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">বার্ষিক আয়</label></td>
                        <td><input id="name" name="yearly_ay" value="<?= $row->yearly_ay ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">খামারে জনবল সংখ্যা</label></td>
                        <td><input id="name" name="khamare_jonbol_songkha" value="<?= $row->khamare_jonbol_songkha ?>" type="text" class="form-control"></td>
                    </tr>


                    <tr>
                        <td><label for="name">শ্রমিকের গড় বেতন/মাস (টাকা)</label></td>
                        <td><input id="name" name="shromik_gor_beton" value="<?= $row->shromik_gor_beton ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">খামারে শ্রমিকের সময়কাল (মাস)</label></td>
                        <td><input id="name" name="khamare_shrmik_somoykal" value="<?= $row->khamare_shrmik_somoykal ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">মৌমাছি পালনের উন্নয়নের বিষয়ে সুপারিষ/মতামত</label></td>
                        <td><input id="name" name="suparish_motamot" value="<?= $row->suparish_motamot ?>" type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td><label for="name">সরকারের কাছে থেকে আপনার কী সমর্থন প্রয়োজন</label></td>
                        <td><input id="name" name="sokarer_kase_caoya" value="<?= $row->sokarer_kase_caoya ?>" type="text" class="form-control"></td>
                    </tr>

                </table>
            </form>
        </div>

    </div>
</div>


<script>
    $(document).ready(function() {
        // from updated 
        $("#ay_vey").on('keyup', (function(e) {

            // alert("Hello! I am an alert box!!");

            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'config/ajax.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    $("#mess").html(data);
                }
            });
        }));

    });
</script>



<?php require_once "inc/footer.php" ?>