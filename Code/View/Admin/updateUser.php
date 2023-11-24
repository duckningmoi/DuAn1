<?php require_once "./controllers/selectEditUser.php"; ?>
<?php require_once "./includes/header.php"; ?>

    <form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="./controllers/updateUser.php">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">UPDATE USER</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                <div class="h-2 bg-purple-400 rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <input type="text" placeholder="Id" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="id" value="<?= $result['id_user']  ?>">

                    <label class="block font-semibold"> Ten User </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="username" value="<?= $result['ten_user']  ?>">

                    <label class="block mt-3 font-semibold"> SDT </label>
                    <input type="tel" placeholder="Subtitle" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="phone"   value="<?= $result['sdt_user']  ?>">

                    <label class="block mt-3 font-semibold"> Dia chi </label>
                    <input type="text" placeholder="Dia chi" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="diachi" value="<?= $result['diachi_user']  ?>">

                    <input type="email" placeholder="gmail " class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="gmail" value="<?= $result['gmail_user']  ?>">

                    <label class="block mt-3 font-semibold"> Ten Tai Khoan </label>
                    <input type="text" placeholder="Ten Tai Khoan" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="tentaikhoan" value="<?= $result['tentaikhoan_user']  ?>">

                    <label class="block mt-3 font-semibold"> Password </label>
                    <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="password" value="<?= $result['password_user']  ?>">

                    <div class="flex justify-between items-baseline">
                        <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600" name="update">UPDATE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <a href="index.php" class="btn btn-success">List</a>
    <?php require_once "./includes/footer.php"; ?>
