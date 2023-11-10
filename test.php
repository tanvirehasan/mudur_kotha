<?php
include "config/db_conn.php";


if (isset($_POST['datainsert'])) {
    # code...
    $filename = $_FILES['fileu']['tmp_name'];
    $file = fopen($filename, 'r');

    // Loop through the file line by line
    while (($row = fgetcsv($file)) !== false) {
        // Process each row
        $name       = $conn->real_escape_string($row[0]);
        $short_name = $conn->real_escape_string($row[1]);
        $email_id   = $conn->real_escape_string($row[2]);
        $phone_no   = $conn->real_escape_string($row[3]);
        $event_id   = $conn->real_escape_string($row[4]);
        $group_name = $conn->real_escape_string($row[5]);
        // ...

        // Create the INSERT statement
        $sql = "INSERT INTO participants_list (`name`, short_name,email_id,phone_no,event_id,group_name) VALUES
                                         ('$name', '$short_name','$email_id','$phone_no','$event_id','$group_name')";

        // Execute the INSERT statement
        if (!$conn->query($sql)) {
            echo 'Error: ' . $conn->error;
        }
    }
}

// ...
?>


<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileu">
    <button type="submit" name="datainsert">Upload CSV file</button>
</form>