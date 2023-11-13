<hr> <br>
<section class="ctsp">
    <div class="image"><img src="Images/sp/<?= $one_sanpham['img_sanpham'] ?>" alt="" width="400px"></div>
    <div class="thongtin">
        <div class="name_sp"> <?= $one_sanpham['title_sanpham'] ?> </div>
        <div class="id_sp"> Mã SP: <?= $one_sanpham['id_sanpham'] ?> </div>
        <div class="price">đ<?= $one_sanpham['gia_chitiet'] ?> vnđ</div>
        <?php if (!isset($chitiet_sanpham)) { ?>
            <div class="sl">SL trong kho: <?= $sl_1_loai['soluong'] ?> </div>

        <?php } else { ?>
            <?php if (isset($thongbao)) { ?>
                <div class="sl">SL trong kho: <?= $thongbao ?> </div>
            <?php } else { ?>
            <div class="sl">SL trong kho: <?= $chitiet_sanpham['soluongtonkho'] ?> </div>
            <div class="sl">SL đã bán: <?= $chitiet_sanpham['soluongdaban'] ?> </div>
                <?php } ?>
        <?php } ?>
        <div class="size">
            <form action="" method="post">
                <button name="M" value="M">M</button>
                <button name="L" value="L">L</button>
                <button name="XL" value="XL">XL</button>
            </form>
        </div>
        <div class="color"></div>
    </div>















</section>
<br>
<hr> <br>