<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Products</title>
</head>

<body>

    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Home</a></li>
                    <li>
                        <a>Products</a>
                        <ul class="p-2">
                            <li><a>Create</a></li>
                            <li><a>Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Users</a>
                        <ul class="p-2">
                            <li><a>Create</a></li>
                            <li><a>Table</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl" href="index.php">VerGenCy</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="index.php">Home</a></li>
                <li tabindex="0">
                    <details>
                        <summary>Products</summary>
                        <ul class="p-2">
                            <li><a href="createProduct.php">Create</a></li>
                            <li><a href="products.php">Table</a></li>
                        </ul>
                    </details>
                </li>
                <li tabindex="0">
                    <details>
                        <summary>Users</summary>
                        <ul class="p-2">
                            <li><a href="createUser.php">Create</a></li>
                            <li><a href="users.php">Table</a></li>
                        </ul>
                    </details>
                </li>
                <li tabindex="0">
                    <details>
                        <summary>Comment</summary>
                        <ul class="p-2">
                            <li><a href="createComment.php">Create</a></li>
                            <li><a href="comment.php">Table</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn" href="../../../../../../../GitHub/DuAn1/DuAn1/Code/index.php">Retunr Website</a>
        </div>
    </div>