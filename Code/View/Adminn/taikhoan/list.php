<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">SDT</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">AVATAR</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">ADDRES</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">GMAIL</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">ROLE</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($all_user as $user) : ?>

                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4">
                        <?= $user['ten_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['sdt_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <img src="../../Images/<?= $user['avatar'] ?>" alt="" width="100px"> 
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['diachi_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['gmail_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['tentaikhoan_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['role'] ?? '0' ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="index.php?act=edituser&&id=<?= $user['id_user'] ?>" class="btn btn-success">Edit</a>
                            <a onclick="return comfirm('Bạn Muốn Xóa?')" href="index.php?act=deluser&&id=<?= $user['id_user'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="index.php?act=adduser" class="btn btn-success">Create User</a>
<a href="createProduct.php" class="btn btn-error">Create Products</a>
<a href="products.php" class="btn btn-success">Products</a>
