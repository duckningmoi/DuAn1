<?php require_once "../models/connect.php"; ?>
<?php

try {
    $sql = "INSERT INTO binhluan (noidung_binhluan) VALUES (:title)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':title', $_POST['noidung']);
    $stmt->execute();
    header("Location: ../comment.php");
} catch (PDOException $e) {
    die($e->getMessage());
}


?>