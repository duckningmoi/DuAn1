<?php
if(empty($_SESSION['user'])){
    header("location: index.php?act=dangnhap");
}
?>
<hr><br><br> <section class="dangky">
    <div class="box_title" style="font-size: 25px;">Thông Tin Tài Khoản</div>
    <div class="box_content form_account">
        <form action="" method="post">
       
        
        <?php if (isset($thongbao)) { ?>
            <script>
            alert("<?= $thongbao ?>")
        </script>   
             <?php } ?>
<br> <br>
            <div>
                <i class="far fa-user"></i>
                <label for="">Tên Người Dùng: </label>
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
            <img src="Images/<?= $tkez['avatar'] ?>" alt="">    
            </div>
            <br> <br>
            <div>
            <i class="fa-solid fa-signature"></i>
            <label for="">Tên Đăng Nhập: </label>
            <?= $tkez['tentaikhoan_user'] ?>
            </div>
    <br> <br>
                <button type="submit" value="Sửa" name="tttk">Sửa Tài Khoản</button>
                <?php if(isset($_SESSION['admin'])){ ?>
                    <a href="">Đăng nhập Admin</a>
               <?php }?>
               <button type="submit" value="dangxuat"> <a href="index.php?act=dangxuat"> Đăng Xuất </a></button>
        </form>
    </div>
    </div>
</section>
<br> <br> <br>