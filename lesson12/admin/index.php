<?php

include "../includes/db.php";
include_once "head.php";


?>

<body>


    <div id="wrapper">
        <?php
        include_once "nav.php";

        if (isset($_GET["page"])){
            if ($_GET["page"] == "categories"){
                include_once "categories.php";
            }elseif ($_GET["page"] == "posts"){
                include_once "posts.php";
            }

        }

        ?>
    </div>

    <?php
    if (isset($_POST["delete"])){
        if (isset($_POST["categoryName"])){
            $categoryName = $_POST["categoryName"];
            $delCategories = "DELETE FROM categories WHERE name = '{$categoryName}' LIMIT 1";
            $delCategoriesRezult = mysqli_query($connection, $delCategories);
            if(!$delCategoriesRezult) {
                echo "Запрос не удался";
            }
        }
    }
    if (isset($_POST["create"])){

        $categoryName = $_POST["newCategoryName"];
        $categoryCode = $_POST["newCategoryCode"];
        $insCategories = "INSERT INTO categories (name, code) VALUES ('{$categoryName}', '{$categoryCode}')";
        $insCategoriesRezult = mysqli_query($connection, $insCategories);
        if(!$insCategoriesRezult) {
            echo "Запрос не удался";
        }

    }
    if (isset($_POST["update"])){
        $oldCategoryName = $_POST["categoryName"];
        $newCategoryName = $_POST["newCategoryName"];
        $categoryCode = $_POST["newCategoryCode"];
        $insCategories = "UPDATE categories SET name = '{$newCategoryName}', code = '{$categoryCode}' WHERE name = '{$oldCategoryName}'";
        $insCategoriesRezult = mysqli_query($connection, $insCategories);
        if(!$insCategoriesRezult) {
            echo "Запрос не удался";
        }

    }
    ?>




    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>

</body>

</html>
