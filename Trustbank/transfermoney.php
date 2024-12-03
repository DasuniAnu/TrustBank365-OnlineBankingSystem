
<?php
// Retrieve form data
$toaccno = $_POST['data'];
$fromaccno = $_POST['data2'];
$transferamount = $_POST['data3'];

$senderreamarks = $_POST['data5'];
$BeneficiaryRemarks = $_POST['data6'];
$Username = $_POST['data7'];
$Password = $_POST['data8'];


// Create a database connection
$conn = new mysqli('localhost','root','','online banking');
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


else{
    // Insert data into the database
$sql = $conn->prepare("INSERT INTO transfermoney (ToAccountNumber, FromAccountNumber, TransferAmount, SenderRemarks, BeneficiaryRemarks, Username, Password)
VALUES (?, ?, ?, ?, ?, ?, ?)");

$sql->bind_param("iiissss", $toaccno, $fromaccno, $transferamount, $senderreamarks, $BeneficiaryRemarks, $Username, $Password);

$sql->execute();

header("location:display.php");
    echo"<script>alert('record inserted Successfully')</script>";

}



?>
 