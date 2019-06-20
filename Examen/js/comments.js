$(function () {
    let commentsBlock = $('.commentsBlock');
    let sendButton = $('#sendButton');
    let message = $('#message');
    let userName = $('#name');
    let userEmail = $('#email');
    let commentDate = $.now();

    sendButton.click(function () {
        //console.log(userName);
        //commentsBlock.append($("<h3>" + userName + "</h3><p>" + message + "</p><p><i>" + commentDate + "</i></p>"));
        $.ajax({
            url: "comments.php",
            type: "POST",
            dataType: 'json',
            data: {
                send: true,
                message: message.val(),
                userName: userName.val(),
                userEmail: userEmail.val()
            }
        }).done(function (response) {
            console.log(true);
            commentsBlock.append($("<h3>" + userName.val() + "</h3><p>" + message.val() + "</p><p><i>" + commentDate + "</i></p>"));

        });

    });
});