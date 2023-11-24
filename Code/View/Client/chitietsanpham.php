<?php if(isset($_POST['addcart']) && $_POST['addcart'] ) : ?>
    <?php if(isset($thongbao)) : ?>
    <script>alert('<?= $thongbao ?>')</script>
    <?php endif ?>
<?php if(!isset($chitiet_sanpham)) : ?>
    <script>alert('<?= $alert ?>')</script>
<?php endif ?>
<?php endif ?>
<hr> <br> <br> <br>
<section class="ctsp">
    <div><img  class="image" src="Images/sp/<?= $one_sanpham['img_sanpham'] ?>" alt="" width="400px"></div>
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
                <div class="sl">Size: <?= $size ?></div>
            <div class="sl">SL trong kho: <?= $chitiet_sanpham['soluongtonkho'] ?> </div>
            <div class="sl">SL đã bán: <?= $chitiet_sanpham['soluongdaban'] ?> </div>
                <?php } ?>
        <?php } ?>
        <div class="size">
            <form action="" method="post">
                <button name="M" value="M">M</button>
                <button name="L" value="L">L</button>
                <button name="XL" value="XL">XL</button> <br> <br>
<button class="addtocart" type="submit"><a href="index.php?act=addcart&id_sanpham=<?= $chitiet_sanpham['id_chitietsanpham'] ?>"><i class="fa-thin fa-cart-shopping"></i>Add To Cart</a></button>
            </form>
        </div>
        <div class="description">
        <p class="mota">Mô tả sản phẩm</p>
        Mã sản phẩm: <?= $one_sanpham['id_sanpham'] ?> <br>
        Tên sản phẩm:  <?= $one_sanpham['title_sanpham'] ?> <br>
        Size: M/L/XL <br>
        Thông số sản phẩm: <br>
               <div class="des" ><?= $one_sanpham['description_sanpham'] ?> <br></div> <br>

<p class="tip">*Xin lưu ý rằng bảng size này nhằm mục đích hướng dẫn và kích thước có thể thay đổi một chút. <br>Nếu bạn không chắc chắn về số đo của mình, hãy liên hệ với chúng mình để được tư vấn nhé.
</p>
    </div>
    </div>
</section>

<div class="all_binhluan">
                <table>
                    <tr> <p class="namebluan">Bình Luận:</p></tr>
                    <tr>
                        <td>Nội Dung</td>
                        <td>Người Bình Luận</td>
                        <td>Ngày Bình Luận</td>
                    </tr>
                    <?php foreach($binhluan_one_sp as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung_binhluan']?></td>
                        <td><?php echo $value['ten_user']?></td>
                        <td><?php echo $value['ngay_binhluan']?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            
</div>

<div class="box_binhluan">
<?php if(isset($id_user)) {?>
            <?php $id_user = select_tk_ez($_SESSION['user']); ?>
                <form action="index.php?act=addbl&id_sanpham=<?=$one_sanpham['id_sanpham']?>" method="POST">
                    <input style="width: 300px;" class="noidung_binhluan" type="text" name="noidung_binhluan" placeholder="bình luận dưới tên <?= $id_user['ten_user'] ?>">
                    <a href="index.php?act=addbl&id_sanpham=<?=$one_sanpham['id_sanpham']?>"><button type="submit" name="guibinhluan" required>Gửi Bình Luận</button></a>
                </form>
<?php } else{ ?>
    
<?php } ?>
            </div>
<br> <br> <br> <br>

<br>
<br>
<?php include "View/Client/footerup.php" ?>
<br> <br> <br> <br>

