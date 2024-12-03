

<?php

// Check if an ID and updated data are provided
    /*$userId = $_POST['data01'];*/
    $id = $_POST['tID'];
    $toaccno = $_POST['data'];
    $fromaccno = $_POST['data2'];
    $TransferAmount = $_POST['data3'];
    $SenderRemarks = $_POST['data5'];
    $BeneficiaryRemarks = $_POST['data6'];
    $Username = $_POST['data7'];
    $Password = $_POST['data8'];
    

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'online banking');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Update the record in the database using a prepared statement
    $update_sql = "UPDATE transfermoney SET ToAccountNumber=?, FromAccountNumber=?, TransferAmount=?, SenderRemarks=?, BeneficiaryRemarks=?, Username=?, Password=? WHERE TBID= '$id'";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("iiissss", $toaccno,$fromaccno,$TransferAmount,$SenderRemarks,$BeneficiaryRemarks,$Username,$Password);

    if ($stmt->execute()) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
 

?>