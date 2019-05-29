<?php


if (isset($_POST['cathegoryId'])){
    require 'dbOpen.php';
    $db = new Database('localhost', 'root', '', 'test_ajax');

    foreach ($_POST['cathegoryId'] as $oneCategory){
        $sql = "SELECT * FROM items WHERE cathegory_id = '{$oneCategory}'";
        $items = $db->selectAll($sql);

        foreach ($items as $item){
            $row[] = "<p>" . $item['item_name'] . "</p>";
        }
    }


    $row = implode(' ', $row);
    echo $row;
}

?>
