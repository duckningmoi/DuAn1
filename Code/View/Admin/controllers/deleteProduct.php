<?php require_once "../models/connect.php"; ?>
<?php

try {
    $sql = "DELETE FROM sanpham WHERE id_sanpham = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("Location: ../products.php");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>