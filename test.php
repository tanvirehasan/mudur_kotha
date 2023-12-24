<?php

include "config/db_conn.php";

$column_name = "lastupdated";
$column_type = "TIMESTAMP";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all table names in the database
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each table
    while ($row = $result->fetch_assoc()) {
        $table = $row["Tables_in_" . $conn];

        // Add column to each table
        $alter_query = "ALTER TABLE `$table` ADD `$column_name` $column_type DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP";

        if ($conn->query($alter_query) === TRUE) {
            echo "Column '$column_name' added to table '$table' successfully.<br>";
        } else {
            echo "Error adding column to table '$table': " . $conn->error . "<br>";
        }
    }
} else {
    echo "No tables found in the database.";
}

$conn->close();
