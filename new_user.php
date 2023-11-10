<?php require_once "inc/header.php" ?>

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
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">মোবাইল নম্বর</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">NID নম্বর</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">ঠিকানা</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">ঠিকানা</label></td>
                        <td class="d-flex">
                            <input id="name" placeholder="বিভাগ" type="text" class="form-control">
                            <input id="name" placeholder="জেলা" type="text" class="form-control">
                            <input id="name" placeholder="থানা" type="text" class="form-control">
                        </td>

                    </tr>
                    <tr>
                        <td><label for="name">বয়স</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">লিঙ্গ</label></td>
                        <td>
                            <select name="" id="" class="form-control">
                                <option>বাছুন</option>
                                <option value="পুরুষ">পুরুষ</option>
                                <option value="মহিলা"> মহিলা </option>
                                <option value="অন্যান্য">অন্যান্য</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="name">বৈবাহিক অবস্থা</label></td>
                        <td>
                            <select name="" id="" class="form-control">
                                <option>বাছুন</option>
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
                        <td><label for="name">পরিবারের সদস্য সংখ্যা</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">বিকল্প পেশা</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">শিক্ষাগত যোগ্যতা</label></td>
                        <td><input id="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="name">ছবি</label></td>
                        <td><input id="name" type="file" class="form-control"></td>
                    </tr>
                </table>

            </form>
        </div>


    </div>

</div>












<?php require_once "inc/footer.php" ?>