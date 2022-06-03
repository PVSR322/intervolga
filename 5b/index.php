<?php
require "database.php";
if (isset($_POST['data_country'])) require "add.php";
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Интерфейс добавления страны в таблицу</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--скрипт проверяющий заполнение полей формы-->
        <script src="assets/main.js" type="text/javascript"></script>
	</head>
		<body>
			<div class="container p-2 mt-3">
				<table class="table table-striped">
					<thead>
						<tr>
						    <th scope="col">№</th>
						    <th scope="col">Name</th>
    					</tr>
					</thead>
					<tbody>	
						<?php require "print_country.php"; ?>
					</tbody>
				</table>
                <!--При отправки формы вызывается функция js-->
                <form action="/" method="POST" name="input_country" onsubmit="return validate_form ( );">
                    <b>Введите страну:</b>
                    <br>
                    <input class="form-control" type="text" name="data_country" >
                    <br>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
			 </div>
		</body>
</html>
