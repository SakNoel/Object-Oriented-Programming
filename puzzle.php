<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Игра в загадки</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>
	
<div class="content">
<?php include "menu.php"; ?>
<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php
				if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])) {
					//1 загадка
					$userAnswer = $_GET["userAnswer1"];
					$score = 0;
					$userAnswer = mb_strtolower($userAnswer); // приводим введенные данние в нижний регистр
						if ($userAnswer == "календарь" || $userAnswer == "calendar"){
						$score++;
					}
					//2 загадка
					$userAnswer = $_GET["userAnswer2"];
						if ($userAnswer == "сапоги" || $userAnswer == "кросовки" || $userAnswer == "ботинки"){
						$score++;
					}
					//3 загадка
					$userAnswer = $_GET["userAnswer3"];
						if ($userAnswer == "магнитофон" || $userAnswer == "диктофон"){
						$score++;
					}

					echo "Вы угадали " . $score. " загадок";
					}
				 ?>


				<form method="GET">
					<p>На раскрашенных страницах много праздников хранится.</p>
					<input type="text" name ="userAnswer1">

					<p>Пустые отдыхаем, а полные шагаем</p>
					<input type="text" name="userAnswer2">

					<p>Нет ушей, а слышит, нету рук, а пишет</p>
					<input type="text" name ="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

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