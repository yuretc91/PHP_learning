<?php



    if (isset($_POST['productsId'])){

    }
    require 'dbOpen.php';
    $db = new Database('localhost', 'root', '', 'test_ajax');
    $rowProduct = [];
    foreach ($_POST['productsId'] as $oneProduct){
        $sqlProducts = "SELECT * FROM products WHERE id = '{$oneProduct}'";
        $products = $db->selectAll($sqlProducts);

        foreach ($products as $key => $product){
            $rowProduct[] = $rowProduct[$key];
            $rowProduct[$key]['name'] = $product['name'];
            $rowProduct[$key]['description'] = $product['description'];
            $rowProduct[$key]['cathegory_id'] = $product['cathegory_id'];
        }
    }


    //$row = implode(' ', $row);
    $rowProduct = json_encode($rowProduct);
    echo $rowProduct;


?>
