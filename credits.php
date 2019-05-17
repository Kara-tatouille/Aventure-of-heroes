<?php
session_start();
include('./controllers/getLastBoss.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Credits</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body id="backgroundCredit">
    <main>
        <section>
             <div>
                <p>Félicitations, après avoir parcouru toutes sortes de monstres et divers paysages vous venez de prendre la place .... de votre père!</p>
                <p>Qui l'eut cru ?</p>
                <p>Corentin Richard-Vitton</p>
                <p>Wesley Klein</p>
                <p>Jérôme Moulin</p>
                <p>Thibaut Surrel</p>
                <div class="buttonRestart">
                    <a class="restart" href="./controllers/disconnect.php">Recommencer</a>
                </div>
             </div>
        </section>
    </main>    
</body>
</html>