<?php
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение.
*/
define('SITE_NAME', 'Мой сайт');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Проверьте, существует ли константа, которую Вы хотите использовать.
	- Выведите значение созданной константы.
	ЗАДАНИЕ 3
	- Используя предопределённые в ядре константы выведите текущую версию PHP.
	- Используя магические константы выведите директорию скрипта.
	*/
	if (defined('SITE_NAME')) {
		echo "<p>Название сайта: " . SITE_NAME . "</p>";
	} else {
		echo "<p>Константа SITE_NAME не определена</p>";
	}

	echo "<p>Текущая версия PHP: " . PHP_VERSION . "</p>";
	echo "<p>Директория скрипта: " . __DIR__ . "</p>";
	?>
</body>
</html>