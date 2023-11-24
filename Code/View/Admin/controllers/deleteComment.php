<?php require_once "../models/connect.php"; ?>
<?php

try {
    $sql = "DELETE FROM binhluan WHERE id_binhluan = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("Location: ../comment.php");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>