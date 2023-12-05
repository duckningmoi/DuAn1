<?php if(isset($thongbao)) { ?>
<script> alert("<?= $thongbao ?>") </script>
    <?php } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Category</title>
</head>

<body>
    <form class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12" enctype="multipart/form-data" action="" method="post">
        <div class="relative py-3 sm:w-96 mx-auto text-center">
            <span class="text-2xl font-light ">UPDATE</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                <div class="h-2 bg-purple-400 rounded-t-md"></div>
                <div class="px-8 py-6 ">
                    <input type="hiden" placeholder="Id" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md hidden" name="id_danhmuc" value="<?= $one_danhmuc['id_danhmuc']  ?>">

                    <label class="block font-semibold"> Tên Danh Mục </label>
                    <input type="text" placeholder="Title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" name="ten_danhmuc" value="<?= $one_danhmuc['ten_danhmuc']  ?>">
                    <label class="block mt-3 font-semibold"> Img </label>
                    <input type="hidden" class="file-input file-input-bordered w-full max-w-xs" name="img" value="<?= $one_danhmuc['img_danhmuc'] ?>"/>
                    <input type="file" name="img" id="" >
                    <div class="avatar mt-2">
                        <div class="w-24 rounded">
                            <img name="img" src="../../Images/<?= $one_danhmuc['img_danhmuc'] ?>" />
                        </div>
                    </div> <br> <br>
                    <div class="flex justify-between items-baseline">
                        <input name="editdm" type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600" value="Update CateGory"></input>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <a href="index.php?act=listsp" class="btn btn-success">List</a>
</body>

</html>