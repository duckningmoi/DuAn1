<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<form class="flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12"  name="myForm" onsubmit = "return(validate());" action="" method="post" enctype="multipart/form-data">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">CREATE PRODUCT DELTAL</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold" for="">Loại Sản Phẩm</label>
                <select class="select select-bordered w-full max-w-xs mt-2" name="id_sanpham">
                    <option value="">Sản Phẩm</option>
                    <?php foreach($all_sanphamadmin as $alldm) :  ?>
                        <option value="<?= $alldm['id_sanpham'] ?>"><img src="../../Images/sp/<?= $alldm['img_sanpham']?> " alt=""> <?= $alldm['title_sanpham'] ?></option>
                    <?php endforeach;  ?>
                </select> <br>

                <label class="block font-semibold"> Số Lượng Tồn Kho </label>
                <input type="text" placeholder="Số lượng tồn kho" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="soluongtonkho">
                <label class="block font-semibold"> Số Lượng Đã Bán </label>
                <input type="text" placeholder="Số lượng đã bán" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="soluongdaban">
                <label class="block font-semibold"> Size </label>
                <select name="size_chitiet" id="" class="select select-bordered w-full max-w-xs mt-2">
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                </select>
         <br> 
            <label class="block font-semibold"> Giá </label>
                <input type="text" placeholder="Giá" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="gia_chitiet">

         <br> 
                <br><br>

                <div class="flex justify-between items-baseline">
                        <input type="submit" value="Create Product Deltal" name="addctsp" class="-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">
            </div>
            </div>
        </div>
    </div>
</form>
<a href="index.php?act=listctsp">List Products Deltals</a>
<script>
        function validate() {
      
      if( document.myForm.id_sanpham.value == "" ) {
         alert( "Vui lòng chọn Sản Phẩm " );
         document.myForm.id_sanpham.focus() ;
         return false;
      }
      if( document.myForm.soluongtonkho.value == "" ) {
         alert( "Vui lòng nhập Số lượng tồn kho" );
         document.myForm.soluongtonkho.focus() ;
         return false;
      }
      
      if( document.myForm.soluongdaban.value == "" ) {
         alert( "Vui lòng nhập Số lượng đã bán" );
         document.myForm.soluongdaban.focus() ;

         return false;
         
      }
      if( document.myForm.size_chitiet.value == "" ) {
         alert( "Vui lòng chọn Size sản phẩm" );
         document.myForm.size_chitiet.focus() ;

         return false;
         
      }
      if( document.myForm.gia_chitiet.value == "" ) {
         alert( "Vui lòng chọn Giá sản phẩm" );
         document.myForm.gia_chitiet.focus() ;

         return false;
         
      }
      
      
   }
        
    </script>