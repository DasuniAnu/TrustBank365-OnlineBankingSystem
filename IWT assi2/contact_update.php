<?php
// Check if an ID and updated data are provided
if (isset($_POST['CID'], $_POST['Full_Name'], $_POST['Email'], $_POST['Subject'] , $_POST['Message'])) {
    $id = $_POST['CID'];
    $Name = $_POST['Full_Name'];
    $email = $_POST['Email'];
    $sub = $_POST['Subject'];
    $msg= $_POST['Message'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'online banking');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Update the record in the database using a prepared statement
    $update_sql = "UPDATE contact_us SET Full_Name=? , Email=? , Subject=? , Message=? WHERE CID=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssssi",$Name,$email,$sub,$Msg,$id);

    if ($stmt->execute()) {
        echo "alert 'Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>