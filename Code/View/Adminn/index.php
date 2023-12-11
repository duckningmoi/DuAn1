
<?php

session_start();
include "../../Model/pdo.php";
include "../../Model/sanpham.php";
include "../../Model/taikhoan.php";
include "../../Model/cart.php";
include "../../Model/binhluan.php";
include "../../Model/danhmuc.php";
include "../../Model/phantrang.php";

if(empty($_SESSION['admin'])){
    echo "Bạn khong phải admin";
    header("location : ../../View/Client/");
    die;
}
include "../../View/Adminn/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "listsp":
            $all_sanphamadmin = all_sanphamadmin();

            include "../../View/Adminn/sanpham/list.php";
            break;
        case "editsp":
            $all_danhmuc = all_danhmuc();
            if (isset($_GET['id'])) {
                $one_sanphamadmin = one_sanphamadmin($_GET['id']);
            if(isset($_POST['editsp']) && ($_POST['editsp'])){
                $id_sanpham = $_POST['id_sanpham'];
                $title_sanpham = $_POST['title'];
                $des = $_POST['desc'];
                $file = $_FILES['img'];
                if ($file['size'] > 0) {
                    $img_sanpham = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../../Images/sp/" . $img_sanpham);
                } else {
                    $img_sanpham = $_POST['img'];
                }
                $id_danhmuc = $_POST['id_danhmuc'];
                update_sanpham($id_sanpham  ,$title_sanpham , $img_sanpham,  $des, $id_danhmuc);
                $thongbao = "Sửa Sản Phẩm Thành Công";
            }}
            include "../../View/Adminn/sanpham/edit.php";
            break;
        case "addsp":
            $all_danhmuc = all_danhmuc();
            if (isset($_POST['addsp']) && ($_POST['addsp'])) {
                $title_sanpham = $_POST['title'];
                $des = $_POST['desc'];
                $file = $_FILES['img_sanpham'];
                if ($file['size'] > 0) {
                    $img_sanpham = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../../Images/sp/" . $img_sanpham);
                }
                $id_danhmuc = $_POST['id_danhmuc'];
                add_sanpham($title_sanpham, $img_sanpham , $des, $id_danhmuc);
                $thongbao = "Thêm Sản Phẩm Thành Công";
            }
            include "../../View/Adminn/sanpham/add.php";
            break;
        case "delsp":
            if(isset($_GET['id'])){
            delete_sanpham($_GET['id']);
            }
            $thongbao = "Xóa Sản Phẩm Thành Công";
            $all_sanphamadmin = all_sanphamadmin();
            include "../../View/Adminn/sanpham/list.php";
            break;
        case "listctsp":
            $all_ctsp = all_ctsp();
            include "../../View/Adminn/chitietsanpham.php/list.php";
            break;
        case "addctsp":
            $all_sanphamadmin = all_sanphamadmin();
            if (isset($_POST['addctsp']) && ($_POST['addctsp'])) {
                $soluongtonkho = $_POST['soluongtonkho'];
                $soluongdaban = $_POST['soluongdaban'];
                $size_chitiet = $_POST['size_chitiet'];
                $gia_chitiet = $_POST['gia_chitiet'];
                $id_sanpham = $_POST['id_sanpham'];
                addctsp($soluongtonkho, $soluongdaban , $size_chitiet, $gia_chitiet , $id_sanpham);
                $thongbao = "Thêm Chi Tiết Sản Phẩm Thành Công";
            }
            include "../../View/Adminn/chitietsanpham.php/add.php";
            break;
        case "editctsp":
            $all_sanphamadmin = all_sanphamadmin();
            $one_ctsp = one_ctsp($_GET['id']);
            if (isset($_POST['editctsp']) && ($_POST['editctsp'])) {
                $id_chitietsanpham = $_GET['id'];
                $soluongtonkho = $_POST['soluongtonkho'];
                $soluongdaban = $_POST['soluongdaban'];
                $size_chitiet = $_POST['size_chitiet'];
                $gia_chitiet = $_POST['gia_chitiet'];
                $id_sanpham = $_POST['id_sanpham'];
                edit_ctsp($soluongtonkho, $soluongdaban , $size_chitiet, $gia_chitiet , $id_sanpham ,$id_chitietsanpham);
                $thongbao = "Sửa Chi Tiết Sản Phẩm Thành Công";
                include "../../View/Adminn/chitietsanpham.php/list.php";

            }
            include "../../View/Adminn/chitietsanpham.php/edit.php";
            break;
        case "delctsp":
            $id_chitietsanpham = $_GET['id'];
            delete_ctsp($id_chitietsanpham);
            $all_ctsp = all_ctsp();
            $thongbao = "Xóa Thành Công";
            include "../../View/Adminn/chitietsanpham.php/list.php";
            break;

        case "listdm":
            $all_danhmuc = all_danhmuc();
            include "../../View/Adminn/danhmuc/list.php";
            break;
        
        case "adddm":
            if (isset($_POST['adddm']) && ($_POST['adddm'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $file = $_FILES['img_danhmuc'];
                if ($file['size'] > 0) {
                    $img_danhmuc = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../../Images/" . $img_danhmuc);
                }
                adddm($ten_danhmuc , $img_danhmuc);
                $thongbao = "Thêm Danh Mục Thành Công";
            }
            include "../../View/Adminn/danhmuc/add.php";
            break;
        case "editdm":
            $one_danhmuc = one_danhmuc($_GET['id']);
            if(isset($_POST['editdm']) && ($_POST['editdm'])){
                $id_sanpham = $_POST['id_danhmuc'];
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $file = $_FILES['img'];
                if ($file['size'] > 0) {
                    $img_danhmuc = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../../Images/" . $img_danhmuc);
                } else {
                    $img_danhmuc = $_POST['img'];
                }
                $id_danhmuc = $_POST['id_danhmuc'];
                update_dm($id_danhmuc  ,$ten_danhmuc , $img_danhmuc);
                $thongbao = "Sửa Danh Mục Thành Công";
                $all_danhmuc = all_danhmuc();
                include "../../View/Adminn/danhmuc/list.php";

            }
            include "../../View/Adminn/danhmuc/edit.php";
            break;
        case "deldm":
            delete_danhmuc($_GET['id']);
            $all_danhmuc = all_danhmuc();
            $thongbao = "Xóa Danh Mục Thành Công";
            include "../../View/Adminn/danhmuc/list.php";
            break;
        
        case "listuser":
            $all_user = all_user();
            include "../../View/Adminn/taikhoan/list.php";
            break;
        case "adduser":
            if (isset($_POST['adduser']) && $_POST['adduser']) {
                $ten_user = $_POST['ten_user'];
                $sdt_user = $_POST['sdt_user'];
                $diachi_user = $_POST['diachi_user'];
                $gmail_user = $_POST['gmail_user'];
                $tentaikhoan_user = $_POST['tentaikhoan_user'];
                $password_user = $_POST['password_user'];
                $file = $_FILES['avatar'];
                $role = 0;
                if ($file['size'] > 0) {
                    $avatar = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../../Images/" . $avatar);
                }
                        insert_user_admin($ten_user , $sdt_user,  $diachi_user ,$gmail_user ,$tentaikhoan_user, $password_user, $role ,$avatar);
                        $id_user = select_tk_ez($tentaikhoan_user);
                        addcartkhidangky($id_user['id_user']);
                        $thongbao = "Thêm Tài Khoản Thành Công";
                        
                    }
            include "../../View/Adminn/taikhoan/add.php";
            break;
        case "edituser":
            $one_user = one_user($_GET['id']);
            if (isset($_POST['edituser']) && $_POST['edituser']) {
                $id_user = $_POST['id'];
                $ten_user = $_POST['ten_user'];
                $sdt_user = $_POST['sdt_user'];
                $diachi_user = $_POST['diachi_user'];
                $gmail_user = $_POST['gmail_user'];
                $tentaikhoan_user = $_POST['tentaikhoan_user'];
                $password_user = $_POST['password_user'];
                $file = $_FILES['avatar'];
                $role = 0;
                if ($file['size'] > 0) {
                    $avatar = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../../Images/" . $avatar);
                }
                else{
                    $avatar = $_POST['avatar'];
                }
                edittk_admin($id_user , $ten_user , $sdt_user , $diachi_user , $gmail_user , $password_user , $avatar, $role , $tentaikhoan_user);
                $thongbao = "Sửa Tài Khoản Thành Công";
                        
                    }
            include "../../View/Adminn/taikhoan/edit.php";
            break;
        case "deluser":
            delete_giohangcunguser($_GET['id']);
            delete_user($_GET['id']);
            $thongbao = "Xóa User Thành Công";
            $all_user = all_user();
            include "../../View/Adminn/taikhoan/list.php";
            break;    
            
        case "listcm":
            $all_binhluan = all_binhluan();
            include "../../View/Adminn/binhluan/list.php";
            break;
        case "delcm":
            delete_cm($_GET['id']);
            $thongbao = "Xóa Bình Luận Thành Công";
            $all_binhluan = all_binhluan();
            include "../../View/Adminn/binhluan/list.php";
            break;


        case "listbill":
            $bill_admin = bill_admin();
            include "../../View/Adminn/donhang/list.php";
            break;
        
        case "editbill":
            $edit_bill = edit_bill($_GET['id']);
            if (isset($_POST['editbill']) && $_POST['editbill']) {
                $id_bill = $_POST['id_bill'];
                $diachi_giaohang = $_POST['diachi_giaohang'];
                $sdt_nguoinhan = $_POST['sdt_nguoinhan'];
                $ten_nguoinhan = $_POST['ten_nguoinhan'];
                $phuongthuc_thanhtoan = $_POST['phuongthuc_thanhtoan'];
                $tongtien = $_POST['tongtien'];
                $trangthai_bill = $_POST['trangthai_bill'];
                editbill($id_bill, $diachi_giaohang , $sdt_nguoinhan , $ten_nguoinhan , $phuongthuc_thanhtoan , $tongtien , $trangthai_bill);
                $thongbao = "Sửa đơn hàng thành công";
                if($trangthai_bill == 'Giao thành công'){
                    $select_spbill = select_spinbill($id_bill);
                    $del_slsp = del_slsp($id_bill);
                    foreach ($del_slsp as $del){
                        if($del['id_chitietsanpham'] == true ){
                            thucthi_delsl($del['soluong_chitiet'],$del['id_chitietsanpham']);
                        }
                       
                    }
                    add_doanhthu($id_bill , $select_spbill['id_sanpham']  , $tongtien , $select_spbill['soluong_chitiet']);

                }
                if($trangthai_bill == 'Giao thất bại'){
                    $select_spbill = select_spinbill($id_bill);
                    add_doanhthufalse( $id_bill);
                }
            }
            include "../../View/Adminn/donhang/edit.php";
            break;
        
        case "delbill":
            $bill_admin = bill_admin();
            huydonhang($_GET['id']);
            $thongbao = "Xóa Thành Công";
            include "../../View/Adminn/donhang/list.php";
            break;

        case "bieudo":
            $refwda =slsptrongkho();
            $slsptrongkho = $refwda['slsptrongkho'];
            $mngdbfd = slspadmin();
            $slspadmin  = $mngdbfd['slspadmin'];
            $jyhgrf = sldanhmuc();
            $sldanhmuc = $jyhgrf['sldanhmuc'];
            $bieudo = bieudo();
            $spbanchay =one_sanphamadmin($bieudo['spmax']);
            include "../../View/Adminn/thongke/bieudo.php";
            break;
    }


}
else{
    $refwda =slsptrongkho();
    $slsptrongkho = $refwda['slsptrongkho'];
    $mngdbfd = slspadmin();
    $slspadmin  = $mngdbfd['slspadmin'];
    $jyhgrf = sldanhmuc();
    $sldanhmuc = $jyhgrf['sldanhmuc'];
    $bieudo = bieudo();
    $spbanchay =one_sanphamadmin($bieudo['spmax']);
    include "../../View/Adminn/thongke/bieudo.php";
}
 

include "../../View/Adminn/footer.php";
?>
