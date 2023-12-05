<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Img</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Title</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Size</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Số Lượng Đã Bán</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Số Lượng Tồn Kho</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($all_ctsp as $allsp) : ?>

                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-8 font-normal text-gray-900">
                        <?= $allsp['id_sanpham']; ?>
                    </th>
                    <td class="px-6 py-4">
                        <div class="w-12 rounded">
                            <img src="./../../Images/sp/<?= $allsp['img_sanpham'] ?>">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <?= $allsp['title_sanpham'] ?>
                    </td>
                    
                    <td class="px-6 py-4">
                        <?= $allsp['size_chitiet'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $allsp['gia_chitiet'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $allsp['soluongdaban'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $allsp['soluongtonkho'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="index.php?act=editctsp&id=<?= $allsp['id_chitietsanpham'] ?>" class="btn btn-success">Edit Product Detail</a>
                            <a onclick="return confirm('Bạn có chắc xóa?')" href="index.php?act=delctsp&id=<?= $allsp['id_chitietsanpham'] ?>" class="btn btn-error">Delete Product Detail</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="index.php?act=addctsp" class="btn btn-success">Create Products Details</a> 
