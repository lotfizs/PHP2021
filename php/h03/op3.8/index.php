<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kapperszaak Sanders</title>
    <style>
        body {
            font-size: 30px;
        }
    </style>
</head>
<body>
<?php
$tijdstip["09.15"] = "Mevr. Pietersen";
$tijdstip["09.30"] = "Mevr. Willems";
$tijdstip["09.45"] = "";
$tijdstip["10.00"] = "Paul van den Broek";
$tijdstip["10.15"] = "Karel de Meeuw";
$tijdstip["10.30"] = "";


print("Deze tijdstippen zijn nog beschikbaar:<ul>");
foreach($tijdstip as $tijd => $klanten ) {
    if($klanten == "") {
        print("<li>".$tijd."</li>") ;
    }
}

print("</ul>");
?>


</body>
</html>
