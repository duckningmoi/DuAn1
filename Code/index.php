<?php
session_start();
include "Model/pdo.php";
include "Model/sanpham.php";
include "Model/taikhoan.php";
include "Model/cart.php";
include "Model/binhluan.php";
include "Model/danhmuc.php";
include "Model/phantrang.php";
include "View/Client/header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietsanpham":
            if (isset($_SESSION['user'])) {
                $id_user = select_tk_ez($_SESSION['user']);
            }
            $binhluan_one_sp = binhluan_one_sp($_GET['id_sanpham']);
            $id_sanpham = $_GET['id_sanpham'];
            $sanphamlienquan = sanphamlienquan($id_sanpham);
            //sp lq
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $kyw = $_POST['keyword'];
                $all_sanpham = load_timkiem($kyw);
                $iddm = "";
            }else{
                $iddm = $sanphamlienquan['id_danhmuc'];

                $all_sanpham = all_sanpham();
                
            }
            
            
            //end
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
                $alert = "Vui lòng chọn size";
                $id_sanpham = $_GET['id_sanpham'];
                $one_sanpham = one_sanpham($id_sanpham);
                $sl_1_loai = sl_1_loai($id_sanpham);
                include "View/Client/chitietsanpham.php";
            }
            


            
            break;
        case "addbl":
            $id_user = select_tk_ez($_SESSION['user']);
            $id_sanpham = $_GET['id_sanpham'];
            $noidung_binhluan = $_POST['noidung_binhluan'];
            insert_binhluan($id_sanpham, $noidung_binhluan, $id_user['id_user']);



            $id_user = select_tk_ez($_SESSION['user']);
            $binhluan_one_sp = binhluan_one_sp($_GET['id_sanpham']);
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

                $alert = "Vui lòng chọn size";
                $id_sanpham = $_GET['id_sanpham'];
                $one_sanpham = one_sanpham($id_sanpham);
                $sl_1_loai = sl_1_loai($id_sanpham);
                include "View/Client/chitietsanpham.php";
            }
            break;
        case "sanpham":
            if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                $kyw = $_POST['keyword'];
                $all_sanpham = load_timkiem($kyw);
                $iddm = "";
            }else{
                if (isset($_GET['iddm'])) {
                    $iddm = $_GET['iddm'];
                }

                $all_sanpham = all_sanpham();
            }
            
            include "View/Client/sanpham.php";
            break;

        case "slide404":
            include "View/Client/slide404.php";
            break;

        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $tentaikhoan_user = $_POST['user'];
                $sdt_user = $_POST['tel'];
                $diachi_user = $_POST['address'];
                $gmail_user = $_POST['email'];
                $password_user = $_POST['pass'];
                $avatar = $_POST['avatar'];
                //check:
                $check_taikhoan = check_taikhoan();
                foreach ($check_taikhoan as $checktk) {
                    if (($tentaikhoan_user == $checktk['tentaikhoan_user']) || $gmail_user == $checktk['gmail_user']) {
                        $thongbao = "Tên tài khoản hoặc số điện thoại đã tồn tại";
                        break;
                    } else {
                        insert_user($gmail_user, $sdt_user, $tentaikhoan_user, $diachi_user, $password_user, $avatar);
                        $id_user = select_tk_ez($tentaikhoan_user);
                        addcartkhidangky($id_user['id_user']);
                        $thongbao = "Thêm Thành Công";
                        break;
                    }
                }
                //end check


            }
            include "View/Client/login/dangky.php";
            break;

        case "dangnhap":
            if(isset($_SESSION['usser'])){
                header("location: index.php?act=tttk");
                die;
            }
            if (isset($_POST['dangnhap'])) {
                $loginMess = dangnhap($_POST['user'], $_POST['pass']);
                $role = queryrole($_POST['user'], $_POST['pass']);
                $tk = select_tk($_POST['user'], $_POST['pass']);
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_SESSION['user'])) {
                        $thongbao = "Đăng nhập thành công";
                        $tkez = select_tk_ez($_SESSION['user']);
                        include "View/Client/login/tttk.php";
                    } else {
                        $thongbao = "Vui lòng kiểm tra lại ";
                        include "View/Client/login/dangnhap.php";
                    }
                }
            } else {
                include "View/Client/login/dangnhap.php";
            }
            break;

        case "tttk":
            $tkez = select_tk_ez($_SESSION['user']);
            include "View/Client/login/tttk.php";
            break;
        case "edittttk":
            $tkez = select_tk_ez($_SESSION['user']);
            if (isset($_POST['edittttk']) && ($_POST['edittttk'])) {
                $password_userold = $_POST['password_userold'];
                $ten_user = $_POST['ten_user'];
                $password_user = $_POST['password_usernew'];
                $sdt_user = $_POST['sdt_user'];
                $diachi_user = $_POST['diachi_user'];
                $gmail_user = $_POST['gmail_user'];
                $file = $_FILES['hinh'];
                if ($file['size'] > 0) {
                    $avatar = $file['name'];
                    move_uploaded_file($file['tmp_name'], "Images/" . $avatar);
                } else {
                    $avatar = $_POST['avatar'];
                }
                if ($password_userold == $tkez['password_user']) {
                    edittttk($ten_user, $sdt_user, $diachi_user, $gmail_user, $password_user, $avatar, $_SESSION['user']);
                    $thongbao = "Cập Nhật Thành Công";
                } else {
                    $thongbao = "Vui Lòng Nhập Đúng Mật Khẩu Cũ";
                }
            }
            include "View/Client/login/edittttk.php";
            break;
        case "dangxuat":
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
                die;
            }
            dangxuat();
            include "View/Client/login/dangnhap.php";
            if (empty($_GET['page'])) {
                $_GET['page'] = 1;
            }
            $all_danhmuc = all_danhmuc();
            $total_record = total_record();
            $batdau = ($_GET['page'] - 1) * 8;
            $all_sanpham = all_sanpham_home($batdau);
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 8;
            $total_page = ceil($total_record['count'] / $limit);
            include "View/Client/home.php";

            break;

        case "addcart":
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
                die;
            }
            $id_giohang = giohang_user($_SESSION['user']);
            addcarrt($_GET['id_sanpham'], $id_giohang['id_giohang']);
            $thongbao = "Đã Thêm Vào Giỏ Hàng";
            $select_cart = select_cart($id_giohang['id_giohang']);
            include "View/Client/cart.php";
            break;

        case "cart":
            $all_voucher = all_voucher();
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
                die;
            }
            $id_giohang = giohang_user($_SESSION['user']);
            if (isset($_POST['cong'])  && ($_POST['cong'])) {
                cong($_POST['cong'], $id_giohang['id_giohang']);
            }
            if (isset($_POST['tru'])  && ($_POST['tru'])) {
                tru($_POST['tru']);
            }
            $select_cart = select_cart($id_giohang['id_giohang']);
            include "View/Client/cart.php";
            break;
        case "delcart":
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
                die;
            }
            $id_chitietsanpham = $_GET['id_chitietsanpham'];
            delete_cart($id_chitietsanpham);
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
            }
            $id_giohang = giohang_user($_SESSION['user']);
            include "View/Client/cart.php";
            break;

            case "test":
                include "View/Client/test.php";
                break;

            // code quan
        case "blog":
            include "View/Client/blog.php";
            break;
        case "about":
            include "View/Client/about.php";
            break;
        case "contact":
            include "View/Client/contact.php";
            break;
        case "ins":
            include "View/Client/ins.php";
            break;
        case "group":
            include "View/Client/group.php";
            break;
            // end code quan

        case "thanhtoan":
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
                die;
            }

            if (isset($_POST['sudungvoucher']) && ($_POST['sudungvoucher'])) {
                $ma_voucher = $_POST['ma_voucher'];
                $voucher = voucher($ma_voucher);
                foreach ($voucher as $voucher) {
                    if ($voucher['role_voucher'] == 1) {
                        $voucher_vanchuyen = 35000;
                    } else {
                        $voucher_sanpham = $voucher['giam'];
                    }
                }
            }
            $id_giohang = giohang_user($_SESSION['user']);
            $select_cart = select_cart($id_giohang['id_giohang']);
            $tkez = select_tk_ez($_SESSION['user']);
            if (isset($_POST['hoantatdonhang']) && ($_POST['hoantatdonhang'])) {
                $diachi_giaohang = $_POST['bill_diachi'];
                $sdt_nguoinhan = $_POST['bill_sdt'];
                $ten_nguoinhan = $_POST['name'];
                $phuongthuc_thanhtoan = "COD";
                $tongtien = $_POST['tongtien'];
                $id_user = $tkez['id_user'];
                $thoigiandathang = $_POST['thoigiandathang'];
                $thongbao = "Đặt hàng thành công";
                hoantatdonhang($diachi_giaohang, $sdt_nguoinhan, $ten_nguoinhan, $phuongthuc_thanhtoan, $tongtien, $id_user, $thoigiandathang);
                $sl = select_soluong($id_giohang['id_giohang']);
                foreach ($sl as $s) {

                    $id_bill = select_bill($thoigiandathang);
                    themchitiet_bill($s['count'], $s['size_chitiet'], $s['gia_chitiet'], $id_bill['id_bill'], $s['id_chitietsanpham']);
                }
                xoatatcagiohang($id_giohang['id_giohang']);
            }
            include "View/Client/thanhtoan.php";
            break;

        case "bill":
            if (empty($_SESSION['user'])) {
                header("location: index.php?act=dangnhap");
                die;
            }
            $id_user = select_tk_ez($_SESSION['user']);
            $id_giohang = giohang_user($_SESSION['user']);
            $sl = select_soluong($id_giohang['id_giohang']);
            $select_bill_all = select_bill_all();
            $distinct_bill = distinct_bill($id_user['id_user']);
            include "View/Client/bill.php";
            break;
        case "huydonhang":

            $id_bill = $_GET['id_bill'];
            huydonhang($id_bill);
            $thongbao = "Hủy thành công đơn hàng: $id_bill";
            //include lại bill:
            $id_user = select_tk_ez($_SESSION['user']);
            $id_giohang = giohang_user($_SESSION['user']);
            $sl = select_soluong($id_giohang['id_giohang']);
            $select_bill_all = select_bill_all();
            $distinct_bill = distinct_bill($id_user['id_user']);
            include "View/Client/bill.php";
            break;
            case "home":
                if (empty($_GET['page'])) {
                    $_GET['page'] = 1;
                }
                $all_danhmuc = all_danhmuc();
                $total_record = total_record();
                $batdau = ($_GET['page'] - 1) * 8;
                $all_sanpham = all_sanpham_home($batdau);
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 8;
                $total_page = ceil($total_record['count'] / $limit);
                include "View/Client/home.php";
                break;
            case "slide_banner":
                
                break;
    }
} else {
    include "View/Client/slide404.php";
}
include "View/Client/footer.php";
