<?php
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Foto's For loop</title>
    </head>
    <body>
    <style>
        img {
            height: 100px;
            width: 100px;
        }
    </style>
<?php

 for ($i = 1; $i<=9 ;$i++){
      echo "<img src='img/aap".$i.".jpg'>";
 }
?>
    </body>
</html>