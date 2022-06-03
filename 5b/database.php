<?php
require "db_config.php";
//соединение с бд
$link_sql = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
//проверка оединения
if (!$link_sql) die ('Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error());
//Создание таблицы country_list если ее нет
$sql_create = "CREATE TABLE IF NOT EXISTS `country_list` (  																	
  `country_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `country_name` varchar(255) NOT NULL 
);";
//выполнение запроса
$link_sql->query($sql_create);
?>
