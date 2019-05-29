<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>

	</style>
	
</head>

<body>
<?php
require 'dbOpen.php';
$db = new Database('localhost', 'root', '', 'test_ajax');
$sql = "SELECT * FROM cathegory";
$cathegories = $db->selectAll($sql);
?>
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


	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>

</html>
