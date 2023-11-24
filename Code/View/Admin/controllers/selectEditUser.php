<?php
require_once "models/connect.php";
?>

<?php

try {
    
    $sql = "SELECT * FROM user WHERE id_user = :id LIMIT 1";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>