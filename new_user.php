<?php

require_once "inc/header.php"



?>

<div class="row justify-content-md-center">

    <div class="col-12">
        <div class="text-center bg-white p-3 mb-3">
            <h1>জরিপ ফর্ম</h1>
        </div>

        <div class="card p-3">
            <div class="card-header">
                <h3>মৌমাছি পালনকারীর তথ্য</h3>
            </div>
            <form action="" method="post">

                <table class="table">
                    <tr>
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
                        <td><input id="address_1" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">ঠিকানা</label></td>
                        <td class="d-flex">
                            <input id="Vibag_address" name="Vibag_address" placeholder="বিভাগ" type="text" class="form-control">
                            <input id="zilla_address" name="zilla_address" placeholder="জেলা" type="text" class="form-control">
                            <input id="upzilla_address" name="upzilla_address" placeholder="থানা" type="text" class="form-control">
                        </td>

                    </tr>
                    <tr>
                        <td><label for="aponar_boys">বয়স</label></td>
                        <td><input id="aponar_boys" name="aponar_boys" type="text" class="form-control"></td>
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
                        <td><input id="fmaily_members" name="fmaily_members" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="bikolp_pesha">বিকল্প পেশা</label></td>
                        <td><input id="bikolp_pesha" name="bikolp_pesha" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="educational_qualification">শিক্ষাগত যোগ্যতা</label></td>
                        <td><input id="educational_qualification" name="educational_qualification" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="profile_pic">ছবি</label></td>
                        <td><input id="profile_pic" name="profile_pic" type="file" class="form-control"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="text-end"><button class="btn btn-warning" id="submit">Update</button></td>
                    </tr>


                </table>

            </form>
        </div>


    </div>

</div>












<?php require_once "inc/footer.php" ?>