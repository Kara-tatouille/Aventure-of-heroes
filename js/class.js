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
        if (this.hp <= 0) {
            return `${this.name} est mort.`
        }
        else if (this.hp < this.maxhp) {

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