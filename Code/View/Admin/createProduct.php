<?php require_once "./includes/header.php"; ?>
<?php require_once "./controllers/joinCategory.php"; ?>

<?php

// echo "<pre>";
// print_r($resultJoin);
// echo "</pre>";



?>


<!-- component -->
<form class="flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="./controllers/insertProduct.php" method="post" enctype="multipart/form-data">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">CREATE PRODUCT</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <label class="block font-semibold"> Title </label>
                <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="title">
                <label class="block mt-3 font-semibold"> Subtitle </label>
                <input type="text" placeholder="Subtitle" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="subtitle">
                <label class="block mt-3 font-semibold"> Desc </label>
                <input type="text" placeholder="Desc" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="desc">

                <input type="text" placeholder="Hot SP" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="hot_sp" value="0">

                <label class="block mt-3 font-semibold"> Price </label>
                <input type="text" placeholder="Subtitle" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="price">

                <select class="select select-bordered w-full max-w-xs mt-2" name="id_danhmuc">
                    <option disabled selected>Danh mục</option>
                    <?php foreach($resultJoin as $key => $value) :  ?>
                        <option value="<?= $value['id_danhmuc'] ?>"><?= $value['ten_danhmuc'] ?></option>
                    <?php endforeach;  ?>
                </select>


                <div class="flex justify-between items-baseline">
                    <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Create</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require_once "./includes/footer.php"; ?>