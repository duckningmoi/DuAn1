<section class="banner">
    <img id="banner" src="Images/banner.webp" alt="" width="1500px"> 
</section>

<section class="footer-up">
<div class="nd"><img src="Images/ship.png" alt="">
    <h4>GIAO HÀNG TOÀN QUỐC</h4>
    <p>Thời gian giao hàng linh động từ 3 - 4 - 5 ngày tùy khu vực,
         đôi khi sẽ nhanh hơn hoặc chậm hơn. Mong Quý Khách hàng thông 
         cảm và cố gắng đợi hàng giúp shop.</p>
</div>
<div class="nd"><img src="Images/doitra.png" alt="">
    <h4>CHÍNH SÁCH ĐỔI TRẢ HÀNG</h4>
    <p>Sản phẩm được phép đổi hàng trong vòng 36h nếu phát sinh
         lỗi từ nhà sản xuất (Yêu cầu: hình ảnh phần bị lỗi rõ nét,
          chi tiết và đầy đủ).</p>
</div>
<div class="nd"><img src="Images/cod.png" alt="">
    <h4>GIAO HÀNG NHẬN TIỀN VÀ KIỂM KÊ ĐƠN HÀNG</h4>
    <p>Được phép kiểm hàng trước khi thanh toán. Lưu ý: Trường hợp Quý Khách 
        hàng đã nhận hàng về nhà, vui lòng quay video unbox đơn hàng trong tình trạng nguyên vẹn để có căn cứ xác 
        thực đơn hàng gặp phải vấn đề, trường hợp không có video shop không thể hỗ trợ.</p>
</div>
<div class="nd"><img src="Images/call.png" alt="">
    <h4>ĐẶT HÀNG ONLINE VÀ KIỂM TRA ĐƠN HÀNG VUI LÒNG LIÊN HỆ</h4>
    <p>Hotline: 035 319 5203</p>
</div>
</section>

<section class="logo-main">
    <hr>
<h1>VERGENCY</h1>
<p>Satisfy You - Happy Us.</p>
<hr>
<div class="time">
<div class="divtime">
    <div class="so">23</div>
    <p>Ngày</p>
</div>
<div class="divtime">
    <div class="so">23</div>
    <p>Giờ</p>
</div>
<div class="divtime">
    <div class="so">23</div>
    <p>Phút</p>
</div>
<div class="divtime">
    <div class="so">23</div>
    <p>Giây</p>
</div>
</div>
</section>

<main style="background-image: url(Images/banner2.webp);">
<?php foreach($all_sanpham as $allsp) : ?>
    <a href="index.php?act=chitietsanpham&id_sanpham=<?= $allsp['id_sanpham'] ?>">

<div  class="sp">
    <!-- <img  src="Images/sp/<?= $allsp['img_sanpham'] ?>"  onmouseover="this.src='Images/sp/<?= $allsp['img_sanpham'] ?>'"  onmouseout="this.src='Images/sp/<?= $allsp['img_sanpham'] ?>'" class="imgsp1"  alt="Hết Ảnh" width="215px" height="230px"> -->
    <img  src="Images/sp/<?= $allsp['img_sanpham'] ?>"   class="imgsp1"  alt="Hết Ảnh" width="215px" height="230px">
    
    <div class="name-sp">
    <?= $allsp['title_sanpham'] ?>
</div>
<div class="name-brand">VERGENCY</div>
<hr>
<div class="giatien">
<div class="money-del">420.000đ</div>
</div>

<button>Xem chi tiết</button>
</div>
</a>
<?php endforeach ?>


<!-- <div class="sp">
    <img onmouseover="this.src='Images/sp/sp1/2.png'" onmouseout="this.src='Images/sp/sp1/1.png'" class="imgsp1" src="Images/sp/sp1/1.png" alt="" width="219px" height="230px">
<div class="name-sp">
    011 BlokeCore T-Shirt/White-Black
</div>
<div class="name-brand">VERGENCY</div>
<hr>
<div class="giatien">
<div class="money">59.000đ</div>
<div class="money-del">420.000đ</div>
</div>
<button>Xem chi tiết</button>
</div> -->
</main>