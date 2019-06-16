<?php
session_start();
if (isset($_SESSION['products'])){
    $productsId = $_SESSION['products'];
    //$productsQuantity = $_SESSION['productsQuantity'];
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link href="styles/style.css" rel="stylesheet">
	
</head>

<body>
<div class="cart">

    <table>
        <thead>
        <th>Product name</th>
        <th>Product description</th>
        <th>Cathegory id</th>
        <th>Quantity</th>
        <th>Delete from cart</th>
        </thead>
        <tbody class="cartList">

        </tbody>
    </table>
    <a href="buy.php" id="buyFromCart">Buy</a>
    <a href="index.php?sessionDestroy">Delete products from session</a>
</div>
<?php
require 'dbOpen.php';
$db = new Database('localhost', 'root', '', 'test_ajax');
$sql = "SELECT * FROM cathegory";
$cathegories = $db->selectAll($sql);
?>
<div class="filtr">
    <div class="menu">
        <form action="serv.php" class="cathegoryList">
            <?php
            foreach ($cathegories as $cathegory):
                ?>
                <input type="checkbox" name="cathegory" class="cathegory" value="<?=$cathegory['id']?>"><?=$cathegory['cathegory_name']?><br>



                <?php
            endforeach;
            ?>


        </form>
    </div>
    <div class="content">

    </div>
    <div class="cartButton"><button id="openCart">Cart</button></div>
</div>
<div class="products">
    <?php
    $sqlProducts = "SELECT * FROM products";
    $products = $db->selectAll($sqlProducts);
    ?>
    <table class="productList">
        <thead>
        <th>Product name</th>
        <th>Product description</th>
        <th>Cathegory id</th>
        <th>Quantity</th>
        <th>Add to cart</th>
        </thead>

        <?php
        foreach ($products as $product):
        ?>
        <tr>
            <td><?=$product['name']?></td>
            <td><?=$product['description']?></td>
            <td><?=$product['cathegory_id']?></td>
            <td class="quantity"><button class="minus">-</button>
                <input type="number" class="quantityCount" value="1"><button class="plus">+</button></td>
            <td><button class="checkProduct" value="<?=$product['id']?>">Add</button></td>
        </tr>
            <?php
        endforeach;
        ?>

    </table>

</div>


<?php
if (isset($_GET['seeProducts'])){
    foreach ($productsId as $oneProduct){
        echo $oneProduct . '<br>';
    }

}
if (isset($_GET['sessionDestroy'])){
    $_SESSION['products'] = [];
}
?>


<div>
    <?php
    var_dump($_SESSION['products']);
    ?>
</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<script src="js/cart.js"></script>
</body>

</html>
