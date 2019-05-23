<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="jquery.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div id="wrap">
    <label for="name">Введите имя пользователя</label>
    <input type="text" id="name">
    <button id="submit">Создать</button>
</div>
<div id="msg"></div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis, deleniti deserunt doloribus eius explicabo hic illo, mollitia natus pariatur quae, repellendus reprehenderit sed sunt tempora velit voluptatum. Fugit, nobis?
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#submit').on('click', function() {
           var name = $('#name').val();

           $.ajax({
               url:'action.php',
               type: 'POST',
               data: {
                   name:name
               }
           }).done(function(response){
               $('#msg').html(response);
               $('#wrap').hide();
           });
        })
    });
</script>
</body>
</html>