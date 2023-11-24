<?php require_once "./controllers/selectUser.php";  ?>
<?php require_once "./includes/header.php"; ?>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">SDT</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">ADDRES</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">GMAIL</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">ROLE</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($result as $key => $value) : ?>

                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-8 font-normal text-gray-900">
                        <?= ++$key; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $value['ten_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['sdt_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['diachi_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['gmail_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['tentaikhoan_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['role'] ?? '0' ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="updateUser.php?id=<?= $value['id_user'] ?>" class="btn btn-success">Edit</a>
                            <a href="./controllers/deleteUser.php?id=<?= $value['id_user'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="createUser.php" class="btn btn-success">Create User</a>
<a href="createProduct.php" class="btn btn-error">Create Products</a>
<a href="products.php" class="btn btn-success">Products</a>
<?php require_once "./includes/footer.php"; ?>