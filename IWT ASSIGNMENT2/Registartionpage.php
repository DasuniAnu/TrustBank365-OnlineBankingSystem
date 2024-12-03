<?php
// Retrieve form data

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$identityCard = $_POST['Identity_card'];
$dob = $_POST['dob'];
$addressLine1 = $_POST['address_line1'];
$addressLine2 = $_POST['address_line2'];
$phone1 = $_POST['phone_1'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['passwordd'];
$cfmpassword=$_POST['confirm_password'];

// Create a database connection
$conn = new mysqli('localhost','root','','online banking');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


else{
    // Insert data into the database
    $sql = $conn->prepare("insert into users ( first_name, last_name, identity_card, dob, address_line1, address_line2, phone1, email, username, passwordd,confirm_password)
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("ssisssissss",$firstName,$lastName,$identityCard,$dob,$addressLine1,$addressLine2,$phone1,$email,$username,$password,$cfmpassword);
    $sql->execute();
    header("Location:display.php");
    echo"<script>alert('record inserted Successfully')</script>";

    $sql->close();
    $conn->close();
    
    
}
?>