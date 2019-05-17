
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <LINK REL="SHORTCUT ICON" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php require_once('./templates/header.html') ?>
        <main>    
        <section>
            <div class="explain">
            <p>Bienvenue sur Adventure Of Heroes.</p>
            <p>Nous avons créé une histoire qui se base sur les "livres dont vous êtes le héros". <br>
            Il s'agit d'un livre moitié roman, moitié jeu dans lequel
            vous devenez le héros d'une aventure.</p>
            <p>A chaque page, vous avez à relever de nombreux défis,
             et les choix que vous faites vous mènent sur des chemins divers
            où vous avez toutes sortes de batailles à livrer.</p>
            <p>Pour nous, notre "site dont vous êtes le héros" fonctionne de maniere bi-linéaire
            avec toujours 2 choix par environnement. Il y a même une Hardway et une Softway,
            des chemins plus faciles mais moins rentables et d'autres plus dures mais davantage gratifiants.</p>
            <p>Chacun des environnements comporte un combat, qui se déroule sous forme de pierre, feuille, ciseau :</p>
            <p>3 attaques vous sont alors proposées: Parade, Coup rapide et coup puissant.</p>
            <div class="coups">
                <div class="sup">
                    <p class="attack">Riposte</p>
                    <p class="superior">></p>
                    <p class="attack">Coup rapide</p>       
                </div>
                
                
                <div class="sup">
                    <p class="attack">Coup rapide</p>
                    <p class="superior">></p>
                    <p class="attack">Coup puissant</p>
                </div>

                <div class="sup">
                    <p class="attack">Coup puissant</p>
                    <p class="superior">></p>
                    <p class="attack">Riposte</p>
                </div>
            </div>
            <p>On a aussi incorporé un systeme de potion qui vous permettra de régénérer vos PdV quand vous en avez besoin.</p>
            <p>De même il existe un systeme d'experience qui fait progresser le héros en level, votre force et vos PdV augmenteronT.</p>
            <p>Cependant certain monstres offrent davantage d'experience que d'autre mais seront plus difficiles à terasser.</p>
            <p>Bonne chance.</p>
            </div>
        </section>
        <div>
            <a class="play" href="./register.php">Jouer</a>
        </div>
    </main>
</body>
</html>