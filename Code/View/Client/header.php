<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href="index.php">
                    <img src="Images/logo.webp" alt="" height="96px" width="390px">
                </a>
            </div>
            <div class="sdt-header">
                <a class="call-lienhe" href="tel:0353195203">
                    <img src="Images/phone-call.png" alt="" height="20px" width="20px">
                    <p>0353195203</p>
                </a>
                <div class="div">

                    <a href=""><img src="Images/search.png" alt="" width="25px" height="25px"></a>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <?php $avatar = select_tk_ez($_SESSION['user']) ?>
                        <a href="index.php?act=dangnhap"><img style="border-radius: 30%;" src="Images/<?= $avatar['avatar'] ?>" alt="" width="25px" height="25px"></a>
                    <?php } else{ ?>
                        <a href="index.php?act=dangnhap"><img src="Images/user.png" alt="" width="25px" height="25px"></a>
                    <?php } ?>
                    <a href="index.php?act=cart"><img src="Images/shopping.png" alt="" width="25px" height="25px"></a>
                    <a class="thea" href="index.php?act=bill"><img class="fa-truck" src="Images/delivery-van.png" alt="" width="25px"></a>
                    
<style>

    .fa-truck{
        width: 25px;
        height: 25px;
        margin-top: 10px;
       color: black;
    }
</style>

                </div>
            </div>



        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="dropdown" >
                <a href="index.php?act=sanpham&iddm=" class="dropbtn" >Shop</a>
                <div class="dropdown-content">
                <?php 
                $all_danhmuc = all_danhmuc();
                ?>
                <?php foreach($all_danhmuc as $danhmuc) : ?>
                    <a href="index.php?act=sanpham&iddm=<?= $danhmuc['id_danhmuc'] ?>"><?= $danhmuc['ten_danhmuc'] ?></a>
                    <?php endforeach ?>  
                    </div>          
                </li>
                <li><a href="index/php?act=blog">Blog</a></li>
                <li><a href="index.php?act=contact">Contact</a></li>
                <li><a href="index.php?act=about">About</a></li>
                <li><a href="https://web.facebook.com/?_rdc=1&_rdr">Vergency Group</a></li>
                <li><a href="https://www.instagram.com/">Vergency Instagram</a></li>
            </ul>
        </nav>