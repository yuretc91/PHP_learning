
$(function () {
	/*var login = $("#login");


	btn.click(function () {
		if(login.val() == ""){
			errLog.removeClass("inActive")
			setTimeout(function(){errLog.addClass("inActive")}, 2000);
		} else login.val("");
		if(pass.val() == ""){
			errPass.removeClass("inActive");
			setTimeout(function(){errPass.addClass("inActive")}, 2000);
		} else pass.val("");

	});*/

	var personName = $("#name");
	personName.onkeyup(function(eventObject){
		alert('Клавиша клавиатуры возвратилась в ненажатое состояние. Код символа на этой клавише - ');
	});
	console.log(personName.val());
});




