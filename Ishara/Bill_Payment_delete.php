<?php
    
    //Getting ID of the record
    $id = $_POST['TID'];

    //create data base connection
    $pdo = new PDO("mysql:host=localhost;dbname=online banking", "root", "");

    $query = "DELETE FROM billpayment WHERE TID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $id);

    //Execute the DELETE query
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    //Redirect to the read page to display deleted details
    header("Location:Bill_Payment_read.php");
    echo"<script>alert('record inserted Successfully')</script>";

    //close the prepared statement
    $stmt->close();
    //close the database connection
    $conn->close();
?>