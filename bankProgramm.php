<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Банковская программа</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>

<div class="content">
	<?php include "menu.php"; ?>


			<h1>Банковская программа</h1>


	<script type="text/javascript">

	var enter = prompt("Выберите, какую валюту хотите расчитать: [Доллар]. | [Евро]. | [Рубли]"); //переменная выьора валюты
	var convertenter = enter.toLowerCase(); // перевод ввдененных данных в нижний регистр
	var euro = 92.09; // Евро
	var dollar = 75.73;// Доллар
	var ruble = money;// рубль
	
	//Рубли
	if (convertenter == "рубли" || convertenter == "рубль")
	{

		var money = +prompt('Введите сумму вклада', '');
		var percent = 1 + +prompt('Введите годовой процент', '')/ 100;
		var years = ['год','два года', 'три года','четыре года','пять лет'];
		for (var year = 0; year < 5; year++)
	    {
	    		money = (money * percent);
		document.write('Через ' + years [year] + ' на вашем счету будет - ' + money.toFixed(2) + "<br>")	
	  	
    }
	}


	// Для расчета долларов


		else if (convertenter == "dollar" || convertenter == "доллар" || convertenter == "доллары")
	{
		var money = dollar * +prompt('Введите сумму вклада', '');
		var percent = 1 + +prompt('Введите годовой процент', '')/ 100;
		var years = ['год','два года', 'три года','четыре года','пять лет'];
		for (var year = 0; year < 5; year++)
	    {
	    money = (money * percent);
	    document.write('Через ' + years [year] + ' на вашем счету будет - ' + money.toFixed(2) + "<br>")
    	}
	}

	// Для расчета евро

		else if (convertenter == "euro" || convertenter == "евро")
	{	
		var money = euro * +prompt('Введите сумму вклада', '');
		var percent = 1 + +prompt('Введите годовой процент', '')/ 100;
		var years = ['год','два года', 'три года','четыре года','пять лет'];
		for (var year = 0; year < 5; year++)
	    {
	    money = (money * percent);
	    document.write('Через ' + years [year] + ' на вашем счету будет - ' + money.toFixed(2) + "<br>" )
    }
	}

	else
	{	if (isNaN (money))
		convertenter = prompt("Ошибка, попробуйте еще раз");
	}





</script>

</div>
<div class="footer">
Copyright &copy; • Sak Noel • <?php echo date ("Y");?>
<div>


</body>
</html>