<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Страничка добавления и просмотра студентов</title>
<script>
	function showContent(link) {
		var cont = document.getElementById ('contentBody');
		var loading = document.getElementById ('loading');
		var http = createRequestObject();
		if( http ) {
			http.open('get', link);	
			http.onreadystatechange = function () {	
			if(http.readyState == 4) {
                                    cont.innerHTML = http.responseText;	
				}
			}
			http.send(null);
		} else {
			document.location = link;	
		}
	}
	function createRequestObject() {
		try { return new XMLHttpRequest() }
		catch(e) {
			try { return new ActiveXObject('Msxml2.XMLHTTP') }
			catch(e) {
				try { return new ActiveXObject('Microsoft.XMLHTTP') }
				catch(e) { return null; }
			}
		}
	}
</script>
</head>
<body>
<section>
<form action="StList.php" method="post" id="add_stude">
	<h4>Форма: "Добавить студента?"</h4>
	<input type="text" name="name" placeholder="Имя студента"><br>
	<input type="text" name="surname" placeholder="Фамилия"><br>
	<input type="text" name="birth" placeholder="Дата рождения"><br>
	<input type="text" name="mail" placeholder="Электронная почта"><br>
	<input type="text" name="gruppa" placeholder="Учебная группа"><br><br>
	<input type="hidden" name="aipi" value='<?php print("$_SERVER[HTTP_X_REAL_IP]");?>'>
	<button id="sub">Записать в базу</button><span id="result">  </span><br>
</form><br>
</section>
<section id="list">
<form>
	<input onclick="showContent('ball.php')" type="button" value="Показать обновленный список студентов?(фильтр по среднему баллу)"> 
</form>
<form>
	<input onclick="showContent('family.php')" type="button" value="Показать обновленный список студентов?(фильтр по фамилии)"> 
</form>
<form>
	<input onclick="showContent('group.php')" type="button" value="Показать обновленный список студентов?(фильтр по группе)"> 
</form>
<form>
	<input onclick="showContent('semestr.php')" type="button" value="Показать обновленный список студентов?(фильтр по семестру)"> 
</form>
<h4 style="padding-top: 1%;">"Список студентов"</h4>
	<div id="contentBody"></div>
<h5>Специальные фильтры</h5>
<form>
	<input onclick="showContent('Pick1.php')" type="button" value="Выборка однокурсников со средним баллом от ..2 до ..3 и именем ...Чебурашка"> 
</form>
<form>
	<input onclick="showContent('Pick2.php')" type="button" value="Выборка всех людей, c IP которых произошло более одной регистрации, и при этом хотя бы у одного из них должна быть написана характеристика научного руководителя"> 
</form>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
<script src="mine.js" type="text/javascript"></script>
</body>
</html>