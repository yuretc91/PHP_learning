<?php
session_start();
if (isset($_SESSION['products'])){
    $productsId = $_SESSION['products'];
}

    if (isset($_POST['productsId'])){
        require 'dbOpen.php';
        foreach ($_POST['productsId'] as $oneProductId){
            $_SESSION['products'][] = $oneProductId;
        }
    }

if (isset($_POST['openCart'])){
    require 'dbOpen.php';
    $db = new Database('localhost', 'root', '', 'test_ajax');
    $rowProduct = [];
    foreach ($productsId as $oneProduct){
        $sqlProducts = "SELECT * FROM products WHERE id = '{$oneProduct}'";
        $products = $db->selectAll($sqlProducts);

        foreach ($products as $key => $product){
            $rowProduct[] = $rowProduct[$key];
            $rowProduct[$key]['name'] = $product['name'];
            $rowProduct[$key]['description'] = $product['description'];
            $rowProduct[$key]['cathegory_id'] = $product['cathegory_id'];
            $rowProduct[$key]['id'] = $product['id'];
        }
    }
    $rowProduct = json_encode($rowProduct);
    echo $rowProduct;
}

if (isset($_POST['deletedProductId'])){
    if (($key = array_search($_POST['deletedProductId'], $productsId)) !== false) {
        unset($productsId[$key]);
        $_SESSION['products'] = $productsId;
    }
}






?>
