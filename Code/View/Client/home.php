<section class="banner">
    <img id="banner" src="Images/banner.webp" alt="" width="1500px"> 
</section>
<br> <br> <br> <br>
<section class="footer-up">
<div class="nd"><img src="Images/ship.png" alt="" width="30px">
    <h4>GIAO HÀNG TOÀN QUỐC</h4>
    <p>Thời gian giao hàng linh động từ 3 - 4 - 5 ngày tùy khu vực,
         đôi khi sẽ nhanh hơn hoặc chậm hơn. Mong Quý Khách hàng thông 
         cảm và cố gắng đợi hàng giúp shop.</p>
</div>
<div class="nd"><img src="Images/doitra.png" alt="" width="30px">
    <h4>CHÍNH SÁCH ĐỔI TRẢ HÀNG</h4>
    <p>Sản phẩm được phép đổi hàng trong vòng 36h nếu phát sinh
         lỗi từ nhà sản xuất (Yêu cầu: hình ảnh phần bị lỗi rõ nét,
          chi tiết và đầy đủ).</p>
</div>
<div class="nd"><img src="Images/cod.png" alt="" width="30px">
    <h4>GIAO HÀNG NHẬN TIỀN VÀ KIỂM KÊ ĐƠN HÀNG</h4>
    <p>Được phép kiểm hàng trước khi thanh toán. Lưu ý: Trường hợp Quý Khách 
        hàng đã nhận hàng về nhà, vui lòng quay video unbox đơn hàng trong tình trạng nguyên vẹn để có căn cứ xác 
        thực đơn hàng gặp phải vấn đề, trường hợp không có video shop không thể hỗ trợ.</p>
</div>
<div class="nd"><img src="Images/call.png" alt="" width="30px">
    <h4>ĐẶT HÀNG ONLINE VÀ KIỂM TRA ĐƠN HÀNG VUI LÒNG LIÊN HỆ</h4>
    <p>Hotline: 035 319 5203</p>
</div>
</section>

<section class="logo-main">
    <div class="vach1">
        <div class="vach11"></div>
        <div class="vach11"></div>
    </div>
<h1>VERGENCY</h1>
<p>Satisfy You - Happy Us.</p>
<div class="vach2">
        <div class="vach"></div>
        <div class="vach"></div>
</div>
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

<!-- style="background-image: linear-gradient(1800deg , rgb(255, 255, 255), rgb(65, 134, 153) , rgb(255, 255, 255) ,  rgb(65, 134, 153) ,rgb(255, 255, 255));" -->

<main>
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

<button class="btn_sanpham" >Xem chi tiết</button>
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
<button id="myBtn" title="Lên đầu trang"><img src='Images/backtotop.png' title='lên đầu trang' width='14px'/></button>
<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
 
if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
document.getElementById("myBtn").style.display = "block";
} else {
document.getElementById("myBtn").style.display = "none";
}
}
 
document.getElementById('myBtn').addEventListener("click", function(){
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
});
</script>
</main>
<?php include "View/phantrang.php" ?>

<div class="vach1">
        <div class="vach11"></div>
        <div class="vach11"></div>
    </div>
<h1 class="h1">DANH MỤC YÊU THÍCH</h1>
<p class="h1">Danh mục được nhiều khách hàng yêu thích</p>


<div class="danhmucyeuthich">
    
<?php foreach($all_danhmuc as $dm) :  ?>
    <a href="index.php?act=sanpham&iddm=<?= $dm['id_danhmuc'] ?>">
    <img src="Images/<?= $dm['img_danhmuc'] ?>" alt="" width="400px">


    </a>
<?php endforeach ?>
</div> <br> <br>
<div class="vach1">
        <div class="vach11"></div>
        <div class="vach11"></div>
    </div>

<br> <br> <br> <br>



