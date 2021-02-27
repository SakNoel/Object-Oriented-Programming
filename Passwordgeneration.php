<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Генератор паролей</title>
  <link rel="stylesheet" href="style.css"> 
 <script type="text/javascript">
        

        var elements = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    function readInt (){
    var number = document.getElementById("userAnswer").value;
    return parseInt(number);
    }

    function getRandomNumber(max){
        return Math.round(Math.random()*max);
    }

    function genPassword (elements){
            var userAnswer = readInt();
            var password = [];
            for (i = 0; i < userAnswer; i++){
                var n = getRandomNumber(elements.length - 1);
                password.push(elements[n]);
            }   
            
            function write(text){ 
              document.getElementById("info").innerHTML = text; 
            }
            
            write("Ваш пароль: " + password.join('') + "<br> При желании вы можете заново ввести длину для получения нового пароля.");    
    }


    function hide(id){
        document.getElementById(id).style.display = "none";
    }


  </script>
</head>
<body>

<div class="content">
  <?php include "menu.php"; ?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

            <h1>Генератор паролей</h1>

            <div class="box">

                <p id="info">Добро пожаловать! Введите длину пароля.</p>
                <input type="text" id="userAnswer">
                <br>
                <a href="#" onClick="genPassword(elements, userAnswer);" id="button">Сгенерировать пароль</a> 


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