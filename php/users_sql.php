<?php


// Login===========
if (isset($_POST['login_btn'])) {

    $userid_email = htmlspecialchars($_POST['user_name']);
    $password = htmlspecialchars($_POST['user_pass']);

    if (!empty($userid_email) and !empty($password)) {

        $data = SelectData('fls_users', "WHERE user_name='$userid_email' ");       
        if ($data->num_rows > 0) {
            $result = $data->fetch_object();
            if ($password == $result->user_pass or $password == $result->otp) {
                $_SESSION['admin_user'] = $result->user_name;
                $_SESSION['userid'] = $result->user_id;
                Reconect('new_user.php');
            } else {
                $mess =  "Password does not match.";
            }
        } else {
            $mess = "User name not match";
        }
    } else {
        $mess = "All fill are required fields";
    }
}





// New User Add 

if (isset($_POST['new_user_add'])) {

    $user_name         = htmlspecialchars($_POST['user_name']);
    $user_pass         = htmlspecialchars($_POST['user_pass']);
    $name              = htmlspecialchars($_POST['name']);
    $user_dregination  = htmlspecialchars($_POST['user_dregination']);
 
    $banner      = $_FILES["profile_pic"]['name'];
    $fileTmp     = $_FILES["profile_pic"]['tmp_name'];
    $uploadDir   = "assets/images/faces/";
    $destination = $uploadDir . $banner;

    $sql = "INSERT INTO `fls_users` (`user_name`,`user_pass`,`name`,`user_dregination`,`profile_pic`) VALUES ('$user_name','$user_pass','$name','$user_dregination','$banner')";

    if (move_uploaded_file($fileTmp, $destination) === TRUE) {

        $conn->query($sql);
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




//Sign up

if (isset($_POST['signup_btn'])) {

    $user_name= htmlspecialchars($_POST['user_name']);
    $otp = htmlspecialchars($_POST['otp']);
    $user_pass= htmlspecialchars($_POST['user_pass']);

    if (!empty($user_name)and !empty($user_pass) and !empty($otp)) {

        $data = SelectData('fls_users', "WHERE user_name='$user_name' AND otp='$otp' ");
        if ($data->num_rows == 1) {
            $sql = "UPDATE `fls_users` SET `user_name`='$user_name',`user_pass`='$user_pass', `otp`='' WHERE user_name='$user_name' ";
            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully";
                Reconect('login.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {           
            $conn->query("DELETE FROM fls_users WHERE user_name=$user_name");
        }
    
    } else {
        $mess = "All fill are required fields";
    }
}



?>