$(function () {
	var addToCart = $(".addToCart");
	var cartList = $('.cartList');
	var checkProduct = $('.checkProduct');



    checkProduct.each(function () {
        $(this).on('click', function () {
			//cartList.empty();


			var productsId = [];
			var checkedProducts = $(".checkProduct:checked");

			if (checkedProducts.length > 0){
				checkedProducts.each(function(){
                    productsId.push($(this).val());
				});

				console.log(productsId);
				$.ajax({
					url: "cart.php",
					type: "POST",
					dataType: 'json',
					data: {
                        productsId: productsId
					}
				}).done(function (response) {
					console.log(response);
					//var products = response;

					for(let i = 0;i < response.length;i++){
						cartList.append($("<tr></tr>"));
						var cartListRow = $('.cartList tr');
                        cartListRow.append($("<td></td>").text(response[i]['name']));
                        cartList.append($("<td></td>").text(response[i]['description']));
                        cartList.append($("<td></td>").text(response[i]['cathegory_id']));
					}

					//content.html(response);
				});
			}






		});
	});

});
