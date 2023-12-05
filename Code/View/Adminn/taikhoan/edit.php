<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>

    <form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="" method="post" enctype="multipart/form-data">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">UPDATE USER</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                <div class="h-2 bg-purple-400 rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <input type="text" placeholder="Id" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="id" value="<?= $one_user['id_user']  ?>">

                    <label class="block font-semibold"> Ten User </label>
                    <input type="text" placeholder="ten nguoi dung" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="ten_user" value="<?= $one_user['ten_user']  ?>">

                    <label class="block mt-3 font-semibold"> SDT </label>
                    <input type="tel" placeholder="sdt" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="sdt_user"   value="<?= $one_user['sdt_user']  ?>">

                    <label class="block mt-3 font-semibold"> Dia chi </label>
                    <input type="text" placeholder="Dia chi" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="diachi_user" value="<?= $one_user['diachi_user']  ?>">
                    
                    <label class="block mt-3 font-semibold" >Email</label>
                     <input type="email" id="" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="gmail_user" value="<?= $one_user['gmail_user']  ?>" >
                    
                     <label class="block mt-3 font-semibold"> Ten Tai Khoan </label>
                    <input type="text" placeholder="Ten Tai Khoan" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="tentaikhoan_user" value="<?= $one_user['tentaikhoan_user']  ?>">

                    <label class="block mt-3 font-semibold"> Password </label>
                    <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="password_user" value="<?= $one_user['password_user']  ?>">
                    <label class="block mt-3 font-semibold"> Avatar </label>
                    <input type="hidden" value="<?= $one_user['avatar'] ?>" placeholder="avatar" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="avatar">
                    <input type="file" placeholder="avatar" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="avatar">

                    <br> 
                    <img src="../../Images/<?= $one_user['avatar']?>" alt="" width="100px">

                    <div class="flex justify-between items-baseline">
                        <input type="submit" value="UPDATE" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600" name="edituser">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <a href="index.php?act=listuser" class="btn btn-success">List User</a>
