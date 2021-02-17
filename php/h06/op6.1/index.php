<?php

// Variabelen
$user = "scholenuser";
$pass = "root";

// Ophalen uit database PHP
try {
    $dbh = new PDO ('mysql:host=localhost;dbname=scholen;port=3306', $user, $pass);
    foreach ($dbh -> query('SELECT * FROM cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print ("Error!: ".$e -> getMessage(). "<br>");
    die();
}
