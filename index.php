
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <LINK REL="SHORTCUT ICON" href="./img/favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php require_once('./templates/header.html') ?>
        <main>    
        <section class="flex">
            <div class="explain flex">
                <div class="introTitle">
                    <p>Bienvenue sur Adventure Of Heroes.</p>
                </div>
                <div class="introExplain">
                    <p>Nous avons créé une histoire qui se base sur les "livres dont vous êtes le héros". Il s'agit d'un livre moitié roman, moitié jeu dans lequel vous devenez le héros d'une aventure. A chaque page, vous avez à relever de nombreux défis, et les choix que vous faites vous mènent sur des chemins divers où vous avez toutes sortes de batailles à livrer. Pour nous, notre "site dont vous êtes le héros" fonctionne de maniere bi-linéaire avec toujours 2 choix par environnement. Il y a même une Hardway et une Softway, des chemins plus faciles mais moins rentables et d'autres plus dures mais davantage gratifiants. Chacun des environnements comporte un combat, qui se déroule sous forme de pierre, feuille, ciseau : 3 attaques vous sont alors proposées: Parade, Coup rapide et coup puissant.</p>
                    <div class="table">
                        <div class="sup">
                            <span class="attack">Riposte</span>
                            <span class="superior">></span>
                            <span class="attack">Coup rapide</span>       
                        </div>
                        
                        
                        <div class="sup">
                            <span class="attack">Coup rapide</span>
                            <span class="superior">></span>
                            <span class="attack">Coup puissant</span>
                        </div>

                        <div class="sup">
                            <span class="attack">Coup puissant</span>
                            <span class="superior">></span>
                            <span class="attack">Riposte</span>
                        </div>
                    </div>
                    <p>On a aussi incorporé un systeme de potion qui vous permettra de régénérer vos PV quand vous en avez besoin. De même il existe un systeme d'experience qui fait progresser le héros en level, votre force et vos PdV augmenteronT. Cependant certain monstres offrent davantage d'experience que d'autre mais seront plus difficiles à terasser.</p>
                </div>
                <div class="introGoodLuck">
                    <p>Bonne chance.</p>
                </div>
                <div class="btnPlay">
                    <a class="play" href="./register.php">Jouer</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>