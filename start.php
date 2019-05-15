<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu</title>
</head>
<body>
    <?php require_once('./templates/header.html') ?>
    <main>
        <section>
            <div class="skills">
                <div class="health"></div>
                <div class="attack"></div>
                <div class="xp"></div>
            </div>
            <div id="test">
                <div id="newDialog">
<!-- Intro -->                    
                    <p class="text">Élevée par votre mère depuis votre naissance elle vous raconte depuis toujours que votre père est parti combattre le mal qui règne encore à ce jour sur la région.</p>
                    <p class="text"> Jamais revenu, votre père est probablement mort.</p>
                    <p class="text">De ce fait, vous vous êtes entrainé au maniement d'épée.</p>
                    <p class="text">Vous venez récemment d'avoir 20 ans et aujourd'hui il est grand temps de partir venger votre père.</p>
                    <p class="text">Votre aventure commence à la taverne du Géant endormi.</p>
                </div>
            </div>
            <button id="button"> top</button>
        </section>
    </main>
<script src="./js/dialogue.js"></script>
</body>
</html>