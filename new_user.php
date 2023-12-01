<?php require_once "inc/header.php"; ?>
<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white p-3 mb-3">
            <h1>জরিপ ফর্ম</h1>
        </div>

        <div class="card p-3">
            <div class="card-header">
                <h3>মৌমাছি পালনকারীর তথ্য</h3>
                <span id="mess"></span>
            </div>
            <form method="POST" id="profile" action="" enctype="multipart/form-data">



                <table class="table">
                    <tr>
                        <input id="id" name="id" value="<?= $id_user ?>" type="hidden">
                        <td><label for="name">নাম</label></td>
                        <td><input id="name" name="name" value="<?= LoginUserData('name') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="phone_no">মোবাইল নম্বর</label></td>
                        <td><input id="phone_no" name="phone_no" value="<?= LoginUserData('phone_no') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="nid">NID নম্বর</label></td>
                        <td><input id="nid" name="nid" value="<?= LoginUserData('nid') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="address_1">ঠিকানা</label></td>
                        <td><input id="address_1" name="address_1" value="<?= LoginUserData('address_1') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">ঠিকানা</label></td>
                        <td class="d-flex">

                            <select name="Vibag_address" id="Vibag_address" class="form-control">
                                <option value="<?= $deve = LoginUserData('Vibag_address') ?>">
                                    <?php echo $row = SelectData("divisions", "WHERE id='$deve'")->fetch_object()->div_bn_name; ?>
                                </option>
                                <?php //php start
                                $data = SelectData("divisions", "");
                                while ($row_v = $data->fetch_object()) { ?>
                                    <option value="<?= $row_v->id ?>"><?= $row_v->div_bn_name ?></option>
                                <?php } ?>
                                <!-- php end  -->
                            </select>

                            <select name="zilla_address" id="zilla_address" class="form-control">
                                <option value="<?= $did = LoginUserData('zilla_address') ?>">
                                    <?php echo $row = SelectData("districts", "WHERE id='$did'")->fetch_object()->dis_bn_name; ?>
                                </option>
                            </select>

                            <select name="upzilla_address" id="upzilla_address" class="form-control">
                                <option value="<?= $uid = LoginUserData('upzilla_address') ?>">
                                    <?php echo $row = SelectData("upazilas", "WHERE id='$uid'")->fetch_object()->up_bn_name; ?>
                                </option>
                            </select>

                        </td>

                    </tr>
                    <tr>
                        <td><label for="aponar_boys">বয়স</label></td>
                        <td><input id="aponar_boys" name="aponar_boys" value="<?= LoginUserData('aponar_boys') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="your_sex">লিঙ্গ</label></td>
                        <td>
                            <select name="your_sex" id="your_sex" class="form-control">
                                <option value="<?= LoginUserData('your_sex') ?>" selected><?= LoginUserData('your_sex') ?></option>
                                <option value="পুরুষ">পুরুষ</option>
                                <option value="মহিলা"> মহিলা </option>
                                <option value="অন্যান্য">অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="marital_status">বৈবাহিক অবস্থা</label></td>
                        <td>
                            <select name="marital_status" id="marital_status" class="form-control">
                                <option value="<?= LoginUserData('marital_status') ?>" selected><?= LoginUserData('marital_status') ?></option>
                                <option value="অবিবাহিত">অবিবাহিত</option>
                                <option value="বিবাহিত"> বিবাহিত </option>
                                <option value="গহিনী">গহিনী</option>
                                <option value="বিধবা">বিধবা</option>
                                <option value="তালাকপ্রাপ্ত">তালাকপ্রাপ্ত</option>
                                <option value="অন্যান্য">অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="fmaily_members">পরিবারের সদস্য সংখ্যা</label></td>
                        <td><input id="fmaily_members" name="fmaily_members" value="<?= LoginUserData('fmaily_members') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="bikolp_pesha">বিকল্প পেশা</label></td>
                        <td><input id="bikolp_pesha" name="bikolp_pesha" value="<?= LoginUserData('bikolp_pesha') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="educational_qualification">শিক্ষাগত যোগ্যতা</label></td>
                        <td><input id="educational_qualification" name="educational_qualification" value="<?= LoginUserData('educational_qualification') ?>" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="profile_pic">ছবি</label>

                            <img src="assets/images/faces/<?= LoginUserData('profile_pic') ?>" alt="" style="width: 100px; height:100px; border-radius:0px; margin-left:20px">

                        </td>
                        <input id="id" name="profile_pic2" value="<?= LoginUserData('profile_pic') ?>" type="hidden">
                        <td><input id="profile_pic" name="profile_pic" type="file" class="form-control"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="text-end"><button type="submit" id="submit" class="btn btn-warning">Update</button></td>
                    </tr>


                </table>

            </form>
        </div>


    </div>

</div>

<?php require_once "inc/footer.php" ?>