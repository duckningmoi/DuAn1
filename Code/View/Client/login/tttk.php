<?php
if(empty($_SESSION['user'])){
    header("location: index.php?act=dangnhap");
}
?>
<hr><br><br> <section class="dangky">
    
    <div class="box_content form_account">
        <form class="form-tt" action="" method="post">
        <h2 >Thông Tin Tài Khoản</h2>
        
        <?php if (isset($thongbao)) { ?>
            <script>
            alert("<?= $thongbao ?>")
        </script>   
             <?php } ?>
<br> <br>
            <div>
                <i class="far fa-user"></i>
                <label for="">Tên Người Dùng:</label> 
                <?= $tkez['ten_user'] ?>
            </div>
            <div> <br><br>
            <i class="fas fa-key"></i>
            <label for="">PassWord: </label>
            <?= $tkez['password_user'] ?>
            </div> <br> <br>
            <div>
            <i class="fa-light fa-phone"></i>
            <label for="">Số Điện Thoại: </label>
            <?= $tkez['sdt_user'] ?>
            </div>
            <br> <br>
            <div>
            <i class="fa-light fa-house"></i>
            <label for="">Địa Chỉ: </label>
            <?= $tkez['diachi_user'] ?>
            </div>
            <br> <br>
            <div>
            <i class="fa-regular fa-envelope"></i>
            <label for="">Email: </label>
            <?= $tkez['gmail_user'] ?>
            </div>
            <br> <br>
            <div>
            <i class="fa-solid fa-user-tie"></i>
            <label for="">Ảnh Đại Diện: </label>
            <img src="Images/<?= $tkez['avatar'] ?>" alt="" width="120px">    
            </div>
            <br> <br>
            <div>
            <i class="fa-solid fa-signature"></i>
            <label for="">Tên Đăng Nhập: </label>
            <?= $tkez['tentaikhoan_user'] ?>
            </div>
    <br> <br>
                <a href="index.php?act=edittttk">Sửa Tài Khoản</a>
                <?php if(isset($_SESSION['admin'])){ ?>
                    <a href="../../../../../../../GitHub/DuAn1/DuAn1/Code/View/Admin/index.php">Đăng nhập Admin</a>
               <?php }?>
               <button type="submit" value="dangxuat"> <a href="index.php?act=dangxuat"> Đăng Xuất </a></button>
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
    background: -webkit-linear-gradient(top,#7579ff,#b224ef);
    background: -o-linear-gradient(top,#7579ff,#b224ef);
    background: -moz-linear-gradient(top,#7579ff,#b224ef);
    background: linear-gradient(top,#7579ff,#b224ef);
    margin-left: 50px ;        
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
    
    .form-tt input[type=text], .form-tt input[type=password] {
    font-family: Poppins-Regular;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: calc(100% - 10px);
    height: 45px;
    background: 0 0;
    padding: 10px 0;
    border-bottom: 2px solid rgba(255,255,255,.24)!important;
    border: 0;
    outline: 0;
    }
    .form-tt input[type=text]::focus, .form-tt input[type=password]::focus {
    color: red;
    }
    .form-tt input[type=password] {
    margin-bottom: 20px;
    }
    .form-tt input::placeholder {
    color: #fff;
    }
    .form-tt img{
        border-radius: 25px;
    }
    .form-tt button {
    font-size: 16px;
    color: #555;
    line-height: 1.2;
    padding: 0 20px;
    min-width: 120px;
    height: 50px;
    border-radius: 25px;
    background: #fff;
    position: relative;
    z-index: 1;
    border: 0;
    outline: 0;
    display: block;
    margin: 30px auto;
    }

    .psw-text {
    color: #fff;
    }

</style>