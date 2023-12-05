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
function all_binhluan(){
    $sql = "SELECT b.id_binhluan, b.ngay_binhluan , b.noidung_binhluan , s.img_sanpham , s.title_sanpham , u.ten_user FROM binhluan b Inner join sanpham s on(b.id_sanpham=s.id_sanpham) inner join user u on(b.id_user=u.id_user)";
    $all_binhluan = pdo_query($sql);
    return $all_binhluan;
}
function delete_cm($id_binhluan){
    $sql = "DELETE FROM binhluan WHERE id_binhluan=$id_binhluan";
    pdo_execute($sql);
}


?>