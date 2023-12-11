<!-- component -->
<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<form class="flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" name="myForm" onsubmit = "return(validate());" action="" method="post" enctype="multipart/form-data">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">CREATE USER</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold"> Họ Và Tên </label>
                <input type="text" placeholder="Họ Và Tên" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="ten_user">
                <label class="block mt-3 font-semibold"> Số Điện Thoại </label>
                <input type="number" placeholder="Số điện thoại" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="sdt_user">
                <label class="block mt-3 font-semibold"> Địa Chỉ </label>
                <input type="text" placeholder="địa chỉ" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="diachi_user">

                <label class="block mt-3 font-semibold"> Gmail </label>
                <input type="text" placeholder="gmail user" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="gmail_user">
                <label class="block mt-3 font-semibold"> Tên Tài Khoản </label>
                <input type="text" placeholder="tài khoản" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="tentaikhoan_user">
                <label class="block mt-3 font-semibold"> Pass </label>
                <input type="password" placeholder="password user" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="password_user">
                <label class="block mt-3 font-semibold"> Avatar </label>
                <input type="file" name="avatar" id="">
                <div class="flex justify-between items-baseline">
                    <input value="Create" type="submit" name="adduser" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">
                </div>
            </div>
        </div>
    </div>
</form>
<script>
        function validate() {
      
      if( document.myForm.ten_user.value == "" ) {
         alert( "Vui lòng nhập Tên Người Dùng" );
         document.myForm.ten_user.focus() ;
         return false;
      }
      if( document.myForm.sdt_user.value == "" ) {
         alert( "Vui lòng nhập SĐT" );
         document.myForm.sdt_user.focus() ;
         return false;
      }
      if( document.myForm.diachi_user.value == "" ) {
         alert( "Vui lòng nhập Địa Chỉ" );
         document.myForm.diachi_user.focus() ;
         return false;
      }
      if( document.myForm.avatar.value == "" ) {
         alert( "Vui lòng chọn Hình ảnh Đại Diện" );
         document.myForm.avatar.focus() ;

         return false;
         
      }
      if( document.myForm.gmail_user.value == "" ) {
         alert( "Vui lòng nhập Email" );
         document.myForm.gmail_user.focus() ;

         return false;
         
      }
      if( document.myForm.tentaikhoan_user.value == "" ) {
         alert( "Vui lòng nhập Username" );
         document.myForm.tentaikhoan_user.focus() ;

         return false;
         
      }
      if( document.myForm.password_user.value == "" ) {
         alert( "Vui lòng nhập Password" );
         document.myForm.password_user.focus() ;

         return false;
         
      }
      
      
   }
        
    </script>