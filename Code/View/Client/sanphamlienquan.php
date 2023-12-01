<div class="sanphamlienquan">
<p class="sanphamlienquan_name"> SẢN PHẨM LIÊN QUAN</p>
<div id="app" class="all">
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
                        </div>
                    </a>
                
            <?php } ?>
            <?php endforeach ?>


        </div>
        </div>
<style>
    .sanphamlienquan_name{
        font-size: 25px;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
    }
    .sp img{
        width: 190px;
    }
    .sp{
        font-size: 15px;
        height: 320px;
        width: 200px;

    }
    .all{
        display: flex;
        overflow-x: auto;
        
    }
    .all::-webkit-scrollbar {
    background-color: white;
    
    }

</style>
            


            