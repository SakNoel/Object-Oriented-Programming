<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Игра угадайка</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			tryCount++;

			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100");				
			}
		}

	</script>
</head>
<body>

<div class="content">
	<?php include "menu.php"; ?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
Copyright &copy; • Sak Noel • <?php echo date ("Y");?>
<div>


</body>
</html>