<?php
session_start();
if (!isset($_SESSION['userid'])) {
    echo "<script> location.replace('admin/login.php')</script>";
} else {
    $userid = $_SESSION['admin_user'];
    $id_user = $_SESSION['userid'];
}
require_once "config/db_conn.php";



?>
<?php require_once "config/function.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>জরিপ ফর্ম | <?= LoginUserData('name') ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">
</head>

<body>

    <div class="box">
        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|} mb-5">
            <div class="col-8 ">
                <h1>জরিপ ফর্ম</h1>
                <p>মৌমাছি পালনকারীর তথ্য</p>
            </div>
            <div class="col-4 text-end">
                <img src="assets/images/faces/<?= LoginUserData('profile_pic') ?>" alt="" style="width: 100px; height:100px; border-radius:0px;">
            </div>
        </div>


        <table class="table table-bordered">
            <tr>
                <td><b for="name">নাম</b></td>
                <td><?= LoginUserData('name') ?></td>
            </tr>
            <tr>
                <td><b for="phone_no">মোবাইল নম্বর</b></td>
                <td><?= LoginUserData('phone_no') ?></td>
            </tr>
            <tr>
                <td><b for="nid">NID নম্বর</b></td>
                <td><?= LoginUserData('nid') ?></td>
            </tr>
            <tr>
                <td><b for="address_1">ঠিকানা</b></td>
                <td><?= LoginUserData('address_1') ?></td>
            </tr>
            <tr>
                <td><b for="name">ঠিকানা</b></td>
                <td class="d-flex">
                    <?php
                    $deve = LoginUserData('Vibag_address');
                    $did = LoginUserData('zilla_address');
                    $uid = LoginUserData('upzilla_address');
                    echo $row = SelectData("upazilas", "WHERE id='$uid'")->fetch_object()->up_bn_name . ", ";
                    echo $row = SelectData("districts", "WHERE id='$did'")->fetch_object()->dis_bn_name . ", ";
                    echo $row = SelectData("divisions", "WHERE id='$deve'")->fetch_object()->div_bn_name;

                    ?>
                </td>

            </tr>
            <tr>
                <td><b for="aponar_boys">বয়স</b></td>
                <td><?= LoginUserData('aponar_boys') ?></td>
            </tr>
            <tr>
                <td><b for="your_sex">লিঙ্গ</b></td>
                <td><?= LoginUserData('your_sex') ?></td>
            </tr>
            <tr>
                <td><b for="marital_status">বৈবাহিক অবস্থা</b></td>
                <td><?= LoginUserData('marital_status') ?></td>
            </tr>
            <tr>
                <td><b for="fmaily_members">পরিবারের সদস্য সংখ্যা</b></td>
                <td><?= LoginUserData('fmaily_members') ?></td>
            </tr>
            <tr>
                <td><b for="bikolp_pesha">বিকল্প পেশা</b></td>
                <td><?= LoginUserData('bikolp_pesha') ?></td>
            </tr>
            <tr>
                <td><b for="educational_qualification">শিক্ষাগত যোগ্যতা</b></td>
                <td><?= LoginUserData('educational_qualification') ?></td>
            </tr>
        </table>


        <!-- অভাবের সময় ব্যবস্থাপনা 12-->

        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5">মৌমাছির খামারে পরিলক্ষিত কীটপতঙ্গ</h4>

        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>কীটপতঙ্গ নাম</th>
                <th>আক্রন্ত বাক্সের সংখ্যা</th>
                <th>লক্ষণ</th>
                <th>সর্বোচ্চ মাস</th>
                <th>সর্বনিম্ন মাস</th>
            </tr>

            <?php
            $i = 1;
            $data = SelectData('kitpotung_porilokhito_12', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->kitpotoner_name ?></td>
                    <td><?= $row->box_sokha ?></td>
                    <td><?= $row->lokkhon ?></td>
                    <td><?= $row->max_akromon_mas ?></td>
                    <td><?php echo $row->mini_akromon_mas ?></td>
                </tr>

            <?php } ?>
        </table>


        <!-- মৌমাছির খামারে পরিলক্ষিত রোগ 13 -->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5">মৌমাছির খামারে পরিলক্ষিত রোগ</h4>

        </div>


        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th> রোগের নাম</th>
                <th>আক্রমন করা <br> বাক্সের সংখ্যা</th>
                <th>লক্ষণ</th>
                <th>সর্বোচ্চ মাস</th>
                <th>সর্বনিম্ন মাস</th>
            </tr>

            <?php

            $i = 1;
            $data = SelectData('khamerer_rug_13', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->ruger_name ?></td>
                    <td><?= $row->box_sokha ?></td>
                    <td><?= $row->lokkhon ?></td>
                    <td><?= $row->max_akromon_mas ?></td>
                    <td><?= $row->mini_akromon_mas ?></td>
                </tr>

            <?php } ?>
        </table>



        <!-- পন্য সম্পর্কিত তথ্য 17 -->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5">পন্য সম্পর্কিত তথ্য</h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>পন্য/সার্ভিস নাম</th>
                <th>ফলন/বাক্স</th>
                <th>ফলন/মৌমাছির খামার</th>
            </tr>
            <?php
            $i = 1;
            $data = SelectData('product_info_17', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->product_services ?></td>
                    <td><?= $row->box_ruselt ?></td>
                    <td><?= $row->result_khamarer ?></td>
                </tr>
            <?PHP } ?>
        </table>

        <div class="pagebrack"></div>


        <!-- ফুল উৎস 18-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-3">ফুল উৎস</h4>

        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>উদ্ভিদের নাম</th>
                <th>সময়কাল(মাস)</th>
                <th>অবস্থান এলাকা</th>
                <th>ফলন/বাক্স</th>
                <th>ফলন/ফুল ঋতু</th>
            </tr>

            <?php
            $i = 1;
            $data = SelectData('fuleruttso_18', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>

                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->udbider_name ?></td>
                    <td><?= $row->somoykal ?></td>
                    <td><?= $row->location ?></td>
                    <td><?= $row->flon_box ?></td>
                    <td><?= $row->folon_ful_retu ?></td>
                </tr>
            <?php } ?>
        </table>



        <!-- কীটপতঙ্গের জন্য নেওয়া ব্যবস্থা 19-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-3">কীটপতঙ্গের জন্য নেওয়া ব্যবস্থা</h4>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>কীটপতঙ্গ নাম</th>
                <th>কীট সংখ্যা/কলোনি</th>
                <th>নিয়ন্ত্রণ বিকল্প</th>
                <th>ব্যবস্থাপনা সম্পর্কিত খরচ (টাকা)</th>
            </tr>

            <?php
            $i = 1;
            $data = SelectData('atem_to_kitpotog_19', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->kit_name; ?></td>
                    <td><?= $row->kit_sokkha; ?></td>
                    <td><?= $row->niyoton_bikolp; ?></td>
                    <td><?= $row->costforatem; ?></td>
                </tr>
            <?php } ?>
        </table>


        <!-- রোগের জন্য নেওয়া ব্যবস্থা 20-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-3">রোগের জন্য নেওয়া ব্যবস্থা</h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>রোগের নাম</th>
                <th>রোগাক্রান্ত কীট সংখ্যা/কলোনি</th>
                <th>নিয়ন্ত্রণ বিকল্প</th>
                <th>ব্যবস্থাপনায় খরচ</th>
            </tr>

            <?php
            $i = 1;
            $data = SelectData('rogerbebostha_20', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->rugername ?></td>
                    <td><?= $row->roge_akrantu_mashi ?></td>
                    <td><?= $row->niramoy_bikolp ?></td>
                    <td><?= $row->cost_taka ?></td>
                </tr>
            <?php } ?>
        </table>



        <!-- অভাবের সময় ব্যবস্থাপনা 21-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-3">অভাবের সময় ব্যবস্থাপনা</h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>ফিড সরবরাহ</th>
                <th>প্রয়োজনীয় পরিমান/বাক্স (কেজি)</th>
                <th>সময়(মাস)</th>
                <th>খরচ/বাক্স (টাকা)</th>
            </tr>

            <?php
            $i = 1;
            $data = SelectData('ovaber_somoy_21', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->fid_sorborho ?></td>
                    <td><?= $row->poriman_box ?></td>
                    <td><?= $row->somoy_month ?></td>
                    <td><?= $row->cost_taka ?></td>
                </tr>
            <?php } ?>
        </table>


        <!-- অভাবের সময় ব্যবস্থাপনা 21-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-3">প্রশিক্ষণ</h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>প্রশিক্ষণের বিষয়</th>
                <th>সময়কাল</th>
                <th>কোন প্রতিষ্ঠান</th>
            </tr>

            <?php
            $i = 1;
            $data = SelectData('traning_23', "WHERE user_id='$id_user'");
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->training_subject ?></td>
                    <td><?= $row->somoykal ?></td>
                    <td><?= $row->traning_fram ?></td>
                </tr>
            <?php } ?>
        </table>

























    </div>

    <style>
        .box {
            width: 100%;
            margin: 0px;
            margin-bottom: 10px;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        p,
        b,
        a {
            font-family: 'Tiro Bangla', Arial !important;
        }

        @media print {
            .pagebrack {
                page-break-after: always;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>

</html>