<?php
require_once "models/connect.php";
?>

<?php

try {
    // $sql = "SELECT * FROM sanpham s INNER JOIN chitiet_sanpham c ON(s.id_sanpham=c.id_sanpham)";
    $sql = "SELECT * FROM sanpham ";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>