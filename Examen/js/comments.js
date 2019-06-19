$(function () {
	var cartList = $('.cartList');
	var checkProduct = $('.checkProduct');
	var openCart = $('#openCart');
	var cart = $('.cart');
	var minus = $('.minus');
	var plus = $('.plus');


    minus.each(function () {
        $(this).click(function () {
            let value = Number($(this).siblings(".quantityCount").val()) - 1;

            $(this).siblings(".quantityCount").val(value);
            //console.log($(this).siblings(".quantityCount").val());
        });
    });
    plus.each(function () {
        $(this).click(function () {
            let value = Number($(this).siblings(".quantityCount").val()) + 1;

            $(this).siblings(".quantityCount").val(value);
            //console.log($(this).siblings(".quantityCount").val());
        });

    });

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
                    cartList.append($("<tr class='oneProduct'><td>" + response[i]['name'] + "</td><td>" + response[i]['description'] + "</td><td>" + response[i]['cathegory_id'] + "</td><td>" + response[i]['quantityCounter'] +"</td><td><button class='deleteProduct' value='" + response[i]['id'] + "'>Delete</button></td></tr>"));
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
        }
        cart.toggleClass("cartActive");
    });


    checkProduct.each(function () {
        $(this).on('click', function () {

            //var productsId = [];
            //var productsQuantity = [];
            //productsId.push($(this).val());
            var productsId = $(this).val();
            //productsQuantity.push($(this).parents().siblings(".quantity").children(".quantityCount").val());
            var productsQuantity = $(this).parents().siblings(".quantity").children(".quantityCount").val()
            console.log(productsQuantity);
            $.ajax({
                url: "cart.php",
                type: "POST",
                dataType: 'json',
                data: {
                    productsId: productsId,
                    productsQuantity: productsQuantity
                }
            })

		});
	});


});
