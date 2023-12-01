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



















?>