<?php




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
    $sql = "SELECT * FROM chitiet_giohang g inner join chitiet_sanpham s on(g.id_chitietsanpham=s.id_chitietsanpham) WHERE id_giohang=$id_giohang";
    $select_cart = pdo_query_one($sql);
    return $select_cart;
}

?>