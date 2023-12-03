<?php require_once "./includes/header.php"; ?>

<form class=" flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="./controllers/insertCategory.php" method="post">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Thêm Mới Loại Hàng Hóa </span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold"> Ten Loai </label>
                <input type="text" placeholder="Tên Loại" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="ten_dannhmuc">

                <div class="flex justify-between items-baseline">
                    <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600">Create</button>
                </div>
            </div>
        </div>
    </div>
</form>
<a href="products.php" class="btn btn-success">List Products</a>
<?php require_once "./includes/footer.php"; ?>