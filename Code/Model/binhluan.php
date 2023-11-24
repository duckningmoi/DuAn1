<?php
function binhluan_one_sp($id_binhluan){
    $sql = "SELECT * FROM binhluan b INNER JOIN user u ON(b.id_user=u.id_user) WHERE id_sanpham=$id_binhluan";
    $binhluan_one_sp = pdo_query($sql);
    return $binhluan_one_sp;
}
function insert_binhluan($id_sanpham, $noidung_binhluan , $id_user ){
    $date = date('Y-m-d');
    $sql = "INSERT INTO binhluan(`noidung_binhluan`, `id_sanpham`, `id_user`, `ngay_binhluan`) VALUES ('$noidung_binhluan','$id_sanpham', $id_user , '$date');";
    pdo_execute($sql);
}


?>