<?php
/*require 'session.php';
$session = new Session();*/
session_start();
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
    <table class="cartList">
        <thead>
        <th>Product name</th>
        <th>Product description</th>
        <th>Cathegory id</th>
        <th>Delete from cart</th>
        </thead>
    </table>
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
    <div class="cartButton"><button id="cart">Cart</button></div>
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
        <th>Add to cart</th>
        </thead>

        <?php
        foreach ($products as $product):
        ?>
        <tr>
            <td><?=$product['name']?></td>
            <td><?=$product['description']?></td>
            <td><?=$product['cathegory_id']?></td>
            <td><input type="checkbox" class="checkProduct" name="checkProduct" value="<?=$product['id']?>"></td>
        </tr>
            <?php
        endforeach;
        ?>

    </table>
    <input type="button" name="addToCart" class="addToCart" value="Add to cart">
</div>



	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<script src="js/cart.js"></script>
</body>

</html>
