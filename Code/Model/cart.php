<?php
function addcartkhidangky($id_user){
    $sql = "INSERT INTO giohang (`id_user`) VALUES ('$id_user')";
    pdo_execute($sql);
}
function giohang_user($tentaikhoan_user){
$sql = "SELECT g.id_giohang FROM giohang g INNER JOIN user u ON(g.id_user=u.id_user) WHERE tentaikhoan_user='$tentaikhoan_user'";
$giohang_user = pdo_query_one($sql);
return $giohang_user;
}
//add cart
function addcarrt($id_chitietsanpham , $id_giohang){
    $sql = "INSERT INTO chitiet_giohang (`id_chitietsanpham` , `id_giohang`) VALUES ('$id_chitietsanpham' , '$id_giohang')";
    pdo_execute($sql);
}

function addcart_size($id_sanpham ,$chonsize){
    $sql = "SELECT id_chitietsanpham FROM  chitiet_sanpham WHERE id_sanpham='$id_sanpham' AND size_chitiet='$chonsize'";
   $addcart_size = pdo_query_one($sql);
    return $addcart_size;
}

//Gioit hàng của user đăng nhập:
function select_cart($id_giohang){
    $sql = "SELECT p.title_sanpham , s.id_chitietsanpham , s.size_chitiet , s.gia_chitiet , p.img_sanpham FROM chitiet_giohang g inner join chitiet_sanpham s on(g.id_chitietsanpham=s.id_chitietsanpham) inner join sanpham p on(s.id_sanpham=p.id_sanpham) WHERE id_giohang=$id_giohang";
    $select_cart = pdo_query($sql);
    return $select_cart;
}

function select_soluong($id_giohang){
    $sql = "SELECT p.title_sanpham , p.img_sanpham , s.gia_chitiet , s.id_chitietsanpham,s.size_chitiet ,COUNT(1) as count FROM chitiet_giohang g inner join chitiet_sanpham s on(g.id_chitietsanpham=s.id_chitietsanpham) inner join sanpham p on(s.id_sanpham=p.id_sanpham)
    WHERE id_giohang=$id_giohang
    GROUP BY s.id_chitietsanpham ,s.size_chitiet
    HAVING COUNT(1) >= 1;";
    $select_soluong = pdo_query($sql);
    return $select_soluong;
}
function delete_cart($id_chitietsanpham) {
    $sql = "DELETE FROM chitiet_giohang WHERE id_chitietsanpham='$id_chitietsanpham'";
    pdo_execute($sql);
}

function tru($id_chitietsanpham){
    $sql = "DELETE FROM chitiet_giohang WHERE id_chitietsanpham='$id_chitietsanpham' LIMIT 1;";
    pdo_execute($sql);
}

function cong($id_chitietsanpham , $id_giohang){
    $sql = "INSERT INTO chitiet_giohang(`id_chitietsanpham`, `id_giohang`) VALUES ('$id_chitietsanpham' , '$id_giohang')";
    pdo_execute($sql);
}
?>