<?php
$getPosts = "SELECT * FROM posts";
$postsRezult = mysqli_query($connection, $getPosts);
if(!$postsRezult) {
    echo "Запрос не удался";
}
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Posts administration
                        </h1>
                        <a href="index.php?page=posts&active=create" class="btn btn-primary">Open form</a>
                        <?php
                        if (isset($_GET["active"]) && $_GET["active"] == "create") {        //СОЗДАНИЕ ПОСТА

                            ?>
                            <form action="index.php?page=posts" method="POST" enctype="multipart/form-data"
                                  class="form">
                                <label for="title" class="col-lg-6">Title</label>
                                <input type="text" name="title" class="form-control" value="1234">
                                <label for="author" class="col-lg-6">Author</label>
                                <input type="text" name="author" class="form-control">
                                <label for="content" class="col-lg-6">Content</label>
                                <input type="text" name="content" class="form-control">
                                <label for="image" class="col-lg-6">Image</label>
                                <input type="file" name="image" class="form-control">
                                <label for="categoty" class="col-lg-6">Category</label>
                                <input type="text" name="category" class="form-control">
                                <input type="submit" name="postCreate" value="Submit">
                            </form>
                            <?php
                        }
                            if (isset($_POST['postCreate'])) {
                                $postTitle = $_POST["title"];
                                $postAuthor = $_POST["author"];
                                $postContent = $_POST["content"];
                                $postImage = "uploads/" . $_POST["title"] . ".jpg";
                                $postCategory = $_POST["category"];
                                move_uploaded_file($_FILES["image"]["tmp_name"], $postImage);
                                //echo "<p>" . $_FILES["image"]["tmp_name"] . "</p>";
                                $insPost = "INSERT INTO posts (title, author, created_at, content, image, cat_id) VALUES ('{$postTitle}', '{$postAuthor}', NOW(), '{$postContent}', '{$postImage}', '{$postCategory}')";
                                $insPostRezult = mysqli_query($connection, $insPost);
                                if (!$insPostRezult) {
                                    echo "Запрос не удался";
                                }
                            }

                        ?>

                        <?php


                            if (isset($_GET["active"]) && $_GET["active"] == "update") {                                            //РЕДАКТИРОВАНИЕ ПОСТА
                                $currentId = $_GET['id'];
                                $getCurrentPost = "SELECT * FROM posts WHERE id = '{$currentId}'";
                                $currentPostRezult = mysqli_query($connection, $getCurrentPost);
                                if (!$currentPostRezult) {
                                    echo "Запрос не удался";
                                }
                                foreach ($currentPostRezult as $oneCurrentPost) {
                                    $currentId = $oneCurrentPost['id'];
                                    $currentTitle = $oneCurrentPost['title'];
                                    $currentAuthor = $oneCurrentPost['author'];
                                    $currentContent = $oneCurrentPost['content'];
                                    $currentCategory = $oneCurrentPost['cat_id'];
                                }
                                ?>
                                <form action="index.php?page=posts" method="POST" enctype="multipart/form-data"
                                      class="form">
                                    <label for="title" class="col-lg-6">Title</label>
                                    <input type="text" name="title" class="form-control" value="<?= $currentTitle ?>">
                                    <input type="hidden" name="id" class="form-control" value="<?= $currentId ?>">
                                    <label for="author" class="col-lg-6">Author</label>
                                    <input type="text" name="author" class="form-control" value="<?= $currentAuthor ?>">
                                    <label for="content" class="col-lg-6">Content</label>
                                    <input type="text" name="content" class="form-control"
                                           value="<?= $currentContent ?>">
                                    <label for="image" class="col-lg-6">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <label for="categoty" class="col-lg-6">Category</label>
                                    <input type="text" name="category" class="form-control"
                                           value="<?= $currentCategory ?>">
                                    <input type="submit" name="postUpdate" value="Submit">
                                </form>
                                <?php
                            }
                                if (isset($_POST['postUpdate'])){
                                    $currentId = $_POST['id'];
                                    $newPostTitle = $_POST["title"];
                                    $newPostAuthor = $_POST["author"];
                                    $newPostContent = $_POST["content"];
                                    $newPostImage = "uploads/" . $_POST["title"] . ".jpg";
                                    $newPostCategory = $_POST["category"];
                                    move_uploaded_file($_FILES["image"]["tmp_name"], $newPostImage);
                                    $updPost = "UPDATE posts SET title = '{$newPostTitle}', author = '{$newPostAuthor}', created_at = NOW(), content = '{$newPostContent}', image = '{$newPostImage}', cat_id = '{$newPostCategory}' WHERE id = '{$currentId}'";
                                    $updPostRezult = mysqli_query($connection, $updPost);
                                    if(!$updPostRezult) {
                                        echo "Запрос не удался";
                                    }
                                }

                            ?>

                        <?php
                            if (isset($_GET["active"]) && $_GET["active"] == "delete") {         //УДАЛЕНИЕ ПОСТА
                                $currentId = $_GET['id'];
                                $delPost = "DELETE FROM posts WHERE id = '{$currentId}' LIMIT 1";
                                $delPostRezult = mysqli_query($connection, $delPost);
                                if (!$delPostRezult) {
                                    echo "Запрос не удался";
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
                                        <td><a href="index.php?page=posts&active=update&id=<?=$onePost['id']?>" class="btn btn-primary">Redact</a><a href="index.php?page=posts&active=delete&id=<?=$onePost['id']?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php

                                endforeach;

                                ?>


                                </tbody>
                            </table>




                    </div>
                </div>

            </div>


        </div>