$(function () {
	var cathegory = $(".cathegory");
	var content = $('.content');



	cathegory.each(function () {
		$(this).on('click', function () {
			content.empty();


			var cathegoryValues = [];
			var checkedCathegory = $(".cathegory:checked");

			if (checkedCathegory.length > 0){
				checkedCathegory.each(function(){
					cathegoryValues.push($(this).val());
				});

				console.log(cathegoryValues);
				$.ajax({
					url: "serv.php",
					type: "POST",
					dataType: 'json',
					data: {
						cathegoryId: cathegoryValues
					}
				}).done(function (response) {
					console.log(response);
					var items = response;
					/*items.each(function (){
                        content.appendChild($("<p></p>").text($(this)));
					});*/
					for(let i = 0;i < response.length;i++){
                        content.append($("<p></p>").text(response[i]['item_name']));
                        content.append($("<a href='#'></a>").text(response[i]['id']));
					}

					//content.html(response);
				});
			}






		});
	});

});
