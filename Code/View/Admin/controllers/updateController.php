<?php
require_once "../models/connect.php";


try {
    $sql = "UPDATE sanpham SET title_sanpham = :title, subtitle_sanpham = :subtitle, description_sanpham = :desc, hot_sanpham = :hot_sp, id_danhmuc = :id_dm, price = :price, img_sanpham = :img WHERE id_sanpham = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':title', $_POST['title']);
    $stmt->bindParam(':subtitle', $_POST['subtitle']);
    $stmt->bindParam(':desc', $_POST['desc']);
    $stmt->bindParam(':hot_sp', $_POST['hot_sp']);
    $stmt->bindParam(':id_dm', $_POST['id_dm']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':img', $_POST['img']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
    header("Location: ../index.php");
} catch (PDOException $e) {
    die($e->getMessage());
}

?>