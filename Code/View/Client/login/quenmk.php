<?php
if (isset($sendMailMess) && $sendMailMess != '') { ?>
<script>alert("<?= $sendMailMess ?>")</script>
<?php
} 
?>
<hr><br><br>
<section class="dangky">
    <div class="box_title" style="font-size: 25px;"></div>
    <div class="box_content form_account">

        <form class="form-tt" action="index.php?act=quenmk" name="myForm"  method="post">

            <h2>Quên Mật Khẩu</h2>
            <br> <br>
            <div>
                <input class="boder" type="text" name="email" placeholder="Email đăng ký" require>
            </div>
            <div> <br><br> <br>
            <div>
                
                <button type="submit" value="Đăng Nhập" name="quenmk">Gửi</button> <br> <br>
                Quay lại đăng nhập?<a href="index.php?act=dangnhap"> Đăng Nhập</a> <br> <br> 
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
