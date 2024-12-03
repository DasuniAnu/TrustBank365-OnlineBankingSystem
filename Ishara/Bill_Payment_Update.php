<?php
// Check if an ID and updated data are provided
$TID = $_POST['TID'];
$Phone_Number = $_POST['PNumber'];
$Bill_Amount = $_POST['Amount'];
$References = $_POST['Ref'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'online banking');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Update the record in the database using a prepared statement
    $update_sql = "UPDATE billpayment SET TID=?, PNumber=?, Amount=?, Ref=? WHERE TID= $TID";
    $stmt = $conn->prepare($update_sql);

    $stmt->bind_param("iids", $TID,$Phone_Number,$Bill_Amount,$References);

    //Execute the UPDATE query
    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    //Redirect read page to view updated details
    header("Location:Bill_Payment_read.php");
    echo"<script>alert('record inserted Successfully')</script>";

    $stmt->close();
    $conn->close();
?>