<?php
$getPosts = "SELECT * FROM posts";
$postsRezult = mysqli_query($connection, $getPosts);
if(!$postsRezult) {
    echo "Запрос не удался";
}
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Posts administration
                        </h1>
                        <a href="index.php?page=posts&active=create" class="btn btn-primary">Create post</a>
                        <?php
                        if (isset($_GET["active"])){
                            if ($_GET["active"] == "create"){?>
                                <form action="index.php?page=posts" method="POST" enctype="multipart/form-data" class="form">
                                    <label for="title" class="col-lg-6">Title</label>
                                    <input type="text" name="title" class="form-control" value="1234">
                                    <label for="author" class="col-lg-6">Author</label>
                                    <input type="text" name="author" class="form-control">
                                    <!--<input type="hidden" name="date" value="<?/*=date('y-m-d')*/?>">-->
                                    <label for="content" class="col-lg-6">Content</label>
                                    <input type="text" name="content" class="form-control">
                                    <label for="image" class="col-lg-6">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <label for="categoty" class="col-lg-6">Category</label>
                                    <input type="text" name="category" class="form-control">
                                    <input type="submit" name="submit" value="Submit">
                                </form>
                        <?php    }elseif ($_GET["active"] == "redact"){?>
                        <form action="index.php?page=posts" method="POST" enctype="multipart/form-data" class="form">
                            <?php

                            ?>
                            <label for="title" class="col-lg-6" >Title</label>
                            <input type="text" name="title" class="form-control">
                            <label for="author" class="col-lg-6">Author</label>
                            <input type="text" name="author" class="form-control">
                            <!--<input type="hidden" name="date" value="<?/*=date('y-m-d')*/?>">-->
                            <label for="content" class="col-lg-6">Content</label>
                            <input type="text" name="content" class="form-control">
                            <label for="image" class="col-lg-6">Image</label>
                            <input type="file" name="image" class="form-control">
                            <label for="categoty" class="col-lg-6">Category</label>
                            <input type="text" name="category" class="form-control">
                            <input type="submit" name="submit" value="Submit">

                        <?php
                            }
                        }
                        ?>

                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Post title</th>
                                    <th>Post author</th>
                                    <th>Date created</th>
                                    <th>Post content</th>
                                    <th>Post image</th>
                                    <th>Category</th>
                                    <th>Control</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($postsRezult as $onePost) :

                                    ?>
                                    <tr>
                                        <td><?= $onePost["id"]?></td>
                                        <td class="col-lg-1"><?= $onePost["title"]?></td>
                                        <td><?= $onePost["author"]?></td>
                                        <td class="col-lg-1"><?= $onePost["created_at"]?></td>
                                        <td class="col-lg-4"><?= $onePost["content"]?></td>
                                        <td><?= $onePost["image"]?></td>
                                        <td><?= $onePost["cat_id"]?></td>
                                        <td><a href="index.php?page=posts&active=redact" class="btn btn-primary">Redact</a><a href="index.php?page=posts&active=delete" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php

                                endforeach;

                                ?>


                                </tbody>
                            </table>
                        <?php
                        if (isset($_GET["active"])){
                            if ($_GET["active"] == "redact") {

                        } elseif ($_GET["active"] == "delete"){

                            }

                        }

                        /*$oldCategoryName = $_POST["categoryName"];
                        $newCategoryName = $_POST["newCategoryName"];
                        $categoryCode = $_POST["newCategoryCode"];
                        $insCategories = "UPDATE categories SET name = '{$newCategoryName}', code = '{$categoryCode}' WHERE name = '{$oldCategoryName}'";
                        $insCategoriesRezult = mysqli_query($connection, $insCategories);
                        if(!$insCategoriesRezult) {
                            echo "Запрос не удался";
                        }
                        */?>
                       <!-- <form action="index.php?page=categories" method="POST">
                            <label for="categoryName">Choose category for update or delete</label>
                            <select name="categoryName" id="categoryName">



                            </select>
                            <p>or create new category</p>
                            <label for="newCategoryName">CategoryName</label>
                            <input type="text" name="newCategoryName">
                            <label for="newCategoryCode">CategoryCode</label>
                            <input type="text" name="newCategoryCode"><br>
                            <input type="submit" name="update" value="update"><br>
                            <input type="submit" name="delete" value="delete"><br>
                            <input type="submit" name="create" value="create">
                        </form>-->


                    </div>
                </div>

            </div>


            </div>
            <!-- /.container-fluid -->

        </div>
