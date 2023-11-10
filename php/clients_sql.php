<?php 


if (isset($_POST['new_client_add'])) {
    
    $name       = $_POST['name'];
    $email_id   = $_POST['email_id'];
    $phone_no   = $_POST['phone_no'];
    $address    = $_POST['address'];

    $logo       = $_FILES["logo"]['name'];
    $fileTmp    = $_FILES["logo"]['tmp_name'];
    $uploadDir = "../assets/image/";
    $destination = $uploadDir . $logo;

    $sql = "INSERT INTO clients (`name`,`email_id`,`phone_no`,`address`,`logo`) VALUES ('$name','$email_id','$phone_no','$address','$logo')";

    if (move_uploaded_file($fileTmp, $destination) === TRUE) {
        
        $conn->query($sql);
        echo "Data inserted successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}



?>