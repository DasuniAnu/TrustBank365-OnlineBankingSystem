
<?php
// Check if an ID and updated data are provided
$rid = $_POST['rid'];
$addressLine1 = $_POST['address_line1'];
$addressLine2 = $_POST['address_line2'];
$phone1 = $_POST['phone_1'];
$email = $_POST['email'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'online banking');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Update the record in the database using a prepared statement
    $update_sql = "UPDATE users SET RID=?, address_line1=?, address_line2=?, phone1=?,email=? WHERE rid= $rid";
    $stmt = $conn->prepare($update_sql);

    $stmt->bind_param("issis", $rid,$addressLine1,$addressLine2,$phone1,$email);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header("Location:display.php");
    

    $stmt->close();
    $conn->close();
?>