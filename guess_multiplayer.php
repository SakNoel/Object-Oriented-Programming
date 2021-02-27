
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Угадайка на двоих</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">

    var answer = parseInt(Math.random() * 100);
    tryCount = 0;
    var maxTryCount = 10;
    var playerNumber = 1;
 

    function readInt() {
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
            write("<b>Поздравляем, угадал игрок: </b>" + playerNumber);
            hide("button");
            hide("userAnswer");

        } else if(tryCount >= maxTryCount){
            write("Вы проиграли.<br>Правильный ответ: " + answer);
            hide("button");
            hide("userAnswer"); 
        } else if(userAnswer > answer){
            changeUser();
            write("Вы ввели слишком большое число. У вас на двоих осталось " + (maxTryCount - tryCount) + " попыток.<br>Очередь игрока: " + playerNumber + ". Введите число от 0 до 100");
        } else if(userAnswer < answer){
            changeUser();
            write("Вы ввели слишком маленькое число. У вас на двоих осталось " + (maxTryCount - tryCount) + " попыток.<br>Очередь игрока: " + playerNumber + ". Введите число от 0 до 100");
    }
} 

function changeUser() {
 
    if (playerNumber == 1) {
        playerNumber = 2;
    } else {
        playerNumber = 1;
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

        <h1>Игра угадайка для двоих игроков</h1>

        <div class="box">

            <p id="info1">Добро пожаловать в игру, уважаемые игроки! На всю игру вам дается 10 попыток. Желаем удачи:)</p>
            <p id="info">Игрок 1, ваша очередь. Угадайте число от 0 до 100.</p>
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
</div>

</body>
</html>