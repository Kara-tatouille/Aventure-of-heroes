class Character {

    constructor(name, hp, atk, xp) {
        this.name = name;
        this.maxhp = hp;
        this.hp = hp;
        this.atk = atk;
        this.xp = xp;
        this.potion = 2;
    }

    attack(target, efficiency) {
        //Si le joueur est en vie
        if (this.hp <= 0) {
            return `${this.name} est mort(e) et ne peut pas attaquer!`
        }

        //Si la cible à de la vie
        if (target.hp > 0) {

            let damage = this.atk * efficiency;
            //Si l'attaque ne tue pas la cible
            if (target.hp - damage > 0) {
                target.hp -= damage;

                if (efficiency === 1.5) {
                    return `${this.name} attaque ${target.name}. C'est super efficace! ${this.name} inflige ${damage} dmg!`
                }
                else if (efficiency === 0.5) {
                    return `${this.name} attaque ${target.name}. ${target.name} s'attendait à votre coup!! ${this.name} inflige ${damage} dmg!`
                }
                else if (efficiency === 1) {
                    return `${this.name} attaque ${target.name} et lui inflige ${this.atk} dmg!`
                }
                else {
                    return "Chose pas normal"
                }
            }

            //Si l'attaque tue
            else {
                target.hp = 0;
                this.xp += target.xp;

                let drop = Math.random();

                if (drop > 0.8 && this.potion < 2) {
                    this.potion++;
                    checkXp();
                    return `${this.name} a tué(e) ${target.name} et gagne ${target.xp} xp!\n
                            ${this.name} a drop une potion!`
                }
                else {
                    checkXp();
                    return `${this.name} a tué(e) ${target.name} et gagne ${target.xp} xp!`
                }
            }
        }

        else {
            return `${target.name} est déja mort(e), ${this.name} ne peut pas attaquer!`
        }
    }

    attackPfs(target) {
        //Si le joueur est en vie
        if (this.hp <= 0) {
            return `${this.name} est mort(e) et ne peut pas attaquer!`
        }
            //Si la cible est en vie
            if (target.hp > 0) {

                let typeTarget = Math.floor(Math.random() * 3);

                switch (typeTarget) {
                    case 0:
                        return this.attack(target, 0.5);
                    case 1:
                        return this.attack(target, 1);
                    case 2:
                        return this.attack(target, 1.5);
                    default:
                        return "1 That shouldn't happen.."
                }
            }
            else {
                return `${target.name} est déja mort(e), ${this.name} ne peut pas attaquer!`
            }
        }

    //Donne le nom, hp, atk et xp de
    describe(isPlayer) {
        if (isPlayer) {
            return `${this.name} a ${this.hp}/${this.maxhp} pv, ${this.atk} points d'attaque, ${this.potion} potion(s) et ${this.xp} xp.`
        }
        else {
            return `${this.name} a ${this.hp}/${this.maxhp} pv et ${this.atk} points d'attaque`
        }
    }

    //Boire une potion
    usePotion(amount) {
        //Si la personne peut boire une potion
        if (this.hp < this.maxhp) {

            //Verifie si il reste une potion, puis en retire une et soigne si il en reste
            if (this.potion === 0) {
                return `${this.name} n'a plus de potion!`
            }
            //Consomme une potion
            else {
                this.potion--;
                //Si la potion ne soigne pas totallement
                if (this.hp + amount < this.maxhp) {
                    this.hp += amount;
                    return `${this.name} bois une potion et récupère ${amount} pv.`
                }

                //Si la potion soigne totallement
                else {
                    let soinsReduced = this.maxhp - this.hp;
                    this.hp += soinsReduced;
                    return `${this.name} bois une potion et récupère ${soinsReduced} pv.`

                }
            }
        }
        //Si la personne est morte
        else if (this.hp <= 0) {
            return `${this.name} est mort.`
        }
        //Si les hp sont au max
        else {
            return `${this.name} est déja au maximum de sa santé!`
        }
    }


    action(stance, isPlayer) {
        if (isPlayer) {
            if (stance === "ready") {
                return `Vous vous tenez prêt à attaquer`
            }
            else if (stance === "wait") {
                return `Vous attendez une ouverture pour attaquer`
            }
            else if (stance === "attack") {
                this.attackPfs(player)
            }
            else {
                return "That should not happen, error in action() method"
            }
        }
        else {

            if (stance === "ready") {
                return `${this.name} est prêt à vous attaquer!`
            }
            else if (stance === "wait") {
                return `${this.name} vous dévisage du regard, mais reste immobile.`
            }
            else if (stance === "attack") {
                this.attackPfs(player)
            }
            else {
                return "That should not happen, error in action() method"
            }
        }
    }
}

//Level up?
function checkXp() {
    if (player.xp > 99) {
        //Echange 100 xp pour 10 atk,20hp et 20hpmax
        player.atk += 10;
        player.maxhp += 20;
        player.hp += 20;
        player.xp -= 100;
        //Empèche xp d'être négatif
        if (player.xp < 0) {
            player.xp = 0;
        }
    }
}

let player = new Character("Roger",             100,30, 0);

let wolf = new Character  ("Loup",                  45, 10, 25);//commence lvl 1, fini lvl 1 25xp

let bandit = new Character("Bandit",                90, 7 , 30);//commence lvl 1, fini lvl 1 30xp

let goblin = new Character("Goblin",                120, 15, 75);//commence lvl 1, fini lvl 2 0/5xp
let goblinBoss = new Character("Roi des goblins",   180, 20, 100);//commence lvl 2, fini lvl 3 0/5xp

let sailor = new Character("Marin ivre",            135, 10, 75);//commence lvl 1, fini lvl 2 0/5xp
let sailorBoss = new Character("Capitaine",         150, 15, 90);//commence lvl 1, fini lvl 2 90/95xp

