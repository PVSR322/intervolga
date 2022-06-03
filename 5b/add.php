<?php
$name = $link_sql->real_escape_string(trim($_POST['data_country'])); 												//убираю лишние пробелы и экранирую данные
$sql_add = $link_sql->prepare('INSERT INTO `country_list` (`country_name`) VALUES (?)'); 							//подготовка запроса с псевдпеременной '?'
$sql_add->bind_param('s', $name);																					//привязка переменных к параметрам запроса
		if ($sql_add->execute()) 																					//выполнение подготовленного запроса 													
			echo "<script>alert('Страна успешно добавлена)</script>";
		else 
			echo 'Что-то пошло не так<br>';
	$sql_add->close();																								//закрываем запрос

?>
