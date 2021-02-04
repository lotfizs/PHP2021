<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kerstboom</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i = 0; $i <20; $i++) {
    for ($b = 0; $b<$i; $b++) {
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</html>
