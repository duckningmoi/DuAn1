<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Mã Đơn</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tên người nhận</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Địa Chỉ Giao</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Trạng Thái Đơn</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tổng Tiền</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Action</th>
            </tr>
        </thead>
        <h1>Table Order</h1>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php foreach ($bill_admin as $bill) : ?>

                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-4">
                        <?= $bill['id_bill'] ?>

                    </td>
                    <td class="px-6 py-4">
                        <?= $bill['ten_nguoinhan'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $bill['diachi_giaohang'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $bill['trangthai_bill'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $bill['tongtien'] ?>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex gap-4">
                            <a href="index.php?act=editbill&&id=<?=  $bill['id_bill'] ?>" class="btn btn-success ">Update</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<a href="index.php?act=addbill" class="btn btn-success">Create Order</a>
