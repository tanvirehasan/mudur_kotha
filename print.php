<?php
session_start();
if (!isset($_GET['id'])) {
    echo "<script> location.replace('login.php')</script>";
} else {
    $id_user = $_GET['id'];
}
require_once "config/db_conn.php";
?>



<?php require_once "config/function.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>জরিপ ফর্ম | <?= UserData($id_user, 'name') ?></title>
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
                <img src="assets/images/faces/<?= UserData($id_user, 'profile_pic') ?>" alt="" style="width: 150px; border-radius:0px;">
            </div>
        </div>


        <table class="table table-bordered">
            <tr>
                <td><b for="name">নাম</b></td>
                <td><?= UserData($id_user, 'name') ?></td>
            </tr>
            <tr>
                <td><b for="phone_no">মোবাইল নম্বর</b></td>
                <td><?= UserData($id_user, 'phone_no') ?></td>
            </tr>
            <tr>
                <td><b for="nid">NID নম্বর</b></td>
                <td><?= UserData($id_user, 'nid') ?></td>
            </tr>
            <tr>
                <td><b for="address_1">ঠিকানা</b></td>
                <td><?= UserData($id_user, 'address_1') ?></td>
            </tr>
            <tr>
                <td><b for="name">ঠিকানা</b></td>
                <td class="d-flex">
                    <?php
                    $deve = UserData($id_user, 'Vibag_address');
                    $did = UserData($id_user, 'zilla_address');
                    $uid = UserData($id_user, 'upzilla_address');
                    echo $row = SelectData("upazilas", "WHERE id='$uid'")->fetch_object()->up_bn_name . ", ";
                    echo $row = SelectData("districts", "WHERE id='$did'")->fetch_object()->dis_bn_name . ", ";
                    echo $row = SelectData("divisions", "WHERE id='$deve'")->fetch_object()->div_bn_name;

                    ?>
                </td>

            </tr>
            <tr>
                <td><b for="aponar_boys">বয়স</b></td>
                <td><?= UserData($id_user, 'aponar_boys') ?></td>
            </tr>
            <tr>
                <td><b for="your_sex">লিঙ্গ</b></td>
                <td><?= UserData($id_user, 'your_sex') ?></td>
            </tr>
            <tr>
                <td><b for="marital_status">বৈবাহিক অবস্থা</b></td>
                <td><?= UserData($id_user, 'marital_status') ?></td>
            </tr>
            <tr>
                <td><b for="fmaily_members">পরিবারের সদস্য সংখ্যা</b></td>
                <td><?= UserData($id_user, 'fmaily_members') ?></td>
            </tr>
            <tr>
                <td><b for="bikolp_pesha">বিকল্প পেশা</b></td>
                <td><?= UserData($id_user, 'bikolp_pesha') ?></td>
            </tr>
            <tr>
                <td><b for="educational_qualification">শিক্ষাগত যোগ্যতা</b></td>
                <td><?= UserData($id_user, 'educational_qualification') ?></td>
            </tr>
        </table>



        <!-- জরিপ বছর পরিচালিত মৌমাছির বাক্সের সংখ্যা 11-->

        <div class="bg-white table-title d-flex">
            <h4 class="p-2 m-0 pt-5" style="width: 100%;"> জরিপ বছর পরিচালিত মৌমাছির বাক্সের সংখ্যা </h4>
            <span class="p-2 m-0 pt-5" style="font-family: Arial, Helvetica, sans-serif;">
                <?php
                $data = SelectData('box_size_11', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </span>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>মৌমাছির বাক্সের সংখ্যা</th>
                <th>দখলক্রত মৌমাছির ফ্রেমের সংখ্যা</th>
                <th>মাস</th>
                <th>অবস্থান এলাকা</th>
            </tr>

            <?php
            $i = 1;
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->box ?></td>
                    <td><?= $row->fraem_size ?></td>
                    <td><?= $row->month ?></td>
                    <td><?= $row->location ?></td>
                </tr>

            <?php } ?>
        </table>
        <div class="pagebrack"></div>

        <!-- অভাবের সময় ব্যবস্থাপনা 12-->
        <div class="bg-white table-title d-flex">
            <h4 class="p-2 m-0 pt-5" style="width: 100%;">মৌমাছির খামারে পরিলক্ষিত কীটপতঙ্গ</h4>
            <span class="p-2 m-0 pt-5" style="font-family: Arial, Helvetica, sans-serif;">
                <?php
                $data = SelectData('kitpotung_porilokhito_12', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </span>
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
        <div class="bg-white table-title d-flex">

            <h4 class="p-2 m-0 pt-5" style="width: 100%;" >মৌমাছির খামারে পরিলক্ষিত রোগ</h4>
            <span class=" p-2 m-0 pt-5" style="font-family: Arial, Helvetica, sans-serif;">
                <?php
                $data = SelectData('khamerer_rug_13', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
                </span>

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
            <h4 class="p-2 m-0 pt-5">পন্য সম্পর্কিত তথ্য
                <?php
                $data = SelectData('product_info_17', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
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
            <h4 class="p-2 m-0 pt-3">ফুল উৎস\
                <?php
                $data = SelectData('fuleruttso_18', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>

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
            <h4 class="p-2 m-0 pt-3">কীটপতঙ্গের জন্য নেওয়া ব্যবস্থা
                <?php
                $data = SelectData('atem_to_kitpotog_19', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
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
            <h4 class="p-2 m-0 pt-3">রোগের জন্য নেওয়া ব্যবস্থা
                <?php
                $data = SelectData('rogerbebostha_20', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
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
            <h4 class="p-2 m-0 pt-3">অভাবের সময় ব্যবস্থাপনা
                <?php
                $data = SelectData('ovaber_somoy_21', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
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
            <h4 class="p-2 m-0 pt-3">প্রশিক্ষণ
                <?php
                $data = SelectData('traning_23', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
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
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->training_subject ?></td>
                    <td><?= $row->somoykal ?></td>
                    <td><?= $row->traning_fram ?></td>
                </tr>
            <?php } ?>
        </table>


        <!-- রানীর পরিস্থতি 24-->

        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5"> রানীর পরিস্থতি
                <?php
                $data = SelectData('ranir_poristhi_24', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>রানীর সমস্যা/সমাধান</th>
                <th>সময়কাল</th>
                <th>অবস্থান এলাকা</th>
            </tr>

            <?php
            $i = 1;
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->somsa_somadan ?></td>
                    <td><?= $row->somoykal ?></td>
                    <td><?= $row->location ?></td>
                </tr>

            <?php } ?>
        </table>


        <!-- ড্রোন পরিস্থতি 25-->

        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5"> ড্রোন পরিস্থতি
                <?php
                $data = SelectData('razar_poristi_25', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>ড্রোন সমস্যা/সমাধান</th>
                <th>সময়কাল</th>
                <th>অবস্থান এলাকা</th>
            </tr>

            <?php
            $i = 1;
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->somsa_somadan ?></td>
                    <td><?= $row->somoykal ?></td>
                    <td><?= $row->location ?></td>
                </tr>

            <?php } ?>
        </table>



        <!-- মৌমাছি পালন সংক্রান্ত সমস্যা 26-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5"> মৌমাছি পালন সংক্রান্ত সমস্যা
                <?php
                $data = SelectData('paloner_somsa_somadhan_26', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ক্রমিক নং</th>
                <th>সমস্যা</th>
                <th>কখন এবং কোথায়</th>
                <th>কীভাবে সমাধান করব</th>
            </tr>

            <?php
            $i = 1;
            while ($row = $data->fetch_object()) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->somsa ?></td>
                    <td><?= $row->smomy_location ?></td>
                    <td><?= $row->howtosolv ?></td>
                </tr>

            <?php } ?>
        </table>



        <!-- পন্য বিপণন 27-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5"> পন্য বিপণন
                <?php
                $data = SelectData('pruduct_sell_27', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
        </div>

        <table class="table table-bordered">
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
                    <td><?= $row->product_services ?></td>
                    <td><?= $row->utpadon_khoroc ?></td>
                    <td><?= $row->khucra_price ?></td>
                    <td><?= $row->pakari_price ?></td>
                    <td><?= $row->potasit_price ?></td>
                    <td><?= $row->kreta_bekti ?></td>
                </tr>

            <?php } ?>
        </table>



        <!-- পন্য বিপণন 27-->
        <div class="bg-white table-title">
            <h4 class="p-2 m-0 pt-5"> মৌমাছির পালনের আনুষাঙ্গিক সংগ্রহের দোকান/প্রতিষ্ঠান
                <?php
                $data = SelectData('paloner_jispotro_kenar_dukan_36', "WHERE user_id='$id_user'");
                echo $data->fetch_object()->lastupdated;
                ?>
            </h4>
        </div>

        <table class="table table-bordered" style="width:100%">
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
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row->product ?></td>
                    <td><?= $row->buy_cost ?></td>
                    <td><?= $row->poriman_yearly ?></td>
                    <td><?= $row->total_poriman ?></td>
                    <td><?= $row->dukaner_name ?></td>
                </tr>

            <?php } ?>
        </table>


        <table>
            <?php $ayvey = SelectData("ay_vey", "WHERE user_id='$id_user'")->fetch_object(); ?>

            <tr>
                <td><b> প্রশিক্ষণ প্রদানকারী সংস্থা:</b> <?= $ayvey->posikhon_prodankari_sonstha ?></td>
            </tr>
            <tr>
                <td><b> সহায়তাকারী সংস্থা:</b> <?= $ayvey->sohyatakari_songstha ?></td>
            <tr>
                <td><b> অধিভুক্ত সংস্থা:</b> <?= $ayvey->odivukot_songstha ?></td>
            </tr>
            <tr>
                <td><b> মাসিক ব্যয়:</b> <?= $ayvey->masik_bey ?></td>
            </tr>
            <tr>
                <td><b> মাসিক আয়:</b> <?= $ayvey->masik_ay ?></td>
            </tr>
            <tr>
                <td><b> বার্ষিক আয়:</b> <?= $ayvey->yearly_ay ?></td>
            </tr>
            <tr>
                <td><b> খামারে জনবল সংখ্যা:</b> <?= $ayvey->khamare_jonbol_songkha ?></td>
            </tr>
            <tr>
                <td><b> শ্রমিকের গড় বেতন/মাস (টাকা):</b> <?= $ayvey->shromik_gor_beton ?></td>
            </tr>
            <tr>
                <td><b> খামারে শ্রমিকের সময়কাল (মাস):</b> <?= $ayvey->khamare_shrmik_somoykal ?></td>
            </tr>
            <tr>
                <td><b> মৌমাছি পালনের উন্নয়নের বিষয়ে সুপারিষ/মতামত:</b> <?= $ayvey->suparish_motamot ?></td>
            </tr>
            <tr>
                <td><b> সরকারের কাছে থেকে আপনার কী সমর্থন প্রয়োজন:</b> <?= $ayvey->sokarer_kase_caoya ?></td>
            </tr>

            </tr>
            </tr>
        </table>




    </div>


    <style>
        .box {
            width: 100%;
            margin: 0px;
            margin-bottom: 10px;
        }

        span {
            font-size: 12px !important;
            text-align: right !important;
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

            body {
                /* display: block; */
                font-family: 'Tiro Bangla', Arial !important;
            }


            h1,
            h2,
            h3,
            h4,
            p,
            b,
            a {
                font-family: 'Tiro Bangla', Arial !important;
            }


        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        // window.print();
    </script>
</body>

</html>