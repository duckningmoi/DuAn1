<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tên Danh Mụcc</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Img</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($all_danhmuc as $allsp) : ?>

                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-8 font-normal text-gray-900">
                        <?= $allsp['id_danhmuc']; ?>
                    </th>
                    <td class="px-6 py-4">
                        <div class="w-12 rounded">
                            <?= $allsp['ten_danhmuc'] ?>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="w-12 rounded">
                            <img src="./../../Images/<?= $allsp['img_danhmuc'] ?>" width="200px">
                        </div>
                    </td>
                    
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="index.php?act=editdm&id=<?= $allsp['id_danhmuc'] ?>" class="btn btn-success">Edit</a>
                            <a onclick="return confirm('Bạn có chắc xóa?')" href="index.php?act=deldm&id=<?= $allsp['id_danhmuc'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="index.php?act=adddm" class="btn btn-success">Create Categoty</a>

