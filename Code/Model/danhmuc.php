<?php
function all_danhmuc(){
$sql = "select * from danhmuc";
$all_danhmuc = pdo_query($sql);
return $all_danhmuc;
}