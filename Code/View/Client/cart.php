<?php if (isset($thongbao)) { ?>
            <script>
            alert("<?= $thongbao ?>")
        </script>   
             <?php } 
             $sl = 0; ?>
<br> <br>
<section class="cart">
<div class="giohang">
    <p>Giỏ Hàng</p>
    <?php
    for($i = 0 ; $i < count($select_cart) ;$i++){ ?>
        <?php if($select_cart['id_chitietsanpham'] == $select_cart['id_chitietsanpham']){ ?>
            <?php $sl = $sl + 1?>
        <?php }?>
        <?php } ?>

        <?php foreach($select_cart as $sl_cart){ ?>
    <form action="" method="post">
    <div class="hinhanh"><img src="Images/sp/<?= $select_cart['mausang'] ?>" alt="" width="120px"></div>
    <div class="thongtin">
        <div class="tt_name"><?= $select_cart['title_sanpham'] ?></div>
        <div class="tt_size"><?= $select_cart['size_chitiet'] ?></div>
        <div class="tt_sl"><?= $sl ?></div>
    </div>
    <div class="giacuoi">
        <a href="">Xóa Sản Phẩm</a><br> <br> <br> <br> <br>
    <div class="tt_gia"><?= $select_cart['gia_chitiet']?>đ</div>
    </div>
    </form>
    <?php } ?>

   
<hr>
</div>


<div class="donhang">
<?php 
    $sum = 0;
    foreach($select_cart as $sl_cart){
        $sum = $sum + $select_cart['gia_chitiet'];
    }
    ?>
    Tổng Tiền: <?= $sum ?> <br>
    
    <button>Thanh Toán</button>
</div>





</section>