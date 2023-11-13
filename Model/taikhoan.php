<?php

function insert_user($email,$tel,$tentaikhoan_user,$address,$pass,$avatar){
    $sql = "insert into user (sdt_user , diachi_user , gmail_user , tentaikhoan_user , password_user , role , avatar) value ('$tel' , '$address' , '$email' , '$tentaikhoan_user' , '$pass' , '0' , '$avatar')";
    pdo_execute($sql);
}

function dangnhap($user,$pass) {
    $sql="SELECT * FROM user WHERE tentaikhoan_user='$user' and password_user='$pass'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        $_SESSION['user'] = $user;
    } else {
        return "Thông tin tài khoản sai";
    }
}
function queryrole($user,$pass) {
    $sql="SELECT * FROM user WHERE tentaikhoan_user='$user' and password_user='$pass' and role = '1'";
    $taikhoan = pdo_query_one($sql);

    if($taikhoan != false){
        $_SESSION['admin'] = "đúng";
    }
    else {
        return"Tài khoản clien";
    }
    
}

?>