$(function () {
	var buyFromCart = $(".buyFromCart");
	var cartList = $('.cartList');
	var checkProduct = $('.checkProduct');
	var openCart = $('#openCart');
	var cart = $('.cart');


    openCart.click(function () {
        if (!openCart.hasClass("cartActive")) {
            $.ajax({
                url: "cart.php",
                type: "POST",
                dataType: 'json',
                data: {
                    openCart: true
                }
            }).done(function (response) {
                cartList.empty();
                for(let i = 0;i < response.length;i++){
                    cartList.append($("<tr class='oneProduct'><td>" + response[i]['name'] + "</td><td>" + response[i]['description'] + "</td><td>" + response[i]['cathegory_id'] + "</td><td><button class='deleteProduct' value='" + response[i]['id'] + "'>Delete</button></td></tr>"));
                }
                $('.deleteProduct').each(function () {
                    $(this).on('click', function () {
                        $.ajax({
                            url: "cart.php",
                            type: "POST",
                            dataType: 'json',
                            data: {
                                deletedProductId: $(this).val()
                            }
                        });
                        $(this).parent().parent().remove();
                    });
                });
                });
            };
        cart.toggleClass("cartActive");
    });

    checkProduct.each(function () {
        $(this).on('click', function () {

            var productsId = [];
            productsId.push($(this).val());

            $.ajax({
                url: "cart.php",
                type: "POST",
                dataType: 'json',
                data: {
                    productsId: productsId
                }
            })

            //console.log(productsId);

		});
	});


    /*buyFromCart.click(function () {
        var productsInCart = $('.oneProduct');
        if ()
    });*/

});
