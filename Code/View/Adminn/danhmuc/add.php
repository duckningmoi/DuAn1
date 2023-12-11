<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<form class=" flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12"  name="myForm" onsubmit = "return(validate());" action="" enctype="multipart/form-data" method="post">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Thêm Mới Loại Hàng Hóa </span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold"> Tên Loại Mới </label>
                <input type="text" placeholder="Tên Loại" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="ten_danhmuc">
                <label class="block font-semibold"> Hình Ảnh </label>
                <input type="file" name="img_danhmuc" id="">
                <br> <br>
                <div class="flex justify-between items-baseline">
                <input type="submit" value="Create Cate" name="adddm" class="-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">
                </div>
            </div>
        </div>
    </div>
</form>
<a href="index.php?act=listdm" class="btn btn-success">List Category</a>
<script>
        function validate() {
      
      if( document.myForm.ten_danhmuc.value == "" ) {
         alert( "Vui lòng nhập Tên Danh Mục mới" );
         document.myForm.ten_danhmuc.focus() ;
         return false;
      }
      
      if( document.myForm.img_danhmuc.value == "" ) {
         alert( "Vui lòng chọn Hình ảnh" );
         document.myForm.img_danhmuc.focus() ;

         return false;
         
      }
      
      
   }
        
    </script>