<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<form class="flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" name="myForm" onsubmit = "return(validate());" action="" method="post" enctype="multipart/form-data">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">CREATE PRODUCT</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold"> Title </label>
                <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="title">
                <label class="block mt-3 font-semibold"> Desc </label>
                <input type="text" placeholder="Desc" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="desc">
                <br> <br>
                Hình Ảnh:
                <input type="file" name="img_sanpham" id="" placeholder="hình ảnh sản phẩm">
        
                <select class="select select-bordered w-full max-w-xs mt-2" name="id_danhmuc">
                    <option value="">Danh Mục</option>
                    <?php foreach($all_danhmuc as $alldm) :  ?>
                        <option value="<?= $alldm['id_danhmuc'] ?>"><?= $alldm['ten_danhmuc'] ?></option>
                    <?php endforeach;  ?>
                </select>

<br> <br>                <div class="flex justify-between items-baseline">
                        <input type="submit" value="Create" name="addsp" class="-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">
            </div>
            </div>
        </div>
    </div>
</form>
<a href="index.php?act=listsp">List Products</a>
<script>
        function validate() {
      
      if( document.myForm.title.value == "" ) {
         alert( "Vui lòng nhập Tên SP" );
         document.myForm.title.focus() ;
         return false;
      }
      if( document.myForm.desc.value == "" ) {
         alert( "Vui lòng nhập Description" );
         document.myForm.desc.focus() ;
         return false;
      }
      
      if( document.myForm.img_sanpham.value == "" ) {
         alert( "Vui lòng chọn Hình ảnh" );
         document.myForm.img_sanpham.focus() ;

         return false;
         
      }
      if( document.myForm.id_danhmuc.value == "" ) {
         alert( "Vui lòng chọn Loại danh mục" );
         document.myForm.id_danhmuc.focus() ;

         return false;
         
      }
      
      
   }
        
    </script>
