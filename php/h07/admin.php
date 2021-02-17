<?php
session_start();

if (isset($_SESSION["username"])) {
    if ($_SESSION["username"] == "admin" ) {
        echo "<h1>Gij bent een Admin Mr. ".$_SESSION["username"]."</h1>";
    }
    else if ($_SESSION["username"] == "Bram") {
        echo "<h1>Gij bent een Broodje geen Admin Mr. Broodje ".$_SESSION["username"]."</h1>";
    }
    else {
        echo "<h1>Sorry maar je hebt geen toegang hiervoor Mr. " . $_SESSION["username"] . "</h1>";
    }
}
else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Site</title>
</head>
<body>
<p><a href="index.php">Ga terug</a></p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
