<?php require_once "./includes/header.php"; ?>
<?php require_once "./controllers/selectComment.php"; ?>
<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">noi dung</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">id san pham</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">id user</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <h1>Table comment</h1>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($result as $key => $value) : ?>

                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-8 font-normal text-gray-900">
                        <?= ++$key; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $value['noidung_binhluan'] ?>

                    </td>
                    <td class="px-6 py-4">
                        <?= $value['id_sanpham'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $value['id_user'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="./controllers/deleteComment.php?id=<?=  $value['id_binhluan'] ?>" class="btn btn-error">Delete</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="./createComment.php" class="btn btn-success">Create</a>
<?php require_once "./includes/footer.php"; ?>