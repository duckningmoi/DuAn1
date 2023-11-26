<hr> <br>
<section class="all_sp">
    <div class="left">
        <br>
        Danh Mục Nhóm
        <hr>
        <ul>
            <li><a href="index.php?act=sanpham&iddm= ">Tất Cả</a></li>
            <?php foreach ($all_danhmuc as $danhmuc) : ?>
                <li> <a href="index.php?act=sanpham&iddm=<?= $danhmuc['id_danhmuc'] ?>"><?= $danhmuc['ten_danhmuc'] ?></a> </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="div"></div>
    <div class="right">
        <div class="loc">
            <form action="loc" method="post">
                <br>
                <label for="">Sắp Xếp Theo: </label>
                <select name="" id="">
                    <option value="">Tất Cả</option>
                    <option value="">Bán Chạy Nhất</option>
                    <option value="">Size -></option>
                </select>
            </form>
            <hr>
        </div>
        <div class="all">
        <?php foreach ($all_sanpham as $allsp) : ?>
        <?php if ($allsp['id_danhmuc'] == $iddm) { ?>
            
                
                    <a href="index.php?act=chitietsanpham&id_sanpham=<?= $allsp['id_sanpham'] ?>">

                        <div style="transform:none" class="sp">
                            <!-- <img  src="Images/sp/<?= $allsp['img_sanpham'] ?>"  onmouseover="this.src='Images/sp/<?= $allsp['img_sanpham'] ?>'"  onmouseout="this.src='Images/sp/<?= $allsp['img_sanpham'] ?>'" class="imgsp1"  alt="Hết Ảnh" width="215px" height="230px"> -->
                            <img src="Images/sp/<?= $allsp['img_sanpham'] ?>" class="imgsp1" alt="Hết Ảnh" width="215px" height="230px">

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
                

            <?php } elseif($iddm == ''){ ?>
               
                    <a href="index.php?act=chitietsanpham&id_sanpham=<?= $allsp['id_sanpham'] ?>">

                        <div style="transform:none" class="sp">
                            <!-- <img  src="Images/sp/<?= $allsp['img_sanpham'] ?>"  onmouseover="this.src='Images/sp/<?= $allsp['img_sanpham'] ?>'"  onmouseout="this.src='Images/sp/<?= $allsp['img_sanpham'] ?>'" class="imgsp1"  alt="Hết Ảnh" width="215px" height="230px"> -->
                            <img src="Images/sp/<?= $allsp['img_sanpham'] ?>" class="imgsp1" alt="Hết Ảnh" width="215px" height="230px">

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
                
            <?php } ?>
            <?php endforeach ?>


        </div>


    </div>


    </div>