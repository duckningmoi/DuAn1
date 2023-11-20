<?php
session_start();
include "Model/pdo.php";
include "View/Client/header.php";
include "Model/sanpham.php";
include "Model/taikhoan.php";
include "Model/cart.php";
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
                //check:
                $check_taikhoan = check_taikhoan();
                foreach($check_taikhoan as $checktk){
                    if(($tentaikhoan_user == $checktk['tentaikhoan_user']) || $gmail_user == $checktk['gmail_user']){
                        $thongbao = "Tên tài khoản hoặc số điện thoại đã tồn tại";
                        break;
                    } else{
                        insert_user($gmail_user,$sdt_user,$tentaikhoan_user,$diachi_user,$password_user,$avatar);
                        $thongbao = "Thêm Thành Công";
                        break;
                    }
                }
                //end check
                

            }
            include "View/Client/login/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap'])) {
                $loginMess = dangnhap($_POST['user'], $_POST['pass']);
                $role = queryrole($_POST['user'], $_POST['pass']);
                $tk = select_tk($_POST['user'], $_POST['pass']);
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(isset($_SESSION['user'])){
                        $thongbao = "Đăng nhập thành công";
                        $tkez = select_tk_ez($_SESSION['user']);
                    include "View/Client/login/tttk.php";

                    }
                    else{
                        $thongbao = "Vui lòng kiểm tra lại ";
                        include "View/Client/login/dangnhap.php";
                    }
                }

            }
            else{
            include "View/Client/login/dangnhap.php";
            }
            break;
        
        case "tttk":
            $tkez = select_tk_ez($_SESSION['user']);
            include "View/Client/login/tttk.php";
            break;
        case "dangxuat":
                dangxuat();
                include "View/Client/home.php";
            
            break;

        case "addcart":            
                $id_giohang = giohang_user($_SESSION['user']);
                addcarrt($_GET['id_sanpham'] , $id_giohang['id_giohang']);
                $thongbao = "Đã Thêm Vào Giỏ Hàng";
                $select_cart = select_cart($id_giohang['id_giohang']);
            include "View/Client/cart.php";
            break;
        
        case "cart":
            $id_giohang = giohang_user($_SESSION['user']);
            $select_cart = select_cart($id_giohang['id_giohang']);
            include "View/Client/cart.php";
            break;

}

        


} else {
    include "View/Client/home.php";
}
include "View/Client/footer.php";
