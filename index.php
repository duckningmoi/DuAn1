<?php
include "Model/pdo.php";
include "View/Client/header.php";
include "Model/sanpham.php";
include "Model/taikhoan.php";
$all_sanpham = all_sanpham_home();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietsanpham":
            $id_sanpham = $_GET['id_sanpham'];
            if ((isset($_POST['M']))) {
                $size = $_POST['M'];
                $chitiet_sanpham = chitiet_sanpham($size, $id_sanpham);
                if ($chitiet_sanpham == false) {
                    $thongbao = "hết hàng";
                }
                $one_sanpham = one_sanpham($id_sanpham);
                include "View/Client/chitietsanpham.php";
            } else if (isset($_POST['XL'])) {
                $size = $_POST['XL'];
                $chitiet_sanpham = chitiet_sanpham($size, $id_sanpham);
                $one_sanpham = one_sanpham($id_sanpham);
                if ($chitiet_sanpham == false) {
                    $thongbao = "hết hàng";
                }
                include "View/Client/chitietsanpham.php";
            } else if (isset($_POST['L'])) {
                $size = $_POST['L'];
                $chitiet_sanpham = chitiet_sanpham($size, $id_sanpham);
                if ($chitiet_sanpham == false) {
                    $thongbao = "hết hàng";
                }
                $one_sanpham = one_sanpham($id_sanpham);
                include "View/Client/chitietsanpham.php";
            } else {
                $id_sanpham = $_GET['id_sanpham'];
                $one_sanpham = one_sanpham($id_sanpham);
                $sl_1_loai = sl_1_loai($id_sanpham);
                include "View/Client/chitietsanpham.php";
            }

            break;
        case "sanpham":
            if(isset($_GET['iddm'])){
                $iddm = $_GET['iddm'];
            }
            $all_sanpham = all_sanpham_home();
            include "View/Client/sanpham.php";
            break;

        case "dangky" :
            if(isset($_POST['dangky']) && $_POST['dangky']){
                $tentaikhoan_user = $_POST['user'];
                $sdt_user = $_POST['tel'];
                $diachi_user = $_POST['address'];
                $gmail_user = $_POST['email'];
                $password_user = $_POST['pass'];
                $avatar = $_POST['avatar'];
                insert_user($gmail_user,$sdt_user,$tentaikhoan_user,$diachi_user,$password_user,$avatar);
                $thongbao = "Thêm Thành Công";

            }
            include "View/Client/login/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap'])) {
                $loginMess = dangnhap($_POST['user'], $_POST['pass']);
                $role = queryrole($_POST['user'], $_POST['pass']);
                include "View/Client/home.php";
            }
            else{
            include "View/Client/login/dangnhap.php";
            }
            break;
}

        


} else {
    include "View/Client/home.php";
}
include "View/Client/footer.php";
