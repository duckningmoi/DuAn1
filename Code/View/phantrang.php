<style>
    .pagination {
        border: 1px solid black;
        margin-top: 10px;
        margin-left: 650px;
        display: inline-block;
    }

    <?php if ($color_page = $_GET['page']) : ?><?php endif ?>.pagination a {
        border-right: 1px solid black;
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination a :visited {
        background-color: #00FFFF;
        color: white;
        border-radius: 5px;
    }


    .pagination a:hover {
        background-color: #00CCCC;
    }
</style>

<div class="pagination">
    <?php
    if ($current_page > 1 && $total_page > 1) {
        echo '<a href="index.php?page=' . ($current_page - 1) . '"><<</a>  ';
    }

    for ($i = 1; $i <= $total_page; $i++) {

        if ($i == $current_page) {
            echo '<a>' . $i . '</a>  ';
        } else {
            echo '<a class="page' . $i . '" href="index.php?page=' . $i . '">' . $i . '</a>  ';
        }
    }
    if ($current_page < $total_page && $total_page > 1) {
        echo '<a href="index.php?page=' . ($current_page + 1) . '">>></a>  ';
    }
    ?>
</div>