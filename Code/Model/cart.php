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

//THANH TOÁN
function voucher($ma_voucher){
    $sql = "SELECT * FROM voucher WHERE ma_voucher='$ma_voucher' ";
    $voucher = pdo_query($sql);
    return $voucher;
}
function voucher_vanchuyen($ma_voucher){
    $sql = "SELECT * FROM voucher WHERE ma_voucher='$ma_voucher' ";
    $voucher_vanchuyen = pdo_query_one($sql);
    return $voucher_vanchuyen;
}
function all_voucher(){
    $sql = "SELECT * FROM voucher";
    $all_voucher = pdo_query($sql);
    return $all_voucher;
}
function hoantatdonhang($diachi_giaohang , $sdt_nguoinhan , $ten_nguoinhan  , $phuongthuc_thanhtoan , $tongtien , $id_user , $thoigiandathang){
    $sql = "INSERT INTO bill (`diachi_giaohang` , `sdt_nguoinhan` , `ten_nguoinhan` , `phuongthuc_thanhtoan` , `tongtien` , `id_user` , `thoigiandathang`) VALUES ('$diachi_giaohang' , '$sdt_nguoinhan' , '$ten_nguoinhan'  , '$phuongthuc_thanhtoan' , '$tongtien' , '$id_user' , '$thoigiandathang')";
    pdo_execute($sql);
}
function select_bill($thoigiandathang){
    $sql = "SELECT * FROM bill WHERE thoigiandathang='$thoigiandathang'";
    $select_bill = pdo_query_one($sql);
    return $select_bill;
}
function themchitiet_bill($soluong_chitiet , $size_chitiet , $gia_chitiet , $id_bill , $id_chitietsanpham){
    $sql = "INSERT INTO chitiet_bill (`soluong_chitiet` , `size_chitiet` , `gia_chitiet` , `id_bill` , `id_chitietsanpham`) VALUES ('$soluong_chitiet' , '$size_chitiet' , '$gia_chitiet' , '$id_bill' , '$id_chitietsanpham')";
    pdo_execute($sql);
}

function xoatatcagiohang($id_giohang){
    $sql = "DELETE FROM chitiet_giohang WHERE id_giohang=$id_giohang";
    pdo_execute($sql);
}

function select_bill_all(){
    $sql = "SELECT * FROM bill b inner join chitiet_bill c on(b.id_bill=c.id_bill)
    inner join chitiet_sanpham s on(c.id_chitietsanpham=s.id_chitietsanpham)
    INNER join sanpham p on(s.id_sanpham=p.id_sanpham);";
    $select_bill_all = pdo_query($sql);
    return $select_bill_all;
}
function madonvan(){
    $sql = "SELECT MAX(id_bill) as madon FROM bill";
    $madonvan = pdo_query_one($sql);
    return $madonvan;

}

function distinct_bill($id_user){
    $sql = "SELECT DISTINCT id_bill, trangthai_bill , phuongthuc_thanhtoan , tongtien  FROM bill WHERE id_user=$id_user order by(id_bill) desc";
    $distinct_bill = pdo_query($sql);
    return $distinct_bill;
}
function select_tkbill( $kyw){
    $sql = "SELECT DISTINCT id_bill, trangthai_bill , phuongthuc_thanhtoan , tongtien  FROM bill WHERE id_bill=$kyw";
    $select_tkbill = pdo_query($sql);
    return $select_tkbill;
}
function huydonhang($id_bill){
    $sql = "DELETE FROM bill WHERE id_bill=$id_bill";
    pdo_execute($sql);
}
function bill_admin(){
    $sql = "SELECT * FROM bill";
    $bill_admin = pdo_query($sql);
    return $bill_admin;
}
function edit_bill($id_bill){
    $sql = "SELECT * FROM bill WHERE id_bill=$id_bill";
    $edit_bill = pdo_query_one($sql);
    return $edit_bill;
}

function select_spinbill($id_bill){
    $sql = "SELECT * FROM bill b INNER JOIN chitiet_bill c on(b.id_bill=c.id_bill) INNER JOIN chitiet_sanpham t on(c.id_chitietsanpham=t.id_chitietsanpham) INNER JOIN sanpham p on(t.id_sanpham=p.id_sanpham) WHERE b.id_bill=$id_bill";
    $select_spbill = pdo_query_one($sql);
    return $select_spbill;
}

function editbill($id_bill, $diachi_giaohang , $sdt_nguoinhan , $ten_nguoinhan , $phuongthuc_thanhtoan , $tongtien , $trangthai_bill){
    $sql = "UPDATE bill SET diachi_giaohang='$diachi_giaohang' , sdt_nguoinhan='$sdt_nguoinhan' , ten_nguoinhan='$ten_nguoinhan' , phuongthuc_thanhtoan='$phuongthuc_thanhtoan' , tongtien='$tongtien' , trangthai_bill='$trangthai_bill' WHERE id_bill='$id_bill'";
    pdo_execute($sql);
    
}

function add_doanhthu($id_billdone , $id_sanphamdone , $tien_done ,$soluong_sp){
    $sql = "INSERT INTO doanhthu (id_billdone , id_sanphamdone , tien_done , soluongsp) VALUE ('$id_billdone' , '$id_sanphamdone' , '$tien_done' , '$soluong_sp')";
    pdo_execute($sql);
}   
function add_doanhthufalse( $id_billfalse){
    $sql = "INSERT INTO doanhthu ( id_billfalse) VALUE ( '$id_billfalse')";
    pdo_execute($sql);
}  
function bieudo(){
    $sql = "SELECT MAX(id_sanphamdone) as spmax , COUNT(id_doanhthu) as sl_don , SUM(tien_done) as thunhap , SUM(soluongsp) as sospbanra ,SUM(id_billfalse) as giaothatbai  FROM doanhthu
    GROUP BY id_billdone
    ORDER BY sospbanra DESC";
    $bieudo = pdo_query_one($sql);
    return $bieudo;
}
function slsptrongkho(){
    $sql = "SELECT SUM(soluongtonkho) as 'slsptrongkho' FROM chitiet_sanpham";
    $slsptrongkho = pdo_query_one($sql);
    return $slsptrongkho;
}
function slspadmin(){
    $sql =  "SELECT count(id_sanpham) as 'slspadmin' from sanpham";
    $slspadmin = pdo_query_one($sql);
    return $slspadmin;
}
function sldanhmuc(){
    $sql = "select count(id_danhmuc) as sldanhmuc from danhmuc";
    $sldanhmuc = pdo_query_one($sql);
    return $sldanhmuc;
}

function del_slsp($id_bill){
    $sql = "SELECT * FROM bill b inner join chitiet_bill c on(b.id_bill=c.id_bill) inner join chitiet_sanpham s on(c.id_chitietsanpham=s.id_chitietsanpham) WHERE b.id_bill=$id_bill";
    $del_slsp = pdo_query($sql);
    return $del_slsp;
}
function thucthi_delsl($soluong_chitiet,$id_chitietsanpham){
    $sql = "UPDATE chitiet_sanpham SET `soluongtonkho`=(`soluongtonkho`-$soluong_chitiet) WHERE id_chitietsanpham=$id_chitietsanpham";
    pdo_execute($sql);
}
?>