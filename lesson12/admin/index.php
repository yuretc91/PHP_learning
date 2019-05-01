<?php
include "../includes/db.php";
include_once "head.php";


?>

<body>


    <div id="wrapper">
        <?php
        include_once "nav.php";

        if (isset($_GET["categories"])){
            include_once "categories.php";
        }

        ?>
    </div>






    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
