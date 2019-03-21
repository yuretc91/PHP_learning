<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul class="nav">
    <?php
    $navCount = 3;
    $count = 1;
    while($count <= $navCount){?>
    <li class="nav-item">
        <a class="nav-link active" href="?page=<?php echo $count;?>">Active</a>
    </li>
    <?php
     $count++;
    }


?>


    <!--<li class="nav-item">
        <a class="nav-link active" href="?page=1">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=2">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=3">Link</a>
    </li>-->
</ul>
</body>
</html>