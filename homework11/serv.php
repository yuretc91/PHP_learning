<?php


if (isset($_POST['cathegoryId'])){
    require 'dbOpen.php';
    $db = new Database('localhost', 'root', '', 'test_ajax');
    $row = [];
    foreach ($_POST['cathegoryId'] as $oneCategory){
        $sql = "SELECT * FROM items WHERE cathegory_id = '{$oneCategory}'";
        $items = $db->selectAll($sql);

        foreach ($items as $key => $item){
            //$row[] = "<p>" . $item['item_name'] . "</p>";
            //$row[] = $item['item_name'];
            $row[] = $row[$key];
            $row[$key]['item_name'] = $item['item_name'];
            $row[$key]['id'] = $item['id'];
            $row[$key]['cathegory_id'] = $item['cathegory_id'];
        }
    }


    //$row = implode(' ', $row);
    $row = json_encode($row);
    echo $row;
}

?>
