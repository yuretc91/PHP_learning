<?php
include "includes/db.php";
include "includes/header.php";
include "includes/nav.php";
?>
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>
            <?php
if (isset($_GET["search"])){
    $searchRequest = $_GET["search"];
    //echo $searchRequest;
    $getCategoriesFromSearch = "SELECT * FROM posts WHERE title LIKE '%$searchRequest%'";
    $searchPostsRezult = mysqli_query($connection, $getCategoriesFromSearch);
    if(!$searchPostsRezult) {
        echo "Запрос не удался";
    }
    /*foreach ($searchCategoriesRezult as $searchCategory){
        $idCategory = $searchCategory["id"];
    }*/
    /*$getPostsFromSearch = "SELECT * FROM posts WHERE cat_id = $idCategory";
    $searchPostsRezult = mysqli_query($connection, $getPostsFromSearch);*/

}
foreach ($searchPostsRezult as $post) :
                ?>
                <h2>
                    <a href="post.php?post_id=<?= $post['id']?>"><?= $post['title']?></a>
                </h2>
                <p class="lead">
                    by <a href="/"><?= $post['author']?></a>
                </p>
                <p>
                    <span class="glyphicon glyphicon-time"></span>
                    Posted on <?= date('M d, Y', strtotime($post['created_at']))?></p>
                <hr>
                <img class="img-responsive" src="<?= $post['image']?>" alt="">
                <hr>
                <p>
                    <?= substr($post['content'], 0, 180)?>...
                </p>
                <a class="btn btn-primary" href="post.php?post_id=<?= $post['id']?>">
                    Read More <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

                <hr>
                <?php

            endforeach;

            ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <?php

        include "includes/sidebar.php";


        ?>

    </div>
    <!-- /.row -->
    <?php

    include "includes/footer.php";

    ?>




