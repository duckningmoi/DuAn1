<?php require_once "../models/connect.php"; ?>
<?php

try {
    $sql = "INSERT INTO danhmuc (ten_danhmuc) VALUES (:ten_dannhmuc)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':ten_dannhmuc', $_POST['ten_dannhmuc']);
    $stmt->execute();
    header("Location: ../createProduct.php");
} catch (PDOException $e) {
    die($e->getMessage());
}


?>