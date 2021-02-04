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
$bomen = array("boom1","boom2","boom3","boom4","boom5","boom6","boom7","boom8","boom9");

foreach ($bomen as $boom) {
    echo "<img src='img/bomen/".$boom.".jpg'>";
}
?>
    </body>
</html>