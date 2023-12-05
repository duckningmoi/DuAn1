<?php
function all_danhmuc(){
$sql = "select * from danhmuc";
$all_danhmuc = pdo_query($sql);
return $all_danhmuc;
}
function adddm($ten_danhmuc , $img_danhmuc){
    $sql = "INSERT INTO danhmuc (`ten_danhmuc` , `img_danhmuc`) VALUES ('$ten_danhmuc' , '$img_danhmuc')";
    pdo_execute($sql);
}
function one_danhmuc($id){
    $sql = "select * from danhmuc WHERE id_danhmuc=$id";
    $one_danhmuc = pdo_query_one($sql);
    return $one_danhmuc;
}
function update_dm($id_danhmuc  ,$ten_danhmuc , $img_danhmuc){
    $sql = "UPDATE danhmuc SET ten_danhmuc='$ten_danhmuc' , img_danhmuc='$img_danhmuc' WHERE id_danhmuc=$id_danhmuc";
    pdo_execute($sql);
}
function delete_danhmuc($id_danhmuc){
    $sql = "DELETE FROM danhmuc WHERE id_danhmuc=$id_danhmuc";
    pdo_execute($sql);
}
