<?php
include 'dbOpen.php';




if(isset($_POST['message'])){
    var_dump($_POST);
    $sendMessage = "INSERT INTO comments (author, email, post_id, message) VALUES ('{$_POST['userName']}', '{$_POST['userEmail']}', 1, '{$_POST['message']}')";
    $sendMessageResult = mysqli_query($connection, $sendMessage);
    if(!$sendMessageResult) {
        echo "Запрос не удался";
    }
    echo true;
};
?>
