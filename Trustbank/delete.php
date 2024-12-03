<?php
    
        $id = $_POST['tid'];

        $pdo = new PDO('mysql:host=localhost;dbname=online banking', 'root', '');
        $query = "DELETE FROM `transfermoney` WHERE TBID = :id";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':id', $id);

        $stmt->execute();

        header("location:display.php");
?>
