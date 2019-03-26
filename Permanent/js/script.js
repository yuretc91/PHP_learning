$(function () {
	var main = $("main");
	var permanentBtn = $("#permanentBtn");
	var perm = '<?php require_once "permanent.php"; ?>'


	permanentBtn.click(function () {
		$.post("serv.php", {someData: permanentBtn.val()}, function (data) {
			main.html(data);
		});
	});



});








/*


var city = document.getElementById("city");
	var age = document.getElementById("age");
	var btn = document.getElementById("btn");
	var info = document.getElementById("info");
	var myXHR = new XMLHttpRequest();   //создаём запрос
	btn.onclick = function(){
		/!*myXHR.open("GET", "serv.php?someData1=" + city.value + "&someData2=" + age.value, true);*!/
		
		myXHR.open("POST", "serv.php", true);  //подготавливаем к отправке
		myXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  // пометка для метода POST
		//myXHR.send();
		myXHR.send("someData1=" + city.value + "&someData2=" + age.value); //отправляем 
	};


myXHR.onreadystatechange = function(){    //что делать с ответом сервера
	if(myXHR.readyState == 4 && myXHR.status == 200){  //проверка ответа от сервера
	   info.textContent = myXHR.response;  //ответ от сервера
	   }
};*/
