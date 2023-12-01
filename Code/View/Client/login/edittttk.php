<?php
if (empty($_SESSION['user'])) {
    header("location: index.php?act=dangnhap");
}
?>
<?php if (isset($thongbao)) : ?>
    <script>
        alert('<?= $thongbao ?>')
    </script>
<?php endif ?>
<hr><br><br>
<section class="dangky">
    <div class="box_content form_account">
        <form enctype="multipart/form-data" class="form-tt" action="index.php?act=edittttk" method="post">
            <h2>Sửa Thông Tin Tài Khoản</h2>

            <br> <br>

            <i class="far fa-user"></i>
            <label for="">Tên Người Dùng: </label>
            <input type="text" name="ten_user" value="<?= $tkez['ten_user'] ?>">
<br>

            <i class="fas fa-key"></i>
            <label for="">PassWord Cũ: </label>
            <input type="password" name="password_userold" value="">
            <i class="fas fa-key"></i>
            <label for="">PassWord Mới: </label>
            <input type="password" name="password_usernew" value="">
            <i class="fa-light fa-phone"></i>
            <label for="">Số Điện Thoại: </label>
            <input type="text" name="sdt_user" value="<?= $tkez['sdt_user'] ?>">


            <br> <br>

            <i class="fa-light fa-house"></i>
            <label for="">Địa Chỉ: </label>
            <input type="text" name="diachi_user" value="<?= $tkez['diachi_user'] ?>">



            <br> <br>

            <i class="fa-regular fa-envelope"></i>
            <label for="">Email: </label>
            <input type="text" name="gmail_user" value="<?= $tkez['gmail_user'] ?>">


            <br> <br>
            <br> <br>
            <i class="fa-solid fa-user-tie"></i>
            <label for="">Ảnh Đại Diện: </label>
            <br>
            <input type="hidden" name="avatar" value="<?= $tkez['avatar'] ?>">
            <img src="Images/<?= $tkez['avatar'] ?>" alt="" width="120px">
            <input type="file" name="hinh" id="hinh" value="">

            <br> <br>

            <i class="fa-solid fa-signature"></i>
            <label for="">Tên Đăng Nhập: </label>
            <?= $tkez['tentaikhoan_user'] ?>

            <br> <br>

            <input name="edittttk" type="submit" value="Lưu Thay Đổi">
        </form>
    </div>
    </div>
</section>
<br> <br> <br>
<style>
    .form-tt {
        width: 400px;
        border-radius: 10px;
        overflow: hidden;
        padding: 55px 55px 37px;
        background: #9152f8;
        background: -webkit-linear-gradient(top, #7579ff, #b224ef);
        background: -o-linear-gradient(top, #7579ff, #b224ef);
        background: -moz-linear-gradient(top, #7579ff, #b224ef);
        background: linear-gradient(top, #7579ff, #b224ef);
        margin-left: 50px;
    }

    .form-tt h2 {
        font-size: 30px;
        color: #fff;
        line-height: 1.2;
        text-align: center;
        text-transform: uppercase;
        display: block;
        margin-bottom: 30px;
    }

    .form-tt input[type=text],
    .form-tt input[type=password] {
        font-family: Poppins-Regular;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        display: block;
        width: calc(100% - 10px);
        height: 45px;
        background: 0 0;
        padding: 10px 0;
        border-bottom: 2px solid rgba(255, 255, 255, .24) !important;
        border: 0;
        outline: 0;
    }

    .form-tt input[type=text]::focus,
    .form-tt input[type=password]::focus {
        color: red;
    }

    .form-tt input::placeholder {
        color: #fff;
    }

    .form-tt input[type=submit] {
        margin: 0 auto;
        font-size: 16px;
        color: #555;
        line-height: 1.2;
        padding: 0 20px;
        width: 200px;
        height: 50px;
        border-radius: 25px;
        background: #fff;
        position: relative;
        z-index: 1;
        border: 0;
        outline: 0;
        display: block;

    }

    .psw-text {
        color: #fff;
    }
</style>