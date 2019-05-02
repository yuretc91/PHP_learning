<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <h1 class="page-header">
                    Category administration
                </h1>
                <form action="index.php?page=categories" method="POST">
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


            </div>
        </div>


    </div>

</div>
