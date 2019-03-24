<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$cards = [
    0 => [
        "title" => "Card title 1",
        "img" => "https://www.newdigitalmarketing.co.uk/wp-content/uploads/image2.jpg",
        "content" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "btn" => "Go somewhere"
    ],
    1 => [
        "title" => "Card title 2",
        "img" => "https://www.newdigitalmarketing.co.uk/wp-content/uploads/image2.jpg",
        "content" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "btn" => "Go somewhere"
    ],
    2 => [
        "title" => "Card title 3",
        "img" => "https://www.newdigitalmarketing.co.uk/wp-content/uploads/image2.jpg",
        "content" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "btn" => "Go somewhere"
    ],
    3 => [
        "title" => "Card title 4",
        "img" => "https://www.newdigitalmarketing.co.uk/wp-content/uploads/image2.jpg",
        "content" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "btn" => "Go somewhere"
    ],
    4 => [
        "title" => "Card title 5",
        "img" => "https://www.newdigitalmarketing.co.uk/wp-content/uploads/image2.jpg",
        "content" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "btn" => "Go somewhere"
    ]
];
?>
<div class="container">
    <div class="row">
        <?php
foreach ($cards as $card){?>

<div class="col-lg-6">
    <div class="card">
        <img src="<?= $card["img"] ?>" class="card-img-top" alt="blabla">
        <div class="card-body">
            <h5 class="card-title"><?= $card["title"] ?></h5>
            <p class="card-text"><?= $card["content"] ?></p>
            <a href="#" class="btn btn-primary"><?= $card["btn"] ?></a>
        </div>
    </div>
</div>

<?php
}

?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

