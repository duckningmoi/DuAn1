<?php
require_once "models/connect.php";
?>

<?php

try {
    
    $sql = "SELECT * FROM binhluan";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>