<section class="dangky">
        <div class="box_title" style="font-size: 25px;">Đăng ký thành viên</div>
        <div class="box_content form_account">
            <form action="index.php?act=dangky" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div>
                     <p>Tên đăng nhập</p>
                    <input type="text" name="user" placeholder="user">
                </div>
                 <p>Mật khẩu</p>
                <div>
                    <input type="password" name="pass" placeholder="pass">
                </div>
                <p> Ảnh Cá Nhân</p>
                <div>
                    <input type="file" name="avatar" placeholder="ảnh cá nhân">
                </div>
                 <p>Địa Chỉ</p>
                <div>
                    <input type="text" name="address" placeholder="địa chỉ">
                </div>
                 <p>SĐT</p>
                <div>
                    <input type="text" name="tel" placeholder="số điện thoại">
                </div>
                <?php if( isset($thongbao)){ echo $thongbao,"<br>";}  ?>
                <button type="submit" value="Đăng ký" name="dangky">Đăng Ký</button>
                     Đã có tài khoản?<a href="index.php?act=dangnhap"> Đăng nhập ngay</a>
            </form>

        </div>

    </div>

    </section>

