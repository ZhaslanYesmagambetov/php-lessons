<?php 
	$Books = array(
		"451° по Фаренгейту",
		"Шантарам",
		"1984",
		"Мастер и Маргарита",
		"Три товарища",
		"Портрет Дориана Грея",
		"Вино из одуванчиков",
		"Цветы для Элджернона",
		"Над пропастью во ржи",
		"Маленький принц",
		"Анна Каренина",
		"Сто лет одиночества",
		"Тень горы",
		"Атлант расправил плечи",
	);
	echo "<strong>My favourite books:</strong> <br>";
	echo "<ol>";
	for ($i = 0; $i < count($Books); $i++) {
		echo "<li> $Books[$i] </li>";
	}
	echo "</ol>";
 ?>