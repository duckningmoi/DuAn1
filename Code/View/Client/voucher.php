<div class="voucher_view">
   <p class="name_voucher_view"> Voucher Hiện Có:</p>

    <?php foreach($all_voucher as $all_vc) : ?>
    <img src="Images/voucher.webp" alt="" width="50px">
    <?= $all_vc['ma_voucher'] ?> :  
    <?= $all_vc['description_voucher'] ?> <br>
    <?php endforeach ?>







</div>