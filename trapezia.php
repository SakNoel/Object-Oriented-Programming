<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Подсчет площади трапеции</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>

<div class="content">
	<?php include "menu.php"; ?>


			<h1>Подсчет площади трапеции</h1>


<script type="text/javascript">

	
	document.write("Добро пожаловать в программу для расчета площади трапеции. <br>");
	var a = parseInt(prompt("Введите длинну А основания трапеции"));
	var b = parseInt(prompt("Введите длинну B основания трапеции"));
	var h = parseInt (prompt("Введите высоту тропеции"));
	var S = ((a + b) / 2) * h;
	document.write("Площадь трапеции будет равна " + S);


</script>

</div>
<div class="footer">
Copyright &copy; • Sak Noel • <?php echo date ("Y");?>
<div>


</body>
</html>