<br> <br> <br> <br> <br> <br>
<?php if (isset($thongbao)) : ?>
    <script>
        alert("<?= $thongbao ?>")
    </script>
<?php endif ?> <br>
<p id="efdg">ĐƠN HÀNG HIỆN CÓ: </p> <br>
<section class="theodoidonhang">
    <form class="timkiemmadon" action="" method="POST">

        <input type="text" id="" placeholder="Tìm kiếm theo mã đơn" name="keyword">
        <button class="" type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <?php foreach ($distinct_bill as $distinct) { ?>
        <div class="theodoidonhang1">
            <div class="id_bill">Mã Đơn Vận: <?= $distinct['id_bill'] ?> <br> <br> <br>
                <?php foreach ($select_bill_all as $bill_all) {
                    if ($bill_all['id_bill'] == $distinct['id_bill']) {
                        echo "<img src='Images/sp/" . $bill_all['img_sanpham'] . "' width='80px'> <br> ";
                        echo $bill_all['title_sanpham'], "<br>";
                        echo "Sl: " . $bill_all['soluong_chitiet'], "<br>";
                        echo "Size: " . $bill_all['size_chitiet'];
                        echo '<div class="vachkemau"></div>';
                    }
                } ?>

            </div>
            <div class="trangthai_bil"><?php if ($distinct['trangthai_bill'] == null) {
                                            echo "Đang chờ xác nhận";
                                        } else {
                                            echo $distinct['trangthai_bill'];
                                        } ?>
                <br>
                <p class="thanhtoanmaudo"> Thanh toán <?= $distinct['phuongthuc_thanhtoan'] ?>: <?= $distinct['tongtien'] ?>vnđ </p> <br>
                <?php if ($distinct['trangthai_bill'] == "Giao thành công") { ?>

                <?php } else {
                ?>

                    <a class="huydonhang" onclick="return confirm('Bạn có chắc muốn hủy đơn hàng: <?= $distinct['id_bill'] ?>')" href="index.php?act=huydonhang&id_bill=<?= $distinct['id_bill'] ?>"><button>Hủy Đơn Hàng</button></a>
                <?php } ?>
            </div>
            <!-- menucon -->



        </div>
    <?php } ?>

    <style>
        .timkiemmadon {
            margin-left: 70%;
            margin-top: -50px;
        }
    </style>








</section>
<br> <br> <br> <br> <br> <br>