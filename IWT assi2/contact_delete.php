

<?php
    
    $id = $_POST['CID'];

    $pdo = new PDO("mysql:host=localhost;dbname=online banking", "root", "");

    $query = "DELETE FROM contact_us WHERE CID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
?>