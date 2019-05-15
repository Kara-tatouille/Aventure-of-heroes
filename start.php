<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu</title>
    <link rel="stylesheet" href="css/style.css">
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
            <div id="intro">
<!-- Intro -->                    
                <p class="text">Élevée par votre mère depuis votre naissance elle vous raconte depuis toujours que votre père est parti combattre le mal qui règne encore à ce jour sur la région.</p>
                <p class="text"> Jamais revenu, votre père est probablement mort.</p>
                <p class="text">De ce fait, vous vous êtes entrainé au maniement d'épée.</p>
                <p class="text">Vous venez récemment d'avoir 20 ans et aujourd'hui il est grand temps de partir venger votre père.</p>
                <p class="text">Votre aventure commence à la taverne du Géant endormi.</p>

                <button class="choix1">Foret</button>
                <button class="choix2">Plaine</button>
            </div>

            <div id="forest" class="noDisplay">
                <!-- Foret -->
                <p>-------------</p>
                <p>Vous arrivez dans la forêt de Shlipak.</p>
                <p>-------------</p>
                <p>Aux sorties du village, vous entrez dans la forêt de Shlipak</p>
                <p>mais des bandits ont entendu votre conversation avec le vieil</p>
                <p>homme de la taverne et se sont tapis dans la forêt afin de vous</p>
                <p>tendre une embuscade.</p>
                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>
                <p>Vaincue, les corps des bandits sont allongés sur le sol.</p>
                <p>Vous inspectez scrupuleusement la forêt et remarquez une pancarte</p>
                <p>qui vous indique le port de Carmin-sur-Mer.</p>
                <p>Aussi, un rouleau semble depasser d'un des sacs des bandits</p>
                <p>cela semble ressembl à une carte.</p>
                <p>-------------</p>
                <p>Phase de choix</p>
                <p>-------------</p>

                <button class="choix1">Suivre la carte</button>
                <button class="choix2">Port de Carmin-sur-Mer</button>
            </div>

            <div id="plains" class="noDisplay">
                <!-- Plaine -->
                <p>-------------</p>
                <p>Vous arrivez dans les plaines de Cania.</p>
                <p>-------------</p>
                <p>Peut après êtres sortie du village vous vous faite</p>
                <p>attaquer par des loups.</p>
                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>
                <p>Après ce combat durement reussi contre des loups exceptionnellement</p>
                <p>BALEZES, vous prenez le temps d'inspecter les environs et vous remarquez</p>
                <p>une pancarte qui vous indique la direction du port de Carmin-sur-Mer</p>
                <p>Mais vous distinguez non loin de vous un interstice entre deux rochers.</p>
                <p>-------------</p>
                <p>Phase de choix</p>
                <p>-------------</p>

                <button class="choix1">Interstice entre deux rochers</button>
                <button class="choix2">Port de Carmin-sur-mer</button>
            </div>

            <div id="cave" class="noDisplay">
                <!-- Passage Secret -->
                <p>-------------</p>
                <p>Vous arrivez au Tram des profondeurs.</p>
                <p>-------------</p>
                <p>Vous avez reussi à trouver l'entrée d'un ancien reseau de Tram</p>
                <p>construit par des gnomes il y a fort longtemp.</p>
                <p>Aujourd'hui, seule des gobelins malagauches vivent dans ces souterrain.</p>
                <p>Dailleurs, ils vous attaque!!</p>
                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>
                <p>Vous avez terrassé cet incroyable petite horde de gobelins mais vous</p>
                <p>sentez que quelque chose d'incroyablement plus puissant vous épis,</p>
                <p>tapie dans l'ombre.</p>
                <p>Vous continuez votre chemin jusqu'à un endroit où il se divise en deux,</p>
                <p>mais à ce même emplacement vous apercevez une menace beaucoup plus grande.</p>
                <p>Le Roi des Gobelins bloque le passage et il a une otage.</p>
                <p>Il vous défie! S'il gagne vous devenez son esclave. Mais si vous gagnez,</p>
                <p>vous liberez l'otage et aurait la possibilité de passer.</p>
                <p>-------------</p>
                <p>Phase de combat</p>
                <p>-------------</p>
                <p>Vous avez défait le Roi des Gobelins. L'otage est libre !</p>
                <p>Elle vous est grandement reconnaissante. Pour vous remercier,</p>
                <p>elle vous laisse pratiquer le GitPull/GitPush avec elle.</p>

                <p>Ceci fait, vous reprenez votre aventure. Deux chemin se sépare,</p>
                <p>leur destination est gravée sur les parois.</p>
                <p>-----------------</p>
                <p>Phase de choix</p>
                <p>-----------------</p>

                <button class="choix1">La jungle</button>
                <button class="choix2">Le marais</button>
            </div>

            <div id="harbor" class="noDisplay">
                <!-- Port -->
                <p>-------------</p>
                <p>Vous arrivez au port de Carmin-sur-Mer.</p>
                <p>-------------</p>
                <p>En arrivant sur la place centrale du port, vous remarquez</p>
                <p>une serveuse qui vous aguiche au loin mais des marins fort bourrés</p>
                <p>s'en prennent à vous.</p>
                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>
                <p>Vous avez calmé les marins et leur avez permis de désaouler quelque peu.</p>
                <p>L'un d'eux vient même s'excuser et vous offre une potion et repart dépiter.</p>
                <p>Cependant vous avez toujours besoin d'informations sur le chemin à prendre</p>
                <p>pour aller terrasser le mal. La serveuse continue de vous aguicher au loin,</p>
                <p>vous décidez donc d'aller l'interroger.</p>

                <p>Vous arrivez devant elle et vous lui présenter toutes vos salutations les</p>
                <p>plus distinguées. vus lui demander par la suite la marche à suivre pour se</p>
                <p>rendre au domaine du mal qui règne sur la région. elle vous dit qu'elle ne</p>
                <p>vous répondra qu'en échange d'un service de votre part.</p>
                <p>-------------</p>
                <p>Vous acceptez</p>
                <p>-------------</p>
                <p>Son mari est partie naviguer depuis de long mois et elle vous demande de</p>
                <p>pratiquer les "include" avec elle.</p>
                <p>------------</p>
                <p>vous vous attletez à la tache</p>
                <p>-----------</p>
                <p>Après ce moment fort mais agréable, elle vous indique que le bateau s'en va</p>
                <p>sous peu vers le marais ou la jungle et qu'elle peut influencer la destination</p>
                <p>auprès des marins, pour vous. Vous acceptez et courrez-vous cacher dans l'un des</p>
                <p>coffres du bateau.</p>
                <p>-----------------</p>
                <p>Phase de choix</p>
                <p>-----------------</p>
                <p>Les marins vous ont trouvé, certain vous reconaisse et explique à leurs capitaines que</p>
                <p>vous les avez tabassé dans le port. Il s'énerve et vous agresse.</p>
                <p>---------------</p>
                <p>Phase de combat</p>
                <p>---------------</p>
                <p>Vous avez résigné les marins à vous conduire à bon port mais ils trouvent que vous les</p>
                <p>utilisez bon gré, mal gré, pour arriver sur la fin.</p>

                <button class="choix1">S'arrimer à la jungle</button>
                <button class="choix2">S'arrimer au marais</button>
            </div>

            <div id="jungle" class="noDisplay">
                <!-- Jungle -->
                <p>-------------</p>
                <p>Vous arrivez dans la jungle de Mirkwood.</p>
                <p>-------------</p>
                <p>Vous entrez dans la jungle et remarquez au loin votre objectif. Le château</p>
                <p>du mal qui règne sur la région dépasse de la jungle de par sa grandeur,</p>
                <p>ce qui vous indique la direction à prendre. À ce moment précis des araignées vous attaque.</p>

                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>


                <p>Dans le combat, vous vous enfoncez dans la jungle par indavertance, vous vous rendez compte</p>
                <p>que cous êtes devant la tanière d'une immense Guivre.</p>
                <p>Peut à peut elle sort de sa tanière et vous fixe du regard.</p>
                <p>C'est ainsi que débute un intense battle de regard.</p>
                <p>Mais vous perdez patience, vous n'avez pas de temps à perdre et vous chargez la Guivre.</p>

                <p>-------------</p>
                <p>Phase de combat</p>
                <p>-------------</p>

                <p>Bien joué! Vous avez peut-être perdu le battle de regard mais elle y a perdu la vie.</p>
                <p>Ceci fait, vous remorquez après ce dur combat que les portes du château se trouvent devant non loin de vous.</p>

                <p>-----------------</p>
                <p>Phase de choix</p>
                <p>-----------------</p>

                <button class="choix1">Continuer vers le château</button>
            </div>

            <div id="swamp" class="noDisplay">
                <!-- Marais -->
                <p>-------------</p>
                <p>Vous arrivez dans le marais de Tabanta.</p>
                <p>-------------</p>
                <p>Vous êtes arrivé dans les marais où pullulent divers serpents et moustiques.</p>
                <p>La mort et la maladie vous guette à chaque recoin. Vous sentez que votre objectif est proche.</p>
                <p>Vous aprecevez au loin le château du mal qui règne sur le royaume. Mais pendant que vous êtes dans vos</p>
                <p>pensées, des tréants en ont profité pour vous encercler et vous attaque.</p>

                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>


                <p>Vous récupérez votre souffle et reprenez votre incursion dans ce marais en direction du château.</p>
                <p>À l'aide de votre épée, vous tailladez lianes et liaires, découpez herbes et serpents</p>
                <p>afin de vous frayer un chemin dans ses eaux épaisses et visqueuses.</p>
                <p>Cependant vous apercevez un arbre qui vous paraît plus robuste que les autres. Au fûr et à mesure</p>
                <p>que vous vous rapprochez de lui, le temps semble se dégrader, la luminosité s'assombrit.</p>
                <p>Maintenant que vous êtes au pied de l'arbre, une aura sombre se dégage de lui, il se tient</p>
                <p>devant vous et se lève, c'est un Tréans Maléfique, il vous attaque!</p>

                <p>-------------</p>
                <p>Phase de combat</p>
                <p>-------------</p>

                <p>Vous avez triomphé du Tréant Maléfique et vous vous rendez compte</p>
                <p>que vous êtes aux portes du château.</p>

                <p>-----------------</p>
                <p>Phase de choix</p>
                <p>-----------------</p>

                <button class="choix1">Continuer vers le château</button>
            </div>

            <div id="castle" class="noDisplay">
                <!-- château -->
                <p>-------------</p>
                <p>Vous arrivez au château Vania.</p>
                <p>-------------</p>
                <p>Vous vous tenez dans l'enceinte du château, un homme en armure se tien devant vous,</p>
                <p>Il vous faut que peu de temps pour comprendre que ça y est, vous êtes devant lui.</p>
                <p>Vous vous apprêtez à charger, vous avez la main posé sur le manche de votre épée à votre ceinture,</p>
                <p>mais au moment d'engager le combat, il vous demande pourquoi vous êtes là. Vous lui expliquez</p>
                <p>qu'il y a 20 ans, votre père est parti le combattre et qu'il n'est jamais revenu.</p>
                <p>Pendant 20 longues années, vous vous êtes entrainé, vous avez même appri le Klingon.</p>
                <p>Et maintenant vous vous sentez prêt à le venger.</p>
                <p>A peine fini votre monologue interminable, que vous avez engagez le combat.</p>
                <p> Tata yoyo !</p>



                <p>------------</p>
                <p>Phase de combat</p>
                <p>------------</p>


                <p>Ce fut un combat violent. vous avez donné des coups terribles, mais n'en avez pas reçu de moins pire.</p>
                <p>Cependant, il n'est pas tout à fait mort, même si cela ne saurait tarder.</p>
                <p>Dans un dernier long soupir, il vous adresse ce dernier monologue:</p>
                <p>"Il y a 20 ans, un homme est bien venue en ces lieux. Mais il a terrassé le mal qui y régnait.</p>
                <p>Cependant, ce mal cache un terrible secret. Il commande à des armées de mort-vivant.</p>
                <p>Mais une fois sans chef, cette armée se retrouve à envahir la région et s'attaquer aux innoncents</p>
                <p>et c'est pour cela qu'il y à 20 ans, apres avoir vaincu le mal, j'ai dû prendre sa place afin</p>
                <p>de réguler ces armées. Et c'est pour celà, qu'aujourd'hui, il t'incombre à toi aussi de prendre ma place,</p>
                <p>Mon fils...</p>


                <p>-----------------</p>
                <p>Vous devenez le Roi-Sorcier</p>
                <p>-----------------</p>
            </div>

        </div>
    </section>
</main>

<script src="./js/dialogue.js"></script>
<script src="js/choice.js"></script>
</body>
</html>