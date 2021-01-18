<!DOCTYPE HTML>
<html>
  <head>
    <!-- Тег meta для указания кодировки -->
    <meta charset="utf-8">
  </head>
  <body>
    <p>Начало документа...</p>
      <script>
       var count = 1;
    function setColor(btn) {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#FF0000"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#ffff00"
            count = 0;
        }
    }
      </script>
	  <input type="button" style="background-color:red" id="button" value = "Получить больше информации" style= "color:white" onclick="setColor('button',)";/>
    <p>...Конец документа</p>
  </body>
</html>
