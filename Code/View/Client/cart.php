<?php if (isset($thongbao)) { ?>
            <script>
            alert("<?= $thongbao ?>")
        </script>   
             <?php } 
             $sl = select_soluong();?>
<br> <br>
<section class="cart">
<div class="giohang">
    <p>Giỏ Hàng</p>
    
    

    <?php
    foreach($sl as $s) { ?>
    <form action="" method="post">
    <div class="hinhanh"><img src="Images/sp/<?= $s['img_sanpham'] ?>" alt="" width="120px"></div>
    <div class="thongtin">
        <div class="tt_name"><?= $s['title_sanpham'] ?></div>
        <div class="tt_size"><?= $s['size_chitiet'] ?></div>
        <div class="tt_sl">
        Số Lượng:
        <button type="submit" name="cong" >-</button>    
         <?= $s['count'] ?>
        <button type="submit" name="tru" >+</button>
        </div>
    </div>
    <div class="giacuoi">
        <a href="index.php?act=delcart&id_chitietsanpham=<?= $s['id_chitietsanpham'] ?>">Xóa Sản Phẩm</a><br> <br> <br> <br> <br>
    <div class="tt_gia"><?= $s['gia_chitiet']?>đ</div>
    </div>

    </form>
    <hr>
<?php } ?>

   

</div>

<div class="donhang">
<p>Thanh Toán</p>

<?php 
    $sum = 0;
    foreach($select_cart as $sl_cart){
        $sum = $sum + $sl_cart['gia_chitiet'];
    }
    ?>
    Tổng Tiền: <?= $sum ?>đ <br>
    
    <button class="tt">Thanh Toán</button>
</div>





</section>