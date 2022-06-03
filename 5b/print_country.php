<?php
$result = $link_sql->query("SELECT * FROM `country_list`");         		//выполняется запрос в котором возвращаются все строки и столбцы
if(isset($result))
$row = mysqli_fetch_array($result);
{
	do 																			//построчно выводим все данные из таблицы на страницу
		{
			echo 	'<tr>
					  <th scope="row" class="col-1">'.$row['country_id'].'</th>
					  <td>'.$row['country_name'].'</td>
					</tr>';            
		}
	while($row = mysqli_fetch_array($result));
}
?>
