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

function select_tk($user,$pass){
    $sql="SELECT * FROM user WHERE tentaikhoan_user='$user' and password_user='$pass'";
    $tk = pdo_query_one($sql);
    return $tk;

}

function select_tk_ez($user){
    $sql="SELECT * FROM user WHERE tentaikhoan_user='$user'";
    $tk = pdo_query_one($sql);
    return $tk;

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

function edittttk($ten_user , $sdt_user , $diachi_user , $gmail_user , $password_user , $avatar , $tentaikhoan_user){
    $sql = "UPDATE user SET ten_user='$ten_user' , sdt_user='$sdt_user' , diachi_user='$diachi_user' , gmail_user='$gmail_user' , password_user='$password_user' , avatar='$avatar' WHERE tentaikhoan_user='$tentaikhoan_user'";
    pdo_execute($sql);
}
function dangxuat(){
    session_destroy();
}

//check taikhoan dangky
function check_taikhoan(){
    $sql = "SELECT gmail_user , tentaikhoan_user FROM  user";
    $check_taikhoan = pdo_query($sql);
    return $check_taikhoan;
}
function one_user($id_user){
    $sql = "SELECT * FROM user WHERE id_user=$id_user";
    $one_user = pdo_query_one($sql);
    return $one_user;
}
function all_user(){
    $sql = "SELECT * FROM user";
    $all_user = pdo_query($sql);
    return $all_user;
}
function insert_user_admin($ten_user , $sdt_user,  $diachi_user ,$gmail_user ,$tentaikhoan_user, $password_user, $role, $avatar){
    $sql = "insert into user (ten_user , sdt_user , diachi_user , gmail_user , tentaikhoan_user , password_user , role , avatar) value ('$ten_user' , '$sdt_user',  '$diachi_user' ,'$gmail_user' ,'$tentaikhoan_user', '$password_user', '$role', '$avatar')";
    pdo_execute($sql);
}

function edittk_admin($id_user , $ten_user , $sdt_user , $diachi_user , $gmail_user , $password_user , $avatar, $role , $tentaikhoan_user){
    $sql = "UPDATE user SET ten_user='$ten_user' , sdt_user='$sdt_user' , diachi_user='$diachi_user' , gmail_user='$gmail_user' , password_user='$password_user', role='$role' , avatar='$avatar' WHERE id_user='$id_user'";
    pdo_execute($sql);
}

function delete_user($id_user){
    $sql = "DELETE FROM user WHERE id_user=$id_user";
    pdo_execute($sql);
}
function delete_giohangcunguser($id_user){
    $sql = "DELETE FROM giohang WHERE id_user=$id_user";
    pdo_execute($sql);

}
?>