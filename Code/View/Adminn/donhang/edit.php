<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Order</title>
</head>

<body>
    <form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" enctype="multipart/form-data" action="" method="post">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">UPDATE</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                <div class="h-2 bg-purple-400 rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <input type="hiden" placeholder="Id" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="id_bill" value="<?= $edit_bill['id_bill']  ?>">

                    <label class="block font-semibold"> Số Lượng </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="ten_nguoinhan" value="<?= $edit_bill['ten_nguoinhan']  ?>">
                    <label class="block font-semibold"> Địa Chỉ Giao Hàng </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="diachi_giaohang" value="<?= $edit_bill['diachi_giaohang']  ?>">
                    <label class="block font-semibold"> Số Điện Thại </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="sdt_nguoinhan" value="<?= $edit_bill['sdt_nguoinhan']  ?>">
                    <label class="block font-semibold"> Phương Thức TT </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="phuongthuc_thanhtoan" value="<?= $edit_bill['phuongthuc_thanhtoan']  ?>">
                    <label class="block font-semibold"> Tổng Tiền </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="tongtien" value="<?= $edit_bill['tongtien']  ?>vnd">
<br> <br>
                    <select name="trangthai_bill" id="" class="the-select font-semibold">
                        <option value="<?= null ?>">Trạng thái đơn</option>
                        <option value="<?= 'Đã xác nhận' ?>">Đã xác nhận</option>
                        <option value="<?= 'Đã giao cho đơn vị vận chuyển' ?>">Đã giao cho đơn vị vận chuyển</option>
                        <option value="<?= 'Đang giao hàng' ?>">Đang giao hàng</option>
                        <option value="<?= 'Giao thành công' ?>">Giao thành công</option>
                        <option value="<?= 'Giao thất bại' ?>">Giao thất bại</option>
                    </select>
<br>

                    <br> <br>
                    <div class="flex justify-between items-baseline">
                        <input name="editbill" type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600" value="Update Order"></input>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <a href="index.php?act=listbill" class="btn btn-success">List Order</a>
</body>
<style>
 select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
   }
select {
   width: 240px;
   height: 34px;
   overflow: hidden;
   background: url(../../Images/select.png) no-repeat right #ddd;
   border: 1px solid #ccc;
   }


</style>
</html>