<?php
// Retrieve form data
$id = $_POST['id'];
$name = $_POST['name'];
$contactNumber = $_POST['contactNumber'];




// Create a database connection
$conn = new mysqli('localhost','root','','online banking');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


else{
    // Insert data into the database
    $sql = $conn->prepare("insert into loan ( id, name,contactNumber )
    values(?,?,?)");
    $sql->bind_param("isi",$id,$name,$contactNumber);
    $sql->execute();
    
    echo"<script>alert('record inserted Successfully')</script>";

    $sql->close();
    $conn->close();
    
    
}
?>