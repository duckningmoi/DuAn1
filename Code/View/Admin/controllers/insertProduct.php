<?php require_once "../models/connect.php"; ?>
<?php

try {
    $sql = "INSERT INTO sanpham (title_sanpham, img_sanpham, subtitle_sanpham, description_sanpham, hot_sanpham, price) VALUES (:title, :img, :subtitle, :desc, :hot_sp, :price)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':title', $_POST['title']);
    $stmt->bindParam(':img', $_POST['img']);
    $stmt->bindParam(':subtitle', $_POST['subtitle']);
    $stmt->bindParam(':desc', $_POST['desc']);
    $stmt->bindParam(':hot_sp', $_POST['hot_sp']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->execute();
    header("Location: ../products.php");
} catch (PDOException $e) {
    die($e->getMessage());
}


?>