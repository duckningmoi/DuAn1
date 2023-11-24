<?php
require_once "../models/connect.php";

try {
    $sql = "UPDATE user SET ten_user = :username, sdt_user = :phone, diachi_user = :address, gmail_user = :gmail, tentaikhoan_user = :name, password_user = :password WHERE id_user = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':phone', $_POST['phone']);
    $stmt->bindParam(':address', $_POST['diachi']);
    $stmt->bindParam(':gmail', $_POST['gmail']);
    $stmt->bindParam(':name', $_POST['tentaikhoan']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
    header("Location: ../users.php");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>