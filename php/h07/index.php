<?php
session_start();

if (isset($_SESSION["username"])) {
    if ($_SESSION["username"] == "Bram" ) {
        echo "<h1>yooo, lzsnation</h1>";
        echo "<img src='Img/baguette.png'>";
    }
    else {
        echo "<h1>Login SUCCESFUL, WELKOM YOU SON OF a legend" . $_SESSION["username"] . "</h1>";
    }
}
else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Broodje Website</title>
    <style>
        img {
            position: absolute;
            height: 200px;
            width: 200px;
            left: 46%;
            right: 46%;
        }
    </style>
</head>
<body>
<p><a href="admin.php">Ga naar de Admin page</a></p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
