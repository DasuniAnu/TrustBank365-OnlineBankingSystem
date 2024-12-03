<?php
// Retrieve form data

$Account_Type = $_POST['AccountType'];
$Payee_Name = $_POST['Payee'];
$Phone_Number = $_POST['PNumber'];
$Bill_Amount = $_POST['Amount'];
$References = $_POST['Ref'];


// Create a database connection
$conn = new mysqli('localhost','root','','online banking');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


else{
    // Insert data into the database
    $sql = $conn->prepare("insert into billpayment ( AccountType, Payee, PNumber, Amount, Ref)
    values(?,?,?,?,?)");
    $sql->bind_param("ssids",$Account_Type,$Payee_Name,$Phone_Number,$Bill_Amount,$References);
    
    $sql->execute();
    echo "Data Added Successfully..";
    //Redirect to the read page
    header("Location:Bill_Payment_read.php");
    echo"<script>alert('record inserted Successfully')</script>";
    

    $sql->close();
    $conn->close();
    
}
?>