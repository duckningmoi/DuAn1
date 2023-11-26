<!-- Trang 01: SELECT * FROM NEWS LIMIT 0, 10
Trang 02: SELECT * FROM NEWS LIMIT 10, 10
Trang 03: SELECT * FROM NEWS LIMIT 20, 10
Trang 04: SELECT * FROM NEWS LIMIT 30, 10 -->

<?php 
function total_record(){
    $sql = "SELECT COUNT(id_sanpham) AS count FROM sanpham";
    $total_record = pdo_query_one($sql);
    return $total_record;

}



















?>
