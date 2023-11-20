<?php if (isset($thongbao)) { ?>
            <script>
            alert("<?= $thongbao ?>")
        </script>   
             <?php } ?>
<br> <br>
<section class="cart">
<div class="giohang">
    <p>Giỏ Hàng</p>
    <form action="" method="post">
    <div class="hinhanh"><?= $select_cart['mausang'] ?></div>
    <div class="thongtin"></div>
    <div class="giacuoi"></div>





    </form>
<hr>
</div>






<div class="donhang">
    Tổng Tiền:  <br>

    <button>Thanh Toán</button>
</div>





</section>