let treant = new Character("Tréant",                200, 12, 95);//commence lvl 2/3 90/95/0/5 xp, fini lvl 3/4 85/90/95/0
let treantBoss = new Character("Tréant géant",      270, 15, 115);//commence lvl 3/4 85/90/95/0 xp, fini lvl 5 0/5/10/15

let spider = new Character("Araignée",              200, 10, 95);//commence lvl 2/3 90/95/0/5 xp, fini lvl 3/4 85/90/95/0
let guivreBoss = new Character("Guivre géante",     240, 15, 110);//commence lvl 3/4 85/90/95/0 xp, fini lvl 4/5 95/0/5/10

let endBoss = new Character   ("Lucy",             300, 20, 300);//commence lvl 4/5



//Buttons "Combattre!"
document.body.addEventListener("click", function (evt) {
    //Si le button à une ID comme "fightPlains" ou "fightQuelquechose"
    if(typeof(String(evt.target.id).split('fight')[1]) !== 'undefined') {
        //Récupère l'ID du button clické
        let fightId = evt.target.id;
        //Récupère le nom du monstre qui est combattu
        let fightType = String(evt.target.nextSibling.nextSibling.id).split('fight')[1];
        //Récupère l'objet du monstre qui est combattu
        let currentMonster = getMonster(fightType);

        //Affiche la scène de combat
        document.getElementById("fight"+fightType).classList.remove("noDisplay");
        document.getElementById(fightType).classList.remove("noDisplay");
        document.getElementById("actionDiv"+fightType).classList.remove("noDisplay");

        document.getElementById("monsterAction"+fightType).innerHTML = currentMonster.action("wait");
        document.getElementById("playerAction"+fightType).innerHTML = player.action("wait",true);
        document.getElementById("describeMonster"+fightType).innerHTML = currentMonster.describe();
        document.getElementById("describePlayer"+fightType).innerHTML = player.describe(true);


    //Button victoire
    document.getElementById("victoryBtn"+fightType).addEventListener("click", function () {
        document.getElementById("fight"+fightType).classList.add("noDisplay");
        document.getElementById("actionDiv"+fightType).classList.add("noDisplay");

        document.getElementById(fightId).classList.add("noDisplay");

        document.getElementById("continued"+fightType).classList.remove("noDisplay");
    });

    //Button défaite
    document.getElementById("defeatBtn"+fightType).addEventListener("click", function () {
        window.location.href = "/controllers/disconnect.php";
    })

    }
});

//Buttons d'attaque/potion
document.body.addEventListener("click", function (evt) {
    //Récupère l'id du button clické
    let eventId = String(evt.target.id);
    //Récupère la première classe de ce qui a été clické
    let eventClass = String(evt.target.className).split(' ')[0];
    //Récupère $type = le nom du monstre combattu
    let monsterType = eventClass.substring(6);
    //Récupère l'objet combattu
    let monsterTypeObject = getMonster(monsterType);

    //Si le button est un button "actionQuelquechose"
    if (eventClass === 'action'+monsterType ) {
        //Oui, les trois buttons font la même chose, mais ils donnent l'illusion de jouer à pierre feuille ciseaux
        //Si le button est un fastAttack
        if (eventId === "fstAtk"+monsterType) {
            document.getElementById("playerAction"+monsterType).innerHTML = player.attackPfs(monsterTypeObject);
            document.getElementById("monsterAction"+monsterType).innerHTML = monsterTypeObject.attackPfs(player);
        }
        //Si le button est un strongAttack
        else if (eventId === "strAtk"+monsterType) {
            document.getElementById("playerAction"+monsterType).innerHTML = player.attackPfs(monsterTypeObject);
            document.getElementById("monsterAction"+monsterType).innerHTML = monsterTypeObject.attackPfs(player);
        }
        //Si le button est une riposte
        else if (eventId === "riposte"+monsterType) {
            document.getElementById("playerAction"+monsterType).innerHTML = player.attackPfs(monsterTypeObject);
            document.getElementById("monsterAction"+monsterType).innerHTML = monsterTypeObject.attackPfs(player);
        }
        //Si le button est un usePotion
        else if (eventId === "usePotion"+monsterType) {
            document.getElementById("playerAction"+monsterType).innerHTML = player.usePotion();
            document.getElementById("monsterAction"+monsterType).innerHTML = monsterTypeObject.attackPfs(player);
        }
        //Decris le joueur et le monstre, vérifie si le monstre ou le joueur est K.O
        document.getElementById("describeMonster"+monsterType).innerHTML = monsterTypeObject.describe();
        document.getElementById("describePlayer"+monsterType).innerHTML = player.describe(true);
        victoryState(monsterType);
    }

    function victoryState(monster) {
        if (getMonster(monster).hp === 0) {
            document.getElementById("victory"+monster).innerHTML = "Victoire!!";
            document.getElementById("victoryDiv"+monster).classList.remove("noDisplay");
        }
        if (player.hp === 0) {
            document.getElementById("defeat"+monster).innerHTML = "Défaite.";
            document.getElementById("defeatDiv"+monster).classList.remove("noDisplay");
        }
    }

});





function getMonster(monster) {
    switch (monster) {
        case "wolf":
            return wolf;
        case "bandit":
            return bandit;
        case "sailor":
            return sailor;
        case "sailorBoss":
            return sailorBoss;
        case "goblin":
            return goblin;
        case "goblinBoss":
            return goblinBoss;
        case "spider":
            return spider;
        case "guivreBoss":
            return guivreBoss;
        case "treant":
            return treant;
        case "treantBoss":
            return treantBoss;
        case "endBoss":
            return endBoss;
        default:
            return "Mob not found in getMonster()!"
    }
}