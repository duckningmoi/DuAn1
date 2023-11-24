<?php require_once "../models/connect.php"; ?>
<?php

try {
    $sql = "DELETE FROM user WHERE id_user = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("Location: ../index.php");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>