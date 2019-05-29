$(function () {
	var cathegory = $(".cathegory");
	var content = $('.content');



	cathegory.each(function () {
		$(this).on('click', function () {


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
					data: {
						cathegoryId: cathegoryValues
					}
				}).done(function (response) {
					content.html(response);
				});
			}






		});
	});

});
