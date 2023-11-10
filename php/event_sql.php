<?php 


if (isset($_POST['new_event_add'])) {

    $event_title      = $_POST['event_title'];
    $event_id         = "EV".date("m").rand(1, 999);
    $client_id        = $_POST['client_id'];
    $date_time        = $_POST['date_time'];
    $event_location   = $_POST['event_location'];

    $banner        = $_FILES["banner"]['name'];
    $fileTmp     = $_FILES["banner"]['tmp_name'];
    $uploadDir   = "../assets/image/";
    $destination = $uploadDir . $banner;

    $sql = "INSERT INTO `event` (`event_title`,`event_id`,`client_id`,`date_time`,`event_location`,`banner`) VALUES ('$event_title','$event_id','$client_id','$date_time','$event_location','$banner')";

    if (move_uploaded_file($fileTmp, $destination) === TRUE) {
        
        $conn->query($sql);
        echo "Data inserted successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}


if(isset($_GET['delete_id'])){

    $sql = "DELETE FROM `event` WHERE event_id='{$_GET['delete_id']}'";
    if ($conn->query($sql)=== TRUE) {
        Reconect('events.php');
    }else{
        $mess = "Sorry Error deleting records";
    }

}





//New Participants Add

if (isset($_POST['datainsert'])) {
    # code...
    $filename = $_FILES['fileu']['tmp_name'];
    $file = fopen($filename, 'r');

    // Loop through the file line by line
    while (($row = fgetcsv($file)) !== false) {
        // Process each row
        $name       = $conn->real_escape_string($row[0]);
        $short_name = $conn->real_escape_string($row[1]);
        $short_name = $conn->real_escape_string($row[2]);
        $email_id   = $conn->real_escape_string($row[3]);
        $phone_no   = $conn->real_escape_string($row[4]);
        $event_id   = $conn->real_escape_string($row[5]);
        $group_name = $conn->real_escape_string($row[6]);
        $client_id  = $conn->real_escape_string($row[7]);

        // ...

        // Create the INSERT statement
        $sql = "INSERT INTO participants_list (`name`, short_name,email_id,phone_no,event_id,client_id,group_name) VALUES
                                         ('$name', '$short_name','$email_id','$phone_no','$event_id','$client_id','$group_name')";

        // Execute the INSERT statement
        if (!$conn->query($sql)) {
            echo 'Error: ' . $conn->error;
        }
    }
}


//participants_list
if (isset($_GET['participants_delete_id'])) {

    $sql = "DELETE FROM `participants_list` WHERE pid='{$_GET['participants_delete_id']}'";
    if ($conn->query($sql) === TRUE) {
        Reconect('event_details.php?id='. $_GET['eid']);
    } else {
        $mess = "Sorry Error deleting records";
    }
}
