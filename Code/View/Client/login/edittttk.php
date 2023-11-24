<?php
if(empty($_SESSION['user'])){
    header("location: index.php?act=dangnhap");
}
?>
<?php if(isset($thongbao)) : ?>
    <script>alert('<?= $thongbao ?>')</script>
<?php endif ?>
<hr><br><br> <section class="dangky">
    <div class="box_title" style="font-size: 25px;">Sửa Thông Tin Tài Khoản</div>
    <div class="box_content form_account">
        <form enctype="multipart/form-data" action="index.php?act=edittttk" method="post">
       
<br> <br>
            <div>
                <i class="far fa-user"></i>
                <label for="">Tên Người Dùng: </label>
                <input type="text" name="ten_user" value="<?= $tkez['ten_user'] ?>">
            </div>
            <div> <br><br>
            <i class="fas fa-key"></i>
            <label for="">PassWord Cũ: </label>
            <input type="password" name="password_userold" value="">
            </div> <br> <br>
            <label for="">PassWord Mới: </label>
            <input type="password" name="password_usernew" value="">
            <div>
            <br> <br>
            <i class="fa-light fa-phone"></i>
            <label for="">Số Điện Thoại: </label>
            <input type="text" name="sdt_user" value="<?= $tkez['sdt_user'] ?>">
           
            </div>
            <br> <br>
            <div>
            <i class="fa-light fa-house"></i>
            <label for="">Địa Chỉ: </label>
            <input type="text" name="diachi_user" value="<?= $tkez['diachi_user'] ?>">

           
            </div>
            <br> <br>
            <div>
            <i class="fa-regular fa-envelope"></i>
            <label for="">Email: </label>
            <input type="text" name="gmail_user" value="<?= $tkez['gmail_user'] ?>">
             
            </div>
            <br> <br>
            <div>
            <i class="fa-solid fa-user-tie"></i>
            <label for="">Ảnh Đại Diện: </label>
            <input type="hidden" name="avatar" value="<?= $tkez['avatar'] ?>">
            <img src="Images/<?= $tkez['avatar'] ?>" alt="" width="120px">   
            <input type="file" name="hinh" id="hinh" value=""> 
            </div>
            <br> <br>
            <div>
            <i class="fa-solid fa-signature"></i>
            <label for="">Tên Đăng Nhập: </label>
            <?= $tkez['tentaikhoan_user'] ?>
            </div>
    <br> <br>
               
    <input class="mr20" name="edittttk" type="submit" value="Lưu Thay Đổi">
        </form>
    </div>
    </div>
</section>
<br> <br> <br>