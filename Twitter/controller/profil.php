<?php
$host = "localhost";
$dbname = "tweet_academie";
$username = "root";
$password = "root";

try {
    $dbconnect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

session_start(); // Demarre la session 

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $result = $dbconnect->query("SELECT * FROM users WHERE email = '$login' OR nickname = '$login'");
    $result = $result->fetch();

// RECUPERE LES INFOS

    $id = $result['id'];
    $nickname = $result['nickname'];
    echo "<h2>$nickname</h2>";
} else {
    echo "Pas de login";
}
?>
