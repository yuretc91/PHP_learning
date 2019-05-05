<?php
session_start();
if (isset($_GET["active"]) && $_GET["active"] == "logout"){
    $_SESSION = [];
    session_destroy();
}
if (isset($_SESSION['userLogin'])){
    $user_login = $_SESSION['userLogin'];
}else header("Location: index.php");


    include "includes/db.php";
    include "includes/header.php";
    include "includes/nav.php";


?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Welcome, dear <?php
                if (isset($_SESSION['userLogin'])){
                    echo $_SESSION['userLogin'];
                }
                ?>
            </h1>

            <a href="welcome.php?active=redact" class="btn btn-primary">Redact your profile</a>
            <?php
            if (isset($_GET["active"]) && $_GET["active"] == "redact") {                                            //РЕДАКТИРОВАНИЕ ПОСТА
                $query = "SELECT * FROM users WHERE login = '{$user_login}'";
                $rezult = mysqli_query($connection, $query);
                if (!$rezult){
                    die("Запрос не удался - " . mysqli_error());
                }
                $row = mysqli_fetch_assoc($rezult);

                ?>
                <form action="welcome.php" method="POST" enctype="multipart/form-data"
                      class="form">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <label for="login" class="col-lg-6">Login</label>
                    <input type="text" name="login" class="form-control" value="<?= $row['login'] ?>">

                    <label for="password" class="col-lg-6">Password</label>
                    <input type="text" name="password" class="form-control" value="<?= $row['password'] ?>">
                    <label for="content" class="col-lg-6">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>">

                    <input type="submit" name="userUpdate" value="Submit">
                </form>
                <?php
            }
            if (isset($_POST['userUpdate'])){
                $currentId = $_POST['id'];
                $newUserLogin = $_POST["login"];
                $newUserPassword = $_POST["password"];
                $newUserEmail = $_POST["email"];

                $updUser = "UPDATE users SET login = '{$newUserLogin}', password = '{$newUserPassword}', email = '{$newUserEmail}' WHERE id = '{$currentId}'";
                $updUserRezult = mysqli_query($connection, $updUser);
                if(!$updUserRezult) {
                    die( "Запрос не удался - " . mysqli_error());
                }

                $_SESSION['userLogin'] = $newUserLogin;
            }
            ?>
            <a href="welcome.php?active=logout" class="btn btn-primary">Logout</a>



    </div>
    <!-- /.row -->
<?php

//include "includes/footer.php";

?>