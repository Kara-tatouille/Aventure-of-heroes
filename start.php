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
<body class="bgStory">
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
            <div id="intro" class="flex">
                <!-- Intro -->
                <p class="fadeIn one">Élevé par votre mère depuis votre naissance, elle vous raconte depuis toujours que votre père est parti combattre le mal qui règne encore à ce jour sur la région.</p>
                <p class="fadeIn two">Jamais revenu, votre père est probablement mort.</p>
                <p class="fadeIn three">De ce fait, vous vous êtes entrainé au maniement d'épée.</p>
                <p class="fadeIn four">Vous venez récemment d'avoir 20 ans et aujourd'hui il est grand temps de partir venger votre père.</p>

                <button  class="fadeIn five" id="btnStart">Commencer l'aventure</button>
            </div>

            <div id="tavern" class="noDisplay flex">
            <h4 class="fadeIn one">Votre aventure commence à la taverne du Géant endormi.</h4>
                <p class="fadeIn two">A votre table, vous essayez d'élaborer un plan d'action, une première direction à prendre mais à force de vous agacer et de grommeler, votre épée vous échappe des mains et tombe au sol. Vous la ramassez et en vous relevant, un vieil homme se tien à votre table.</p>
                <p class="fadeIn three">Il a remmarqué que vous étiez un aventurier et vous demande pourquoi vous faites tant de rafut. Vous lui racontez donc vôtre histoire. L'homme, touché par ce récit se permet de vous aider mais son âge avancé ne lui permet pas de se souvenir du chemin exact jusqu'au mal qui gouverne ce royaume. Il vous évoque la possibilité d'explorer les zones alentours afin de débuter votre périple en quête de revanche.</p>
                <div class="button flexRow fadeIn four">
                    <button id="btnForest">Forêt</button>
                    <button id="btnPlain">Plaine</button>
                </div>
            </div>

            <div id="forest" class="noDisplay flex">
                <!-- Foret -->
                <div>
                <h4 class="fadeIn one">Vous arrivez dans la forêt de Shlipak.</h4>
                    <p class="fadeIn two">Une fois passé les portes du village, vous vous enfoncez dans la forêt de Shlipak, mais des bandits ont entendu vôtre conversation avec le vieil homme de la taverne et se sont tapis dans la forêt afin de vous tendre une embuscade.</p>
                    <div class="btnFight flex fadeIn three">
                        <button id="fightForest">Combattre !</button>
                        <?php getFight("bandit", "Un bandit vous attaque!"); ?>

                    </div>
                </div>
                <div class="noDisplay fadeIn four" id="continuedbandit">
                <p>Les bandits sont vaincu, leur corps allongés sur le sol. Vous inspectez scrupuleusement la forêt et remarquez une pancarte qui vous indique le port de Carmin-sur-Mer. Avant de partir, vous trouvez un rouleau semblant dépasser d'un des sacs des bandits qui ressemble à une carte.</p>
                    <div class="button fadeIn five">
                        <button id="btnCaveFromForest">Suivre la carte</button>
                        <button id="btnHarborFromForest">Port de Carmin-sur-Mer</button>
                    </div>
                </div>
            </div>

            <div id="plains" class="noDisplay flex">
                <!-- Plaine -->
                <h4 class="fadeIn one">Vous arrivez dans les plaines de Cania.</h4>
                <p class="fadeIn two">Peut après êtres sortie du village, vous vous faite attaquer par des loups.</p>
                <div class="btnFight flex fadeIn three">
                    <button id="fightPlains">Combattre !</button>
                    <?php getFight("wolf", "Un Loup des plaines vous attaque!"); ?>
                </div>
                <div class="noDisplay"  id="continuedwolf">
                <p class="fadeIn three">Après ce combat durement gagné contre un loup exceptionnellement BALEZE, vous prenez le temps d'inspecter les environs. Vous remarquez une pancarte qui vous indique la direction du port de Carmin-sur-Mer. Mais vous distinguez non loin de vous un interstice entre deux rochers.</p>
                    <div class="button fadeIn four">
                        <button id="btnCaveFromPlains">Interstice entre deux rochers</button>
                        <button id="btnHarborFromPlains">Port de Carmin-sur-mer</button>
                    </div>
                </div>
            </div>

            <div id="cave" class="noDisplay flex">
                <!-- Passage Secret -->
                <h4 class="fadeIn one">Vous arrivez au Tram des profondeurs.</h4>
                <p class="fadeIn two">Vous avez reussi à trouver l'entrée d'un ancien réseau de Tram construit par des gnomes il y a fort longtemp. Aujourd'hui, seule des gobelins malagauches vivent dans ces souterrain. D'ailleurs, ils vous attaquent!!</p>
                <div class="btnFight flex fadeIn three">
                    <button id="fightCave">Combattre !</button>
                    <?php getFight("goblin", "Une horde de gobelin vous attaque!"); ?>
                </div>
                <div class="noDisplay" id="continuedgoblin">
                <p class="fadeIn four">Vous avez terrassé cet incroyable petite horde de gobelins mais vous sentez que quelque chose d'incroyablement plus puissant tapie dans l'ombre, vous épie. Vous continuez vôtre chemin jusqu'à un endroit où il se divise en deux, mais à ce même emplacement vous apercevez la menace: Le Roi des Gobelins bloque le passage et il a une otage. Il vous défie! S'il gagne vous devenez son esclave. Si vous gagnez, vous liberez l'otage et aurait la possibilité de passer.</p>
                    <div class="btnFight flex fadeIn five">
                        <button id="fightCaveBoss">Combattre !</button>
                        <?php getFight("goblinBoss", "Le roi des goblins vous attaque!"); ?>
                    </div>
                </div>

                <div class="noDisplay"  id="continuedgoblinBoss">
                <p class="fadeIn one">Vous avez défait le Roi des Gobelins. L'otage est libre ! Elle vous est grandement reconnaissante. Pour vous remercier, elle vous laisse pratiquer le GitPull/GitPush avec elle.</p>

                <p class="fadeIn two">Ceci fait, vous reprenez votre aventure. Deux chemin se séparent, leur destination est gravée sur les parois.</p>
                    <div class="button fadeIn three">
                        <button id="btnJungleFromCave">La jungle</button>
                        <button id="btnSwampFromCave">Le marais</button>
                    </div>
                </div>
            </div>

            <div id="harbor" class="noDisplay flex">
                <!-- Port -->
                <h4 class="fadeIn one">Vous arrivez au port de Carmin-sur-Mer.</h4>
                <p class="fadeIn two">En arrivant sur la place centrale du port, vous remarquez une serveuse qui vous aguiche au loin mais des marins fort bourrés s'en prennent à vous.</p>
                <div class="btnFight flex fadein three">
                    <button id="fightHarbor">Combattre !</button>
                    <?php getFight("sailor", "Un marin ivre vous attaque!"); ?>

                </div>
                <div class="noDisplay" id="continuedsailor">
                <p class="fadeIn four">Vous avez calmé les marins et leur avez permis de désaouler quelque peu. L'un d'eux vient même s'excuser et vous offre une potion et repart dépiter. Cependant vous avez toujours besoin d'informations sur le chemin à prendre pour aller terrasser le mal. La serveuse continue de vous aguicher au loin, vous décidez donc d'aller l'interroger.</p>
                    <p class="fadeIn five">Vous arrivez devant elle et vous lui présentez toutes vos salutations les plus distinguées. vous lui demandez par la suite la marche à suivre pour se rendre au domaine du mal qui règne sur la région. elle vous dit qu'elle ne vous répondra qu'en échange d'un service de votre part.</p>
                    <p class="inform fadeIn six">Vous acceptez</p>
                    <p class="fadeIn seven">Son mari est parti naviguer depuis de longs mois et elle vous demande de pratiquer les "include" avec elle.</p>
                    <p class="inform fadeIn eight">vous vous attletez à la tache</p>
                    <p class="fadeIn nine">Après ce moment fort mais agréable, elle vous indique que le bateau s'en va sous peu vers le marais ou la jungle et qu'elle peut influencer la destination auprès des marins, pour vous. Vous acceptez et courrez-vous cacher dans l'un des coffres du bateau.</p>
                    <p class="inform fadeIn ten"> Vous êtes en pleine mer sur le bateau </p>
                    <p class="fadeIn eleven">Les marins vous ont trouvé, certain vous reconaisse et expliquent à leur capitaine que vous les avez tabassé dans le port. Il s'énerve et vous agresse.</p>
                    <div class="btnFight flex fadeIn twelve">
                        <button id="fightHarborBoss">Combattre !</button>
                        <?php getFight("sailorBoss", "Le capitaine du bateau vous attaque!"); ?>

                    </div>
                </div>
                <div class="noDisplay"  id="continuedsailorBoss">
                <p class="fadeIn thirteen">Vous avez résigné les marins à vous conduire à bon port, mais ils trouvent quand même que vous les utilisez bon gré, mal gré, pour arriver sur la fin.</p>
                    <div class="button fadeIn fourteen">
                        <button id="btnJungleFromHarbor">S'arrimer à la jungle</button>
                        <button id="btnSwampFromHarbor">S'arrimer au marais</button>
                    </div>
                </div>
            </div>

            <div id="jungle" class="noDisplay flex">
                <!-- Jungle -->
                <h4 class="fadeIn one">Vous arrivez dans la jungle de Mirkwood.</h4>
                <p class="fadeIn two">Vous entrez dans la jungle et remarquez au loin vôtre objectif. Le château du mal qui règne sur la région dépasse de la jungle de par sa grandeur, ce qui vous indique la direction à prendre. À ce moment précis des araignées vous attaque.</p>
                <div class="btnFight flex fadeIn three">
                    <button id="fightJungle">Combattre !</button>
                    <?php getFight("spider", "Une araignée géante vous attaque!"); ?>
                </div>
                <div class="noDisplay" id="continuedspider">
                <p class="fadeIn four">Pendant le combat, vous vous enfoncez dans la jungle par indavertance, vous vous rendez compte que cous êtes devant la tanière d'une immense Guivre. Peut à peut elle sort de sa tanière et vous fixe du regard. C'est ainsi que débute un intense battle de regard.</p>
                <p class="fadeIn five">Mais vous perdez patience, vous n'avez pas de temps à perdre et vous chargez la Guivre.</p>
                    <div class="btnFight flex fadeIn six">
                        <button id="fightJungleBoss">Combattre !</button>
                        <?php getFight("guivreBoss", "La guivre vous attaque!"); ?>
                    </div>
                </div>

                <div class="noDisplay" id="continuedguivreBoss">
                <p class="fadeIn seven">Bien joué! Vous avez peut-être perdu le battle de regard mais elle a perdu la vie.</p>
                    <p class="fadeIn eight">Ceci fait, vous remarquez que les portes du château se trouvent devant non loin de vous.</p>
                    <div class="button fadeIn nine">
                        <button id="btnCastleFromJungle">Continuer vers le château</button>
                    </div>
                </div>
            </div>

            <div id="swamp" class="noDisplay flex">
                <!-- Marais -->
                <h4 class="fadeIn ten">Vous arrivez dans le marais de Tabanta.</h4>
                <p class="fadeIn eleven">Vous êtes arrivé dans les marais où pullulent divers serpents et moustiques.</p>
                <p class="fadeIn twelve">La mort et la maladie vous guette à chaque recoin. Vous sentez que votre objectif est proche.</p>
                <p class="fadeIn thirteen">Vous aprecevez au loin le château du mal qui règne sur le royaume. Mais pendant que vous êtes dans vos pensées, des tréants en ont profité pour vous encercler et vous attaque.</p>
                <div class="btnFight flex fadeIn fourteen">
                    <button id="fightSwamp">Combattre !</button>
                    <?php getFight("treant", "Un tréant vous attaque!"); ?>
                </div>

                <div class="noDisplay" id="continuedtreant">
                <p class="fadeIn fifteen">Vous récupérez votre souffle et reprenez votre incursion dans ce marais en direction du château.</p>
                    <p class="fadeIn sixteen">À l'aide de votre épée, vous tailladez lianes et liaires, découpez herbes et serpents afin de vous frayer un chemin dans ses eaux épaisses et visqueuses.</p>
                    <p class="fadeIn seventeen">Cependant vous apercevez un arbre qui vous paraît plus robuste que les autres. Au fûr et à mesure que vous vous rapprochez de lui, le temps semble se dégrader, la luminosité s'assombrit.</p>
                    <p class="fadeIn eighteen">Maintenant que vous êtes au pied de l'arbre, une aura sombre se dégage de lui, il se tient devant vous et se lève, c'est un Tréant Maléfique, il vous attaque!</p>
                    <div class="btnFight flex fadeIn nineteen">
                        <button id="fightSwampBoss">Combattre !</button>
                        <?php getFight("treantBoss", "Le tréant maléfique vous attaque!"); ?>
                    </div>
                </div>

                <div class="noDisplay" id="continuedtreantBoss">
                <p class="fadeIn twenty">Vous avez triomphé du Tréant Maléfique et vous vous rendez compte que vous êtes non loins des portes du château.</p>
                    <div class="button fadeIn twentyOne">
                        <button id="btnCastleFromSwamp">Continuer vers le château</button>
                    </div>
                </div>
            </div>

            <div id="castle" class="noDisplay flex">
                <!-- château -->
                <h4 class="fadeIn one">Vous arrivez au château Vania.</h4>
                <p class="fadeIn two">Vous vous tenez dans l'enceinte du château, un homme en armure se tient devant vous, il ne vous faut que peu de temps pour comprendre que ça y est, vous êtes devant lui.</p>
                <p class="fadeIn three">Vous vous apprêtez à charger, vous avez la main posé sur le manche de votre épée se trouvant à votre ceinture, mais au moment d'engager le combat, il vous demande pourquoi vous êtes là.
                <p class="fadeIn four">Vous lui expliquez qu'il y a 20 ans, votre père est parti le combattre et qu'il n'est jamais revenu.</p>
                <p class="fadeIn five">Pendant 20 longues années, vous vous êtes entrainé sans relache, vous avez même appri le Klingon.</p>
                <p class="fadeIn six">Et maintenant vous vous sentez prêt à le venger.</p>
                <p class="fadeIn seven">A peine fini votre monologue interminable, que vous avez engagé le combat.</p>
                <p class="fadeIn eight"> yIHIv !</p>
                <div class="btnFight flex fadeIn nine">
                    <button id="fightCastle">Combattre !</button>
                    <?php getFight("endBoss", "Vous attaquez le roi-sorcier"); ?>
                </div>

                <div class="noDisplay" id="continuedendBoss">
                <p class="fadeIn ten">Ce fût un combat violent. vous avez donné des coups terribles, mais n'en avez pas reçu de moins pire.</p>
                    <p class="fadeIn eleven">Cependant, il n'est pas tout à fait mort, même si cela ne saurait tarder.</p>
                    <p class="fadeIn twelve">Dans un dernier long soupir, il vous adresse ce dernier message: "Il y a 20 ans, un homme est bien venue en ces lieux. Mais il a terrassé le mal qui y régnait.</p>
                    <p class="fadeIn thirteen">Cependant, ce mal cache un terrible secret. Il commande à des armées de mort-vivant.</p>
                    <p class="fadeIn fourteen">Mais une fois sans chef, cette armée se retrouverait à envahir la région et à s'attaquer aux innoncents. C'est pour cela qu'il y à 20 ans, apres avoir vaincu le mal, j'ai dû prendre sa place afin deles réguler. C'est pour celà, qu'aujourd'hui, il t'incombre à toi aussi de prendre ma place...</p>
                    <p class="fadeIn fifteen">...Mon fils...</p>
                    <div class="button fadeIn sixteen buttonDefeatBoss">
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