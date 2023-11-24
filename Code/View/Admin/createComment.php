<?php require_once "./includes/header.php"; ?>

<form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" action="./controllers/insertComment.php" method="post">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
        <span class="text-2xl font-light ">Create</span>
        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
            <div class="h-2 bg-purple-400 rounded-t-md"></div>
            <div class="px-8 py-6 ">
                <input type="text" placeholder="Id" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="id">

                <label class="block font-semibold"> Noi Dung </label>
                <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="noidung">

                <div class="flex justify-between items-baseline">
                    <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600" name="create">Create</button>
                </div>
            </div>
        </div>
    </div>
</form>
<a href="comemnt.php" class="btn btn-success">List</a>
<?php require_once "./includes/footer.php"; ?>