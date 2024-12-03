
<?php
    
    $id = $_POST['rid'];

    $pdo = new PDO("mysql:host=localhost;dbname=online banking", "root", "");

    $query = "DELETE FROM users WHERE rid = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    header("Location:display.php");
?>