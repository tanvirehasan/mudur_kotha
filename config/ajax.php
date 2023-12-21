<?php

include "db_conn.php";
if (isset($_POST["Vibag_id"])) {
    //Get all state data
    $Vibag_id = $_POST['Vibag_id'];
    $query = "SELECT * FROM districts WHERE division_id  = '$Vibag_id'";
    $run_query = mysqli_query($conn, $query);

    //Count total number of rows
    $count = mysqli_num_rows($run_query);

    //Display states list
    if ($count > 0) {
        echo '<option value="">সিলেক্ট জেলা</option>';
        while ($row = mysqli_fetch_array($run_query)) {
            $districts_id = $row['id'];
            $districts_name = $row['dis_bn_name'];
            echo "<option value='$districts_id'>$districts_name</option>";
        }
    } else {
        echo '<option value="">জেলা পাওয়া যাচ্ছে না</option>';
    }
}


//upzilla

if (isset($_POST["Zill_id"])) {
    //Get all state data
    $Zill_id = $_POST['Zill_id'];
    $query = "SELECT * FROM upazilas WHERE district_id  = '$Zill_id'";
    $run_query = mysqli_query($conn, $query);

    //Count total number of rows
    $count = mysqli_num_rows($run_query);

    //Display states list
    if ($count > 0) {
        echo '<option value="">সিলেক্ট উপজেলা</option>';
        while ($row = mysqli_fetch_array($run_query)) {
            $up_zill_id = $row['id'];
            $up_zill_name = $row['up_bn_name'];
            echo "<option value='$up_zill_id'>$up_zill_name</option>";
        }
    } else {
        echo '<option value="">উপজেলা পাওয়া যাচ্ছে না</option>';
    }
}


//Profile Updated

if (isset($_POST['id'])) {

    if ($_FILES["profile_pic"]["name"]!='') {
        $profile_pic = $_FILES['profile_pic']['name'];
        $profile_pic_dir = "../assets/images/faces/";
        $profile_target_dir = $profile_pic_dir . basename($_FILES["profile_pic"]["name"]);
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $profile_target_dir);
    }else{
        $profile_pic = $_POST['profile_pic2'];
    }

    $insert = "UPDATE  `fls_users` SET 
    
    `name`='{$_POST['name']}',
    `phone_no`='{$_POST['phone_no']}',
    `nid`='{$_POST['nid']}',
    `address_1`='{$_POST['address_1']}',
    `Vibag_address`='{$_POST['Vibag_address']}',
    `zilla_address`='{$_POST['zilla_address']}',
    `upzilla_address`='{$_POST['upzilla_address']}',
    `aponar_boys`='{$_POST['aponar_boys']}',
    `your_sex`='{$_POST['your_sex']}',
    `marital_status`='{$_POST['marital_status']}',
    `fmaily_members`='{$_POST['fmaily_members']}',
    `bikolp_pesha`='{$_POST['bikolp_pesha']}',
    `profile_pic`='$profile_pic',
    `educational_qualification`='{$_POST['educational_qualification']}'
        
    WHERE user_id='{$_POST['id']}' ";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}




//kitpotung_porilokhito_12
if (isset($_POST['table_id'])) {

    $table_id = $_POST['table_id'];
    $box_sokha=$_POST['box_sokha'];
    $lokkhon= $_POST['lokkhon'];
    $max_akromon_mas= $_POST['max_akromon_mas'];
    $mini_akromon_mas = $_POST['mini_akromon_mas'];

    $insert = "UPDATE kitpotung_porilokhito_12 SET  

    `box_sokha`='$box_sokha', `lokkhon`='$lokkhon', `max_akromon_mas`='$max_akromon_mas', `mini_akromon_mas`='$mini_akromon_mas'  WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }

}


//khamerer_rug_13
if (isset($_POST['table13_id'])) {

    $table_id = $_POST['table13_id'];
    $box_sokha = $_POST['box_sokha'];
    $lokkhon = $_POST['lokkhon'];
    $max_akromon_mas = $_POST['max_akromon_mas'];
    $mini_akromon_mas = $_POST['mini_akromon_mas'];

    $insert = "UPDATE khamerer_rug_13 SET  

    `box_sokha`='$box_sokha', `lokkhon`='$lokkhon', `max_akromon_mas`='$max_akromon_mas', `mini_akromon_mas`='$mini_akromon_mas'  WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}


