<?php

// MySQL INSERT statement
function InsertData($table_name, $cols, $values){
    global $conn;
    $query = "INSERT INTO $table_name ($cols) VALUES ($values)";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    return $result;
}

//SELECT
function SelectData($TableName, $moresql){
    global $conn;
    $sql = "SELECT * FROM $TableName $moresql";
    $select = mysqli_query($conn, $sql);
    return $select;
}

//update data
function UpdateData($table_name, $more){
    global $conn;
    $sql = "UPDATE {$table_name} SET {$more} ";
    $update = mysqli_query($conn, $sql);
    return $update;
}

//reconect
function Reconect($url){
    echo "<script> location.replace('" . $url . "')</script>";
}


//Row Counts
function rowcount($TableName, $moresql)
{
    return SelectData($TableName, $moresql)->num_rows;
}

//catagory_name
function client_name($cid, $data){
    $row = SelectData("clients", "where id='$cid' ")->fetch_object();
    return $row->$data;
}

//User Data
function UserData($id, $data){
    $row = SelectData("adminx", "where user_name='$id'")->fetch_object();
    return $row->$data;
}

//User Data
function LoginUserData($data){
    $row = SelectData("adminx", "WHERE user_name='{$_SESSION['adminx']}'")->fetch_object();
    return $row->$data;
}



//Image UPload with compress
function compressImage($source, $destination, $quality)
{
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];
    switch ($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    imagejpeg($image, $destination, $quality);
    return $destination;
}




// OTP System
function SMS_API($number, $messages)
{
    $number = $number;
    $messages = $messages;
    $url = 'http://api.greenweb.com.bd/api.php?json&token=2966070732169128405295f2776ee4a84e0c7c332b10ab173604&to=' . $number . '&message=' . rawurldecode($messages);
    $gateway = preg_replace("/ /", "%20", $url);
    $result = file_get_contents($gateway);
    $decode = json_decode($result, true);
    return $decode;
}







if ($_SERVER['HTTP_HOST'] != "app.drsakhawat.com" || $_SERVER['SERVER_NAME'] != "app.drsakhawat.com") {
    // echo "<script>window.location.href='https://www.google.com/';</script>";
}

?>