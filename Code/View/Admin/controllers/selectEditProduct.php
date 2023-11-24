<?php
require_once "models/connect.php";
?>

<?php

try {
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = :id_sanpham LIMIT 1";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id_sanpham', $_GET['id']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>