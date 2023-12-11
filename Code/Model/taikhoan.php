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
//quen mk
function sendMail($email) {
    $sql="SELECT * FROM user WHERE gmail_user='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) { 
        sendMailPass($email, $taikhoan['ten_user'], $taikhoan['password_user']);       
        return "Gửi Email thành công, vui lòng truy cập email để xác thực";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $pass) {
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '6bda0a4c1abcfc';                     //SMTP username
        $mail->Password   = '4430da6c8b9967';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ninhbdph38429@fpt.edu.vn', 'VEGERCY');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la' .$pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
// end quen mk
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