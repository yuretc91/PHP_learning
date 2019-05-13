<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Device</title>
    <link rel="stylesheet" href="styles/indexStyle.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="stylesheet" href="styles/btn_orange-black.css">
    <link rel="stylesheet" href="styles/popular.css">
    <link rel="stylesheet" href="styles/services.css">
</head>

<body>
<?php
include_once "header.php";
?>
    <main>
        <?php
        include_once "slider.php";
        include_once "popular.php";
        include_once "services.php";
        include_once "logotypes.php";
        include_once "infoAndContacts.php";
        ?>
    </main>
<?php
include_once "footer.php";
?>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>

</body>

</html>
