<?php 
require('./controllers/getLastUser.php');
require('./controllers/getLastBoss.php');
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <LINK REL="SHORTCUT ICON" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <?php require_once('./templates/header.html') ?>    
    <main>
        <section class="registerSection">
            <?php if(isset($_SESSION['name'])): ?>
            <div class="buttonDeco">    
                <a class="disconnect" href="./controllers/disconnect.php">Déconnexion</a>
            </div>
                <h1 class="welcome">Bienvenu <span class="welcome"><?= $_SESSION['name']; ?></span></h1>                   
                <p class="introText">Dans Adventure of Heroes tu débutes la partie avec <span class="introText"><?= $user['health']; ?></span> points de vie et  <span class="introText"><?= $user['attack'] ?></span> points d'attaque.</p>
                <p class="introText">Tu commences évidement l'aventure avec <span class="introText"><?= $user['xp'] ?></span> points d'expériences.</p>
            <div class="buttonStart">
                <a class="start" href="./start.php">Commencer</a>
            </div>
            <?php else: ?>
            <form action="./controllers/add.php" method="POST" autocomplete="off">
                <div class="pseudoPlace">
                    <input class="pseudoWritting" placeholder="Pseudo" type="text" name="name" required>
                </div>
                <div class="submitWrapper">
                    <input class="connection"  type="submit" value="Connexion">
                </div>
            </form>
            
            <?php endif; ?>
        </section>
    </main>
</body>
</html>