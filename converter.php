<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Конвертер валют</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>

<div class="content">
	<?php include "menu.php"; ?>


			<h1>Конвертер валют</h1>


	<script type="text/javascript">

	
	document.write("Добро пожаловать в конвертер валют. <br> Данные актуальны на 22.12.2020 <br>");
	euro = 92.09;
	dollar = 75.73;
	var request = parseFloat (prompt("Выберите, какую валюту хотите расчитать: [1 - Доллар]. | [2 - Евро]."));

	// Для расчета долларов

	if (request == 1)
	{	var summDollar = parseFloat (prompt("Введите колличество долларов для расчета"));
		document.write(summDollar + " $ будет равен " + dollar*summDollar.toFixed(2) + " ₽. <br>");
	}


	// Для расчета евро

	else if (request == 2)
	{	var summEuro = prompt("Введите колличество евро для расчета");
		document.write(summEuro + " € будет равен " + euro*summEuro.toFixed(2) + " ₽. <br>");
	}


	// Прочее

	else 
	{
		Number.isInteger (request);
		document.write("Ошибка введите 1 или 2");

	
	}


</script>

</div>
<div class="footer">
Copyright &copy; • Sak Noel • <?php echo date ("Y");?>
<div>


</body>
</html>