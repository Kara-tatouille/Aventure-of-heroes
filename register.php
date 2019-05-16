<?php 
require('./controllers/getLastUser.php');
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <main>
        <section>
            <?php if(isset($_SESSION['name'])): ?>
                <a classs="disconnect" href="./controllers/disconnect.php">Me déconnecter</a>
                <p>Bienvenue <span><?= $_SESSION['name']; ?></span>, dans cette aventure pleine de rebondissement qu'est "BLABLA" ! </p>
                <p>Tu débutes la partie avec <span><?= $user['health']; ?></span> points de vie et une force d'attaque de <span><?= $user['attack'] ?></span></p>
                <p>Comme tu t'en doutes, tu débutes la partie avec... accroches toi bien... <span><?= $user['xp'] ?></span> points d'expérience. Mais je suis persuadé qu'un valeureux guerrier comme toi ne va pas en rester là !</p>
            <?php else: ?>
            <form action="./controllers/add.php" method="POST">
                <div>
                    <label for="pseudo">Veuillez choisir un pseudo :</label>
                    <input type="text" id='pseudo' name="name" required>
                    <span id="error"></span>
                </div>
                <div class="submitWrapper">
                    <input type="submit" id="submit" name="submit" value="S'inscrire">
                </div>
            </form>
            <?php endif; ?>
        </section>
    </main>

</body>
</html>