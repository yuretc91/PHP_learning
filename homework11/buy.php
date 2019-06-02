<?php
session_start();
if (isset($_SESSION['products'])){
    $productsId = $_SESSION['products'];
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="cart">

    <table>
        <thead>
        <th>Product name</th>
        <th>Product description</th>
        <th>Cathegory id</th>
        </thead>
        <tbody class="cartList">


        <?php

        require 'dbOpen.php';
        $db = new Database('localhost', 'root', '', 'test_ajax');
        foreach ($productsId as $oneProduct):
        $sqlProducts = "SELECT * FROM products WHERE id = '{$oneProduct}'";
        $products = $db->selectAll($sqlProducts);

        foreach ($products as $product):?>
        <tr><td><?=$product['name']?></td><td><?=$product['description']?></td><td><?=$product['cathegory_id']?></td></tr>

        <?php
            endforeach;
        endforeach;
            ?>
        </tbody>
    </table>
    <a href="#">Complete the purchase</a>
    <a href="index.php">Main page</a>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</html>
