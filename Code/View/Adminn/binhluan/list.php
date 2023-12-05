<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nội Dung</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tên Sản Phẩm</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ảnh Sản Phẩm</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Người Bình Luận</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ngày Bình Luận</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <h1>Table comment</h1>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($all_binhluan as $bl) : ?>

                <tr class="hover:bg-gray-50">
                    
                    <td class="px-6 py-4">
                        <?= $bl['noidung_binhluan'] ?>

                    </td>
                    <td class="px-6 py-4">
                        <?= $bl['title_sanpham'] ?>
                    </td>
                    <td class="px-6 py-4">
                       <img src="../../Images/sp/<?= $bl['img_sanpham'] ?>" alt="" width="60px"> 
                    </td>
                    <td class="px-6 py-4">
                        <?= $bl['ten_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        
                        <?= date($bl['ngay_binhluan'] ) ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a onclick="return  confirm('Bạn Muốn Xóa Bình Luận Này?')" href="index.php?act=delcm&&id=<?=  $bl['id_binhluan'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
