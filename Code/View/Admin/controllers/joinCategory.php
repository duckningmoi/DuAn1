<?php require_once "./models/connect.php"; ?>
<?php

try {
    // $sql = "SELECT danhmuc.id_danhmuc, danhmuc.ten_danhmuc FROM sanpham INNER JOIN danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc";
    $sql = "SELECT * FROM danhmuc";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $resultJoin = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}


?>