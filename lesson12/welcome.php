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






            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Number</th>
                    <th>Comment</th>
                    <th>Author</th>
                    <th>Is readed</th>
                    <th>Control</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $getComments = "SELECT messages.id AS message_id, messages.text, users.login, messages.is_it_read FROM messages INNER JOIN users ON messages.user_id = users.id";
                $rezultComments = mysqli_query($connection, $getComments);
                if (!$rezultComments){
                    die("Запрос не удался - " . mysqli_error());
                }
                $row = mysqli_fetch_assoc($rezultComments);
                foreach ($rezultComments as $oneComment) :

                    ?>
                    <tr>
                        <td class="col-lg-1"><?= $oneComment["message_id"]?></td>
                        <td class="col-lg-7"><?= $oneComment["text"]?></td>
                        <td class="col-lg-2"><?= $oneComment["login"]?></td>
                        <td class="col-lg-3"><?= $oneComment["is_it_read"]?></td>
                        <?php
                        if ($oneComment["login"] == $user_login){?>
                            <td><a href="#" class="btn btn-danger" disabled>It's my message</a></td>
                            <?php
                        }elseif($oneComment["is_it_read"] == 'true'){?>
                            <td><a href="#" class="btn btn-success" disabled>Readed</a></td>

                         <?php
                        }else{?>
                            <td><a href="welcome.php?message_id=<?=$oneComment['message_id']?>" class="btn btn-primary">Read</a></td>
                        <?php
                        }
                        ?>

                    </tr>
                <?php

                endforeach;
                if (isset($_GET['message_id'])){
                    $updComment = "UPDATE messages SET is_it_read = 'true' WHERE id = '{$_GET['message_id']}'";
                    $updCommentRezult = mysqli_query($connection, $updComment);
                    if(!$updCommentRezult) {
                        echo "Запрос не удался";
                    }
                }

                ?>




                </tbody>
            </table>



    </div>

<?php

//include "includes/footer.php";

?>