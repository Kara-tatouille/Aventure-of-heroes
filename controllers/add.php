<?php
session_start();

$_SESSION["name"] = $_POST["name"];
$health = 100;
$attack = 10;
$xp = 0;


$pdo = new PDO('mysql:host=localhost; dbname=RogueLike; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('INSERT INTO users (name, health, attack, xp) VALUES (:name, :health, :attack, :xp)');
$stmt->bindParam(':name', $_SESSION['name']);
$stmt->bindParam(':health', $health);
$stmt->bindParam(':attack', $attack);
$stmt->bindParam(':xp', $xp);


$stmt->execute();

header('Location: /register.php');