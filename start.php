<?php
    include 'controllers/fights.php';
    include 'controllers/getLastBoss.php';
    include 'controllers/getLastUser.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <img src="./img/logo.png" alt="gamelogo">
</header>
<main>
    <section class="flex">
    <div class="skills">
        <div id="health" class="navHhealth">100/100 PV</div>
        <div id="attack" class="navAttack">30 ATK</div>
        <div id="xp" class="navXp">0 XP</div>
        <div id="potion" class="navPotion">2/2 P</div>
    </div>
        <div id="story">
            <div id="intro">
                <!-- Intro -->
                <p>Élevé par votre mère depuis votre naissance, elle vous raconte depuis toujours que votre père est parti combattre le mal qui règne encore à ce jour sur la région.</p>
                <p>Jamais revenu, votre père est probablement mort.</p>
                <p>De ce fait, vous vous êtes entrainé au maniement d'épée.</p>
                <p>Vous venez récemment d'avoir 20 ans et aujourd'hui il est grand temps de partir venger votre père.</p>

                <button id="btnStart">Commencer l'aventure</button>
            </div>

            <div id="tavern" class="noDisplay">
                <h4 class="anim1">Votre aventure commence à la taverne du Géant endormi.</h4>
                <p class="anim2">A votre table, vous essayez d'élaborer un plan d'action, un première direction à prendre mais à force de vous agacer et de grommeler vous échappez votre épée qui tombe au sol. Vous la ramassez et en vous relevant, un vieil homme çe tien à votre table.</p>
                <p class="anim3">Il a remmarqué que vous étiez un aventurier et vous demande ce pour quoi vous faites tant de rafus. Vous lui raconté donc votre histoire. L'homme, touché de ce récit çe permet de vous aider mais son âge certain ne lui permet pas de ce souvenir du chemin exact jusqu'au mal qui gourverne ce royaume. Il vous evoque la possibilité d'explorer les zones alentour afin de debuter votre périple en quête de revanche.</p>
                <div class="button anim4">
                    <button id="btnForest">Foret</button>
                    <button id="btnPlain">Plaine</button>
                </div>
            </div>

            <div id="forest" class="noDisplay">
                <!-- Foret -->
                <div>
                    <h4>Vous arrivez dans la forêt de Shlipak.</h4>
                    <p>Aux sorties du village, vous entrez dans la forêt de Shlipak mais des bandits ont entendu votre conversation avec le vieil homme de la taverne et se sont tapis dans la forêt afin de vous tendre une embuscade.</p>
                    <div class="btnFight">
                        <button id="fightForest">Combattre !</button>
                        <?php getFight("bandit", "Un bandit vous attaque!"); ?>

                    </div>
                </div>
                <div class="noDisplay" id="continuedbandit">
                    <p>Vaincu, le corps des bandits sont allongés sur le sol. Vous inspectez scrupuleusement la forêt et remarquez une pancarte qui vous indique le port de Carmin-sur-Mer. Aussi, un rouleau semble depasser d'un des sacs des bandits cela semble ressembl à une carte.</p>
                    <div class="button">
                        <button id="btnCaveFromForest">Suivre la carte</button>
                        <button id="btnHarborFromForest">Port de Carmin-sur-Mer</button>
                    </div>
                </div>
            </div>

            <div id="plains" class="noDisplay">
                <!-- Plaine -->
                <h4>Vous arrivez dans les plaines de Cania.</h4>
                <p>Peut après êtres sortie du village vous vous faite attaquer par des loups.</p>
                <div class="btnFight">
                    <button id="fightPlains">Combattre !</button>
                    <?php getFight("wolf", "un Loup des plaines vous attaque!"); ?>
                </div>
                <div class="noDisplay"  id="continuedwolf">
                    <p>Après ce combat durement reussi contre des loups exceptionnellement BALEZES, vous prenez le temps d'inspecter les environs et vous remarquez une pancarte qui vous indique la direction du port de Carmin-sur-Mer. Mais vous distinguez non loin de vous un interstice entre deux rochers.</p>
                    <div class="button">
                        <button id="btnCaveFromPlains">Interstice entre deux rochers</button>
                        <button id="btnHarborFromPlains">Port de Carmin-sur-mer</button>
                    </div>
                </div>
            </div>

            <div id="cave" class="noDisplay">
                <!-- Passage Secret -->
                <h4>Vous arrivez au Tram des profondeurs.</h4>
                <p>Vous avez reussi à trouver l'entrée d'un ancien reseau de Tram construit par des gnomes il y a fort longtemp. Aujourd'hui, seule des gobelins malagauches vivent dans ces souterrain. Dailleurs, ils vous attaque!!</p>
                <div class="btnFight">
                    <button id="fightCave">Combattre !</button>
                    <?php getFight("goblin", "Un goblin vous attaque!"); ?>



                </div>
                <div class="noDisplay" id="continuedgoblin">
                    <p>Vous avez terrassé cet incroyable petite horde de gobelins mais vous sentez que quelque chose d'incroyablement plus puissant vous épis, tapie dans l'ombre. Vous continuez votre chemin jusqu'à un endroit où il se divise en deux, mais à ce même emplacement vous apercevez une menace beaucoup plus grande. Le Roi des Gobelins bloque le passage et il a une otage. Il vous défie! S'il gagne vous devenez son esclave. Mais si vous gagnez, vous liberez l'otage et aurait la possibilité de passer.</p>
                    <div class="btnFight">
                        <button id="fightCaveBoss">Combattre !</button>
                        <?php getFight("goblinBoss", "Le roi des goblins vous attaque!"); ?>

                    </div>
                </div>

                <div class="noDisplay"  id="continuedgoblinBoss">
                    <p>Vous avez défait le Roi des Gobelins. L'otage est libre ! Elle vous est grandement reconnaissante. Pour vous remercier, elle vous laisse pratiquer le GitPull/GitPush avec elle.</p>

                    <p>Ceci fait, vous reprenez votre aventure. Deux chemin se sépare, leur destination est gravée sur les parois.</p>
                    <div class="button">
                        <button id="btnJungleFromCave">La jungle</button>
                        <button id="btnSwampFromCave">Le marais</button>
                    </div>
                </div>
            </div>

            <div id="harbor" class="noDisplay">
                <!-- Port -->
                <h4>Vous arrivez au port de Carmin-sur-Mer.</h4>
                <p>En arrivant sur la place centrale du port, vous remarquez une serveuse qui vous aguiche au loin mais des marins fort bourrés s'en prennent à vous.</p>
                <div class="btnFight">
                    <button id="fightHarbor">Combattre !</button>
                    <?php getFight("sailor", "Un marin ivre vous attaque!"); ?>

                </div>
                <div class="noDisplay" id="continuedsailor">
                    <p>Vous avez calmé les marins et leur avez permis de désaouler quelque peu. L'un d'eux vient même s'excuser et vous offre une potion et repart dépiter. Cependant vous avez toujours besoin d'informations sur le chemin à prendre pour aller terrasser le mal. La serveuse continue de vous aguicher au loin, vous décidez donc d'aller l'interroger.</p>
                    <p>Vous arrivez devant elle et vous lui présenter toutes vos salutations les plus distinguées. vus lui demander par la suite la marche à suivre pour se rendre au domaine du mal qui règne sur la région. elle vous dit qu'elle ne vous répondra qu'en échange d'un service de votre part.</p>
                    <p class="inform">Vous acceptez</p>
                    <p>Son mari est partie naviguer depuis de long mois et elle vous demande de pratiquer les "include" avec elle.</p>
                    <p class="inform">vous vous attletez à la tache</p>
                    <p>Après ce moment fort mais agréable, elle vous indique que le bateau s'en va sous peu vers le marais ou la jungle et qu'elle peut influencer la destination auprès des marins, pour vous. Vous acceptez et courrez-vous cacher dans l'un des coffres du bateau.</p>
                    <p class="inform"> Vous êtes en pleine mer sur le bateau </p>
                    <p>Les marins vous ont trouvé, certain vous reconaisse et explique à leurs capitaines que vous les avez tabassé dans le port. Il s'énerve et vous agresse.</p>
                    <div class="btnFight">
                        <button id="fightHarborBoss">Combattre !</button>
                        <?php getFight("sailorBoss", "Le capitaine du bateau vous attaque!"); ?>

                    </div>
                </div>
                <div class="noDisplay"  id="continuedsailorBoss">
                    <p>Vous avez résigné les marins à vous conduire à bon port mais ils trouvent que vous les utilisez bon gré, mal gré, pour arriver sur la fin.</p>
                    <div class="button">
                        <button id="btnJungleFromHarbor">S'arrimer à la jungle</button>
                        <button id="btnSwampFromHarbor">S'arrimer au marais</button>
                    </div>
                </div>
            </div>

            <div id="jungle" class="noDisplay">
                <!-- Jungle -->
                <h4>Vous arrivez dans la jungle de Mirkwood.</h4>
                <p>Vous entrez dans la jungle et remarquez au loin votre objectif. Le château du mal qui règne sur la région dépasse de la jungle de par sa grandeur, ce qui vous indique la direction à prendre. À ce moment précis des araignées vous attaque.</p>
                <div class="btnFight">
                    <button id="fightJungle">Combattre !</button>
                    <?php getFight("spider", "Une araignée géante vous attaque!"); ?>
                </div>
                <div class="noDisplay" id="continuedspider">
                    <p>Dans le combat, vous vous enfoncez dans la jungle par indavertance, vous vous rendez compte que cous êtes devant la tanière d'une immense Guivre. Peut à peut elle sort de sa tanière et vous fixe du regard. C'est ainsi que débute un intense battle de regard.</p>
                    <p>Mais vous perdez patience, vous n'avez pas de temps à perdre et vous chargez la Guivre.</p>
                    <div class="btnFight">
                        <button id="fightJungleBoss">Combattre !</button>
                        <?php getFight("guivreBoss", "La guivre vous attaque!"); ?>

                    </div>
                </div>

                <div class="noDisplay" id="continuedguivreBoss">
                    <p>Bien joué! Vous avez peut-être perdu le battle de regard mais elle y a perdu la vie.</p>
                    <p>Ceci fait, vous remorquez après ce dur combat que les portes du château se trouvent devant non loin de vous.</p>
                    <div class="button">
                        <button id="btnCastleFromJungle">Continuer vers le château</button>
                    </div>
                </div>
            </div>

            <div id="swamp" class="noDisplay">
                <!-- Marais -->
                <h4>Vous arrivez dans le marais de Tabanta.</h4>
                <p>Vous êtes arrivé dans les marais où pullulent divers serpents et moustiques.</p>
                <p>La mort et la maladie vous guette à chaque recoin. Vous sentez que votre objectif est proche.</p>
                <p>Vous aprecevez au loin le château du mal qui règne sur le royaume. Mais pendant que vous êtes dans vos pensées, des tréants en ont profité pour vous encercler et vous attaque.</p>
                <div class="btnFight">
                    <button id="fightSwamp">Combattre !</button>
                    <?php getFight("treant", "Un tréant vous attaque!"); ?>


                </div>

                <div class="noDisplay" id="continuedtreant">
                    <p>Vous récupérez votre souffle et reprenez votre incursion dans ce marais en direction du château.</p>
                    <p>À l'aide de votre épée, vous tailladez lianes et liaires, découpez herbes et serpents afin de vous frayer un chemin dans ses eaux épaisses et visqueuses.</p>
                    <p>Cependant vous apercevez un arbre qui vous paraît plus robuste que les autres. Au fûr et à mesure que vous vous rapprochez de lui, le temps semble se dégrader, la luminosité s'assombrit.</p>
                    <p>Maintenant que vous êtes au pied de l'arbre, une aura sombre se dégage de lui, il se tient devant vous et se lève, c'est un Tréans Maléfique, il vous attaque!</p>
                    <div class="btnFight">
                        <button id="fightSwampBoss">Combattre !</button>
                        <?php getFight("treantBoss", "Le tréant maléfique vous attaque!"); ?>
                    </div>
                </div>

                <div class="noDisplay" id="continuedtreantBoss">
                    <p>Vous avez triomphé du Tréant Maléfique et vous vous rendez compte que vous êtes aux portes du château.</p>
                    <div class="button">
                        <button id="btnCastleFromSwamp">Continuer vers le château</button>
                    </div>
                </div>
            </div>

            <div id="castle" class="noDisplay">
                <!-- château -->
                <h4>Vous arrivez au château Vania.</h4>
                <p>Vous vous tenez dans l'enceinte du château, un homme en armure se tient devant vous, il vous faut que peu de temps pour comprendre que ça y est, vous êtes devant lui.</p>
                <p>Vous vous apprêtez à charger, vous avez la main posé sur le manche de votre épée à votre ceinture, mais au moment d'engager le combat, il vous demande pourquoi vous êtes là.
                <p>Vous lui expliquez qu'il y a 20 ans, votre père est parti le combattre et qu'il n'est jamais revenu.</p>
                <p>Pendant 20 longues années, vous vous êtes entrainé, vous avez même appri le Klingon.</p>
                <p>Et maintenant vous vous sentez prêt à le venger.</p>
                <p>A peine fini votre monologue interminable, que vous avez engagez le combat.</p>
                <p> Tata yoyo !</p>
                <div class="btnFight">
                    <button id="fightCastle">Combattre !</button>
                    <?php getFight("endBoss", "Vous attaquez le roi-sorcier"); ?>

                </div>

                <div class="noDisplay" id="continuedendBoss">
                    <p>Ce fut un combat violent. vous avez donné des coups terribles, mais n'en avez pas reçu de moins pire.</p>
                    <p>Cependant, il n'est pas tout à fait mort, même si cela ne saurait tarder.</p>
                    <p>Dans un dernier long soupir, il vous adresse ce dernier monologue: "Il y a 20 ans, un homme est bien venue en ces lieux. Mais il a terrassé le mal qui y régnait.</p>
                    <p>Cependant, ce mal cache un terrible secret. Il commande à des armées de mort-vivant.</p>
                    <p>Mais une fois sans chef, cette armée se retrouve à envahir la région et s'attaquer aux innoncents et c'est pour cela qu'il y à 20 ans, apres avoir vaincu le mal, j'ai dû prendre sa place afin de réguler ces armées. Et c'est pour celà, qu'aujourd'hui, il t'incombre à toi aussi de prendre ma place...</p>
                    <p>Mon fils.</p>
                    <div class="button">
                        <a href="./controllers/updateUser.php" id="end">Vous devenez le Roi-Sorcier à la place de <?= $lastBoss ?></a>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main>
<script src="js/class.js"></script>
<script>
    const endBoss  = new Character("<?= $lastBoss ?>", 300, 20, 300);
    const player = new Character("<?= $user['name'] ?>", 100, 30, 0);
</script>
<script src="js/main.js"></script>
<script src="js/story.js"></script>

</body>
</html>