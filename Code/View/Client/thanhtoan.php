<br> <br> <br>
<br>
<section class="all_bill">
    <div class="thongtinbill">
        <p class="name_bill">Thông tin giao hàng</p>
        <br>
        <form action="" method="post">
            <input type="text" class="name" name="name" value="<?= $tkez['ten_user'] ?>"> <br> <br> <br>
            <div class="email_sdt">
                <input class="bill_email" type="email" value="<?= $tkez['gmail_user'] ?>"> <br> <br>
                <input type="text" class="bill_sdt" value="<?= $tkez['sdt_user'] ?>"> <br> <br> <br>
            </div>
            <input class="bill_diachi" type="text" value="<?= $tkez['diachi_user'] ?>"> <br> <br> <br>
            <p class="name_bill">Phương thức vận chuyển</p>
            <div class="tt_vanchuyen">
                <i class="fa-solid fa-check"></i>
                <p>Giao hàng tận nơi (thời gian giao hàng dự kiến từ 3 ~ 4 ngày, có thể lâu hơn <br> vì các vấn đề bất khả kháng,
                    mong Quý KH đợi đơn hàng giúp shop. <br> Chân thành cảm ơn)</p>
                <div class="bill_phivanchuyen"> đ35.000</div>

            </div> <br>

            <p class="name_bill">Phương thức Thanh toán</p>
            <div class="phuongthucthanhtoan">
            <div class="tt_thanhtoan">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <p>Thanh toán khi nhận hàng(COD)</p>
            </div>
            <p class="text_thanhtoan">Khi click vào nút hoàn tất đơn hàng thì đơn hàng sẽ được hệ thống tự động xác nhận <br> mà không cần phải gọi qua điện thoại, nếu điền thông tin địa chỉ và số điện thoại chính xác thì đơn <br>hàng sẽ được vận chuyển từ 3-4-5 ngày tùy vùng miền.
Trường hợp đặt hàng xong nhưng muốn HỦY ĐƠN, <br>vui lòng soạn tin nhắn theo cú pháp: SĐT ĐÃ ĐẶT ĐƠN (hoặc MÃ ĐƠN hoặc GMAIL ĐƠN HÀNG) + TÊN NGƯỜI NHẬN <br> sau đó gửi qua các kênh online: Page Facebook, Intagram. Nhân viên check tin nhắn sẽ xử lý hủy giúp Quý KH.</p>
    </div>
    <input type="submit" class="hoantatdonhang" value="Hoàn Tất Đơn Hàng" >
    
        </form>
    </div>

    <div class="bill">
        <?php
        $sl = select_soluong($id_giohang['id_giohang']);
        foreach ($sl as $s) { ?>
            <div class="chitiet_all">
                <img src="Images/sp/<?= $s['img_sanpham'] ?>" alt="" width="70px">
                <div class="chitiet_2">
                    <div class="bill_tt_name"><?= $s['title_sanpham'] ?></div>
                    <div class="bill_tt_size"><?= $s['size_chitiet'] ?>
                        <div class="bill_tt_sl">
                            Số Lượng:
                            <?= $s['count'] ?>
                        </div>
                    </div>
                </div>
                <div class="bill_tt_gia"><?= $s['gia_chitiet'] ?>đ</div>
            </div>
        <?php }

        $sum = 0;
        foreach ($select_cart as $sl_cart) {
            $sum = $sum + $sl_cart['gia_chitiet'];
        }
        ?>
        <form class="form_giamgia" action="" method="post">
            <input type="text" class="magiamgia" name="ma_voucher" placeholder="Mã giảm giá">
            <input type="submit" name="sudungvoucher" value="Sử Dụng"></input> <br>
        </form>
        <div class="loaiphi">
            <p>Tạm tính: <i class="fa-thin fa-money-bill-wave"></i> <?= $sum ?></p><br>
        </div>
        <div class="loaiphi">
            <p>Phí vận chuyển: <i class="fa-thin fa-money-bill-wave"></i> 35.000 </p>
        </div>
        <hr>
        <div class="tongphi">
            <p>Tổng Cộng:</p>
            <span class="payment-due-currency">VND</span>
            <div class="giacuoicung"><?= $sum + 35000 ?>đ</div>
        </div>
    </div>
</section>
<br> <br> <br>
<style>
    .hoantatdonhang{
    margin-left: 680px;
    margin-top: 20px;
    border-radius: 4px;
    border: none;
    font-weight: 500;
    padding: 1.4em 1.7em;
    text-align: center;
    background: rgb(0 178 238);
    color: white;
    }
    .hoantatdonhang:hover{
        background-color: rgb(0 191 255);
    }
    .fa-circle-check{
        color: #6699FF;
        margin-top: 16px;
    }
    .fa-hand-holding-dollar{
        margin-top: 10px;
        margin-right: 5px;
        margin-left: 20px;
        height: 22px;
        color:#66CC99;
        font-size: 30px;
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        
    }
.phuongthucthanhtoan{
    padding: 15px;
    box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
}
    .tt_thanhtoan{
        border-bottom: 1px solid #d9d9d9;
        display: flex;
    }
    .giacuoicung {
        font-size: 30px;
        margin-top: 13px;
    }

    .tongphi {
        display: flex;
    }

    .payment-due-currency {
        margin-top: 20px;
        margin-left: 120px;
        font-size: 0.65714em;
        vertical-align: 0.2em;
        margin-right: 0.5em;
        color: #717171;
    }

    .loaiphi {
        color: #717171;
        display: flex;
        margin-left: 350px;
    }

    .form_giamgia input {
        width: 390px;
        height: 35px;
        box-shadow: 0 0 0 1px #d9d9d9;
        border: none;
        border-radius: 4px;
    }

    .form_giamgia button {
        padding-top: 10px;
        height: 35px;
        display: flex;
    }

    .chitiet_all img {
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
    }

    .chitiet_all {
        padding-left: 10px;
        padding-bottom: 10px;
        border-bottom: 3px solid;
        border-image-source: linear-gradient(to right, #FFFF33, #c471ed, #12c2e9);
        border-image-slice: 1;
    }

    .name_bill {
        width: 120px;
        position: relative;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #000;
    }

    .name_bill:before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: #fff;
        z-index: -1;
        transform: skew(2deg, 2deg);
    }

    .name_bill:before {
        background: linear-gradient(315deg, #89ff00, #00bcd4);
    }

    .name_bill:before {
        background: linear-gradient(315deg, #ff0000, #ffc107);
    }




    .bill_tt_gia {
        margin-top: 40px;
    }

    .chitiet_all {
        width: 500px;
        border-radius: 4px;
        display: flex;
        margin-bottom: 30px;
    }

    .bill {
        color: #717171;
        width: 40%;
        background: #fafafa;
    }

    .bill_phivanchuyen {
        margin-top: 30px;
        margin-left: 10px;
    }

    .fa-check {
        margin-top: 38px;
        margin-right: 10px;
    }

    .tt_vanchuyen {
        padding: 13px;
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        display: flex;
    }

    .bill_diachi {
        width: 430px;
    }

    .bill_email {
        width: 250px;
    }

    .bill_sdt {
        margin-left: 12px;
    }

    .name {
        width: 430px;
    }

    .email_sdt {
        display: flex;
    }

    .all_bill {
        color: #717171;
        display: flex;
        justify-content: space-evenly;
    }

    .thongtinbill form input {
        box-shadow: 0 0 0 1px #d9d9d9;
        border-radius: 4px;
        height: 50px;
    }
</style>