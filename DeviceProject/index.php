<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Device</title>
    <link rel="stylesheet" href="common/styles/fonts.css">
    <link rel="stylesheet" href="styles/indexStyle.css">
    <link rel="stylesheet" href="main-page/header/header.css">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="stylesheet" href="styles/slider-position.css">
    <link rel="stylesheet" href="styles/btn_orange-black.css">
    <link rel="stylesheet" href="styles/popular.css">
    <link rel="stylesheet" href="styles/services.css">
</head>

<body>
<?php
include_once "main-page/header/header.php";
?>
    <main>
        <?php
        include_once "main-page/main/slider/slider.php";
        include_once "main-page/main/popular/popular.php";
        include_once "main-page/main/services/services.php";
        include_once "main-page/main/logotypes/logotypes.php";
        include_once "main-page/main/info-and-contacts/infoAndContacts.php";
        ?>
    </main>
<?php
include_once "main-page/footer/footer.php";
?>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>

</body>

</html>
