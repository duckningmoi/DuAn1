<?php require_once "./controllers/selectProduct.php";  ?>
<?php require_once "./includes/header.php"; ?>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Img</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Title</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Subtitle</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Desc</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($result as $key => $value) : ?>

                <?php


                echo "<pre>";
                print_r($value);
                echo "</pre>";

                ?>

                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-8 font-normal text-gray-900">
                        <?= ++$key; ?>
                    </th>
                    <td class="px-6 py-4">
                        <div class="w-12 rounded">
                            <img src="./../../Images/sp/<?= $value['img_sanpham'] ?>">
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['title_sanpham'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['subtitle_sanpham'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['description_sanpham'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['price'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="updateProduct.php?id=<?= $value['id_sanpham'] ?>" class="btn btn-success">Edit</a>
                            <a href="./controllers/deleteProduct.php?id=<?= $value['id_sanpham'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="users.php" class="btn btn-error">Users</a>
<a href="createUser.php" class="btn btn-success">Create User</a>
<a href="createProduct.php" class="btn btn-success">Create Products</a>
<?php require_once "./includes/footer.php"; ?>