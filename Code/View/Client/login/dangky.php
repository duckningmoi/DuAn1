<section class="dangky">
        <div class="box_title" style="font-size: 25px;">Đăng ký thành viên</div>
        <div class="box_content form_account">
            <form action="index.php?act=dangky" name="myForm" onsubmit = "return(validate());" method="post">
            <?php if (isset($thongbao)) { ?>
            <script>
            alert("<?= $thongbao ?>");
        </script>
             <?php } ?>    
            <br>
                <div>
                    <p>Email</p>
                    <input class="boder" type="email" name="email" placeholder="Email" >
                </div>
                <div>
                     <p>Tên đăng nhập</p>
                    <input class="boder" type="text" name="user" placeholder="User Name" >
                </div>
                 <p>Mật khẩu</p>
                <div>
                    <input class="boder" type="password" name="pass" placeholder="PassWord">
                </div>
                <p> Ảnh Cá Nhân</p>
                <div>
                    <input class="boder" type="file" name="avatar" placeholder="Ảnh Cá Nhân">
                </div>
                 <p>Địa Chỉ</p>
                <div>
                    <input class="boder" type="text" name="address" placeholder="Địa Chỉ">
                </div>
                 <p>SĐT</p>
                <div>
                    <input class="boder" type="text" name="tel" placeholder="Số Điện Thoại">
                </div>
                <?php if( isset($thongbao)){ echo $thongbao,"<br>";}  ?>
                <button type="submit" value="Đăng ký" name="dangky">Đăng Ký</button>
                     Đã có tài khoản?<a href="index.php?act=dangnhap"> Đăng nhập ngay</a>
            </form>

        </div>

    </div>

    </section>
    <script>
        function validate() {
      
      if( document.myForm.email.value == "" ) {
         alert( "Vui lòng nhập Email" );
         document.myForm.email.focus() ;
         return false;
      }
      if( document.myForm.user.value == "" ) {
         alert( "Vui lòng nhập Username" );
         document.myForm.user.focus() ;
         return false;
      }
      
      if( document.myForm.pass.value == "" ) {
         alert( "Vui lòng nhập Password" );
         document.myForm.pass.focus() ;

         return false;
         
      }
      
      
   }
        
    </script>

