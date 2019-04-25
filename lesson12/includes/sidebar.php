<?php
include "db.php";
$getCategories = "SELECT * FROM categories LIMIT 3";
$categoriesRezult = mysqli_query($connection, $getCategories);
if(!$categoriesRezult) {
    echo "Запрос не удался";
}
?>
<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form class="input-group" method="get" action="search.php">
            <input type="text" class="form-control" name="search" >
            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </form>
        <!-- /.input-group -->
    </div>



    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">

                    <?php

                    foreach ($categoriesRezult as $oneCategorie) :

                    ?>
                    <li><a href="category.php?category=<?= $oneCategorie['id']?>"><?=$oneCategorie["name"]?></a></li>
                        <?php

                    endforeach;

                    ?>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>