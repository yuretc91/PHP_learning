<?php
session_start();
if (isset($_SESSION['products'])){
    $productsId = $_SESSION['products'];
    //$productsQuantity = $_SESSION['productsQuantity'];
}

    if (isset($_POST['productsId'])){
        require 'dbOpen.php';
        /*foreach ($_POST['productsId'] as $oneProductId){
            $_SESSION['products'][] = $oneProductId;
        }*/
        $_SESSION['products'][$_POST['productsId']][] = $_POST['productsId'];
        $_SESSION['products'][$_POST['productsId']][] = $_POST['productsQuantity'];
        /*foreach ($_POST['productsQuantity'] as $oneProductQuantity){
            $_SESSION['productsQuantity'][] = $oneProductQuantity;
        }*/
    }

if (isset($_POST['openCart'])){
    require 'dbOpen.php';
    $db = new Database('localhost', 'root', '', 'test_ajax');
    $rowProduct = [];
    //$quantityCounter = 0;
    /*foreach ($productsId as $oneProduct){
        $sqlProducts = "SELECT * FROM products WHERE id = '{$oneProduct}'";
        $products = $db->selectAll($sqlProducts);

        foreach ($products as $key => $product){
            $rowProduct[] = $rowProduct[$key];
            $rowProduct[$key]['name'] = $product['name'];
            $rowProduct[$key]['description'] = $product['description'];
            $rowProduct[$key]['cathegory_id'] = $product['cathegory_id'];
            $rowProduct[$key]['id'] = $product['id'];
            $rowProduct[$key]['quantityCounter'] = $productsQuantity[$quantityCounter];
        }
        //$quantityCounter += 1;
    }*/
    foreach ($_SESSION['products'] as $productKey => $productArray){
        $sqlProducts = "SELECT * FROM products WHERE id = '{$productKey}'";
        $products = $db->selectAll($sqlProducts);
        foreach ($products as $key => $product){
            $rowProduct[] = $rowProduct[$key];
            $rowProduct[$key]['name'] = $product['name'];
            $rowProduct[$key]['description'] = $product['description'];
            $rowProduct[$key]['cathegory_id'] = $product['cathegory_id'];
            $rowProduct[$key]['id'] = $product['id'];
            $rowProduct[$key]['quantityCounter'] = $productArray[1];
        }
    }
    $rowProduct = json_encode($rowProduct);
    echo $rowProduct;
}

if (isset($_POST['deletedProductId'])){
    /*if (($key = array_search($_POST['deletedProductId'], $productsId['products'])) !== false) {
        unset($productsId['products'][$key]);
        $_SESSION['products'] = $productsId;
    }*/
    //$delKey = intval($_POST['deletedProductId']);
    unset($_SESSION['products'][$_POST['deletedProductId']]);
    //$_SESSION['products'] = $productsId;
}






?>
