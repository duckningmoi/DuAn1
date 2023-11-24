<?php
if(isset($_SESSION['user'])){
    header("location: index.php?act=tttk");
}
?>
<hr><br><br>
<section class="dangky">
    <div class="box_title" style="font-size: 25px;"></div>
    <div class="box_content form_account">

        <form action="index.php?act=dangnhap" name="myForm" onsubmit = "return(validate());" method="post">
            <?php
            if (isset($thongbao)) {
                echo $thongbao;
            }
            ?>
            <br> <br>
            <div>
                <i class="far fa-user"></i>
                <input class="boder" type="text" name="user" placeholder="Tên Đăng Nhập" require>
            </div>
            <div> <br><br> <br>
                <i class="fas fa-key"></i>
                <input class="boder" type="password" name="pass" placeholder="Mật Khẩu" require>
            <div>
                <br> <br>
                <button type="submit" value="Đăng Nhập" name="dangnhap">Đăng Nhập</button> <br>
                Chưa có tài khoản?<a href="index.php?act=dangky"> Đăng ký ngay</a>
        </form>
    </div>
    </div>
</section>
<br> <br> <br>
<script>
    function validate() {
      
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
