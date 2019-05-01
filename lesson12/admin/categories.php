<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Category administration
                </h1>
                <form action="index.php" method="GET">
                    <label for="categoryName">Choose category for update or delete</label>
                    <select name="categoryName" id="categoryName">
                        <?php
                        $getCategories = "SELECT * FROM categories";
                        $categoriesRezult = mysqli_query($connection, $getCategories);
                        if(!$categoriesRezult) {
                            echo "Запрос не удался";
                        }
                        foreach ($categoriesRezult as $oneCategory) :

                            ?>
                            <option value="<?= $oneCategory["name"]?>"><?=$oneCategory["name"]?></option>
                        <?php

                        endforeach;

                        ?>

                    </select>
                    <p>or create new category</p>
                    <label for="newCategoryName">CategoryName</label>
                    <input type="text" name="newCategoryName">
                    <label for="newCategoryCode">CategoryCode</label>
                    <input type="text" name="newCategoryCode"><br>
                    <input type="submit" name="update" value="update"><br>
                    <input type="submit" name="delete" value="delete"><br>
                    <input type="submit" name="create" value="create">
                </form>
                <?php
                if (isset($_GET["delete"])){
                    if (isset($_GET["categoryName"])){
                        $categoryName = $_GET["categoryName"];
                        $delCategories = "DELETE FROM categories WHERE name = $categoryName";
                        $delCategoriesRezult = mysqli_query($connection, $delCategories);
                        if(!$delCategoriesRezult) {
                            echo "Запрос не удался";
                        }
                    }
                }
                if (isset($_GET["create"])){
                    //if (isset($_GET["categoryName"])){
                    $categoryName = $_GET["newCategoryName"];
                    $categoryCode = $_GET["newCategoryCode"];
                    $insCategories = "INSERT INTO categories ('name', 'code') VALUES ('eeegee', 'egegeeg')";
                    $insCategoriesRezult = mysqli_query($connection, $insCategories);
                    if(!$insCategoriesRezult) {
                        echo "Запрос не удался";
                    } else echo $insCategoriesRezult;
                    //}
                }
                ?>

            </div>
        </div>


    </div>

</div>
//DELETE FROM `categories` WHERE 0     INSERT INTO `categories`(`id`, `name`, `code`) VALUES ([value-1],[value-2],[value-3])