//product_info_17
if (isset($_POST['table17_id'])) {

    $table_id = $_POST['table17_id'];
    $box_ruselt = $_POST['box_ruselt'];
    $result_khamarer = $_POST['result_khamarer'];

    $insert = "UPDATE product_info_17 SET  
    `box_ruselt`='$box_ruselt', `result_khamarer`='$result_khamarer' WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}



//fuleruttso_18
if (isset($_POST['table18_id'])) {

    $table_id = $_POST['table18_id'];
    $somoykal = $_POST['somoykal'];
    $location = $_POST['location'];
    $flon_box = $_POST['flon_box'];
    $folon_ful_retu = $_POST['folon_ful_retu'];

    $insert = "UPDATE fuleruttso_18 SET `somoykal`='$somoykal',`location`='$location',`flon_box`='$flon_box',`folon_ful_retu`='$folon_ful_retu' WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}



//atem_to_kitpotog_19
if (isset($_POST['table19_id'])) {

    $table_id = $_POST['table19_id'];
    $kit_sokkha = $_POST['kit_sokkha'];
    $niyoton_bikolp = $_POST['niyoton_bikolp'];
    $costforatem = $_POST['costforatem'];

    $insert = "UPDATE atem_to_kitpotog_19 SET     
    `kit_sokkha`='$kit_sokkha',`niyoton_bikolp`='$niyoton_bikolp', `costforatem`='$costforatem'

     WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}



//rogerbebostha_20
if (isset($_POST['table20_id'])) {

    $table_id = $_POST['table20_id'];
    $roge_akrantu_mashi = $_POST['roge_akrantu_mashi'];
    $niramoy_bikolp = $_POST['niramoy_bikolp'];
    $cost_taka = $_POST['cost_taka'];

    $insert = "UPDATE rogerbebostha_20 SET     
    `roge_akrantu_mashi`='$roge_akrantu_mashi',`niramoy_bikolp`='$niramoy_bikolp', `cost_taka`='$cost_taka'

     WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}


//ovaber_somoy_21
if (isset($_POST['table21_id'])) {

    $table_id = $_POST['table21_id'];
    $poriman_box = $_POST['poriman_box'];
    $somoy_month = $_POST['somoy_month'];
    $cost_taka = $_POST['cost_taka'];

    $insert = "UPDATE ovaber_somoy_21 SET     
    `poriman_box`='$poriman_box',`somoy_month`='$somoy_month', `cost_taka`='$cost_taka'

     WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}




//traning_23
if (isset($_POST['table23_id'])) {

    $table_id = $_POST['table23_id'];
    $training_subject = $_POST['training_subject'];
    $somoykal = $_POST['somoykal'];
    $traning_fram = $_POST['traning_fram'];

    $insert = "UPDATE traning_23 SET     
    `training_subject`='$training_subject',`somoykal`='$somoykal', `traning_fram`='$traning_fram'

     WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}



//box_size_11
if (isset($_POST['table_id11'])) {

    $table_id = $_POST['table_id11'];
    $box = $_POST['box'];
    $fraem_size = $_POST['fraem_size'];
    $month = $_POST['month'];
    $location = $_POST['location'];

    $insert = "UPDATE box_size_11 SET     
    `box`='$box', `fraem_size`='$fraem_size', `month`='$month', `location`='$location'
     WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}


//paloner_jispotro_kenar_dukan_36
if (isset($_POST['table_id36'])) {

    $table_id = $_POST['table_id36'];
    $product = $_POST['product'];
    $buy_cost = $_POST['buy_cost'];
    $poriman_yearly = $_POST['poriman_yearly'];
    $total_poriman = $_POST['total_poriman'];
    $dukaner_name = $_POST['dukaner_name'];

    $insert = "UPDATE paloner_jispotro_kenar_dukan_36 SET     
    `product`='$product', `buy_cost`='$buy_cost', `poriman_yearly`='$poriman_yearly', `total_poriman`='$total_poriman', `dukaner_name`='$dukaner_name'
     WHERE  id='$table_id'";

    if ($conn->query($insert) == TRUE) {
        echo "<p class='text-success'>Success</p>";
    } else {
        echo "sorry";
    }
}





















?>