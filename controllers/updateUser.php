<?php
session_start();
$currentUser=$_SESSION['name'];
$pdo = new PDO('mysql:host=localhost; dbname=RogueLike; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare("UPDATE users SET name = '$currentUser' WHERE id=1");
$stmt->execute();
$stmt = $pdo->prepare('DELETE FROM users WHERE id!=1');
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
header('Location: /credits.php');
