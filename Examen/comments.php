<?php
include 'dbOpen.php';


/*if (isset($_POST['cathegoryId'])){
    require 'dbOpen.php';
    $db = new Database('localhost', 'root', '', 'test_ajax');
    $row = [];
    foreach ($_POST['cathegoryId'] as $oneCategory){
        $sql = "SELECT * FROM items WHERE cathegory_id = '{$oneCategory}'";
        $items = $db->selectAll($sql);

        foreach ($items as $key => $item){

            $row[] = $row[$key];
            $row[$key]['item_name'] = $item['item_name'];
            $row[$key]['id'] = $item['id'];
            $row[$key]['cathegory_id'] = $item['cathegory_id'];
        }
    }

    $row = json_encode($row);
    echo $row;
}*/


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
