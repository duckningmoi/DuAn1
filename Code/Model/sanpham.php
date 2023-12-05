<?php
function load_timkiem($kyw){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and title_sanpham like '%".$kyw."%' ";
    }
    $sql.=" order by title_sanpham";
    $load_timkiem=pdo_query($sql);
    return $load_timkiem;
}
function one_sanpham($id_sanpham){
    $sql = "select * from sanpham s inner join chitiet_sanpham c on (s.id_sanpham=c.id_sanpham) where s.id_sanpham=$id_sanpham";
    $one_sanpham = pdo_query_one($sql);
    return $one_sanpham;
}
function sl_1_loai($id_sanpham){
    $sql = "select sum(soluongtonkho) as'soluong' from chitiet_sanpham where id_sanpham=$id_sanpham";
    $sl_1_loai = pdo_query_one($sql);
    return $sl_1_loai;
}
function all_sanpham_home($batdau){
    $sql = "select * from sanpham s inner join danhmuc d on(d.id_danhmuc=s.id_danhmuc) LIMIT $batdau,8";
    $all_sanpham = pdo_query($sql);
    return $all_sanpham;  
}
function all_sanpham(){
    $sql = "select * from sanpham s inner join danhmuc d on(d.id_danhmuc=s.id_danhmuc)";
    $all_sanpham = pdo_query($sql);
    return $all_sanpham;  
}
function chitiet_sanpham($size , $id_sanpham){
    $sql = "select * from chitiet_sanpham where size_chitiet='$size' and id_sanpham=$id_sanpham";
    $chitiet_sanpham = pdo_query_one($sql);
    // if($chitiet_sanpham == ''){
    //     $check = "0";
    // }
    // return $check;
    return $chitiet_sanpham;
}
function sp_theoloai($id_danhmuc){
    $sql = "select * from sanpham where id_danhmuc=$id_danhmuc";
    $sp_theoloai = pdo_query($sql);
    return $sp_theoloai;
}

function sanphamlienquan($id_sanpham){
    $sql = "SELECT id_danhmuc FROM sanpham WHERE id_sanpham=$id_sanpham";
    $sanphamlienquan = pdo_query_one($sql);
    return $sanphamlienquan;
}
// ADMIN
function add_sanpham($title_sanpham , $img_sanpham , $description_sanpham , $id_danhmuc){
    $sql = "INSERT INTO sanpham (`title_sanpham` , `img_sanpham` , `description_sanpham` , `id_danhmuc`) VALUE ('$title_sanpham' , '$img_sanpham' , '$description_sanpham' , '$id_danhmuc')";
    pdo_execute($sql);
}
function all_sanphamadmin(){
    $sql = "SELECT * FROM sanpham";
    $all_sanpham_admin = pdo_query($sql);
    return $all_sanpham_admin;
}
function one_sanphamadmin($id_sanpham){
    $sql = "select * from sanpham where id_sanpham=$id_sanpham";
    $one_sanphamadmin = pdo_query_one($sql);
    return $one_sanphamadmin;
}
function update_sanpham($id_sanpham , $title_sanpham , $img_sanpham , $description_sanpham , $id_danhmuc){
    $sql = "UPDATE sanpham SET title_sanpham='$title_sanpham' , img_sanpham='$img_sanpham' , description_sanpham='$description_sanpham' , id_danhmuc='$id_danhmuc' WHERE id_sanpham=$id_sanpham";
    pdo_execute($sql);

}
function delete_sanpham($id_sanpham){
    $sql = "DELETE FROM sanpham WHERE id_sanpham=$id_sanpham";
    pdo_execute($sql);
    
}
function all_ctsp() {
    $sql = "SELECT * FROM chitiet_sanpham c INNER JOIN  sanpham s ON(c.id_sanpham=s.id_sanpham) ORDER BY s.id_sanpham";
    $all_ctsp = pdo_query($sql);
    return $all_ctsp;
}
function addctsp($soluongtonkho, $soluongdaban , $size_chitiet, $gia_chitiet , $id_sanpham){
    $sql = "INSERT INTO chitiet_sanpham (`soluongtonkho`, `soluongdaban` , `size_chitiet`, `gia_chitiet` , `id_sanpham`) VaLUES('$soluongtonkho', '$soluongdaban' , '$size_chitiet', '$gia_chitiet' , '$id_sanpham')";
    pdo_execute($sql);   
}
function one_ctsp($id){
    $sql = "SELECT * FROM chitiet_sanpham WHERE id_chitietsanpham=$id";
    $one_ctsp = pdo_query_one($sql);
    return $one_ctsp;
}
function edit_ctsp($soluongtonkho, $soluongdaban , $size_chitiet, $gia_chitiet , $id_sanpham ,$id_chitietsanpham){
    $sql = "UPDATE chitiet_sanpham SET soluongtonkho='$soluongtonkho' , soluongdaban='$soluongdaban' , size_chitiet='$size_chitiet', gia_chitiet='$gia_chitiet' , id_sanpham='$id_sanpham' WHERE id_chitietsanpham=$id_chitietsanpham";
    pdo_execute($sql);
}
function delete_ctsp($id_chitietsanpham){
    $sql = "DELETE FROM chitiet_sanpham WHERE id_chitietsanpham=$id_chitietsanpham";
    pdo_execute($sql);
}
?>