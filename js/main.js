class Character {

    constructor (name, hp, atk, xp) {
        this.name = name;
        this.maxhp = hp;
        this.hp = hp;
        this.atk = atk;
        this.xp = xp;
        this.potion = 1;
    }


    attack (target, efficiency) {

        //Si le joueur est en vie
        if (this.hp <= 0) {
            return `${this.name} est mort et ne peut pas attaquer!`
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
                    return `${this.name} attaque ${target.name}. Parré!! ${this.name} inflige ${damage} dmg!`
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
                    return `${this.name} a tué ${target.name} et gagne ${target.xp} xp!\n
                            ${this.name} a drop une potion!`
                }
                else {
                    return `${this.name} a tué ${target.name} et gagne ${target.xp} xp!`
                }
            }
        }

        else {
            return `${target.name} est déja mort, ${this.name} ne peut pas attaquer!`
        }
    }

    attackPfs(target) {

        //Si le joueur est en vie
        if (this.hp <= 0) {
            return `${this.name} est mort et ne peut pas attaquer!`
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
                return `${target.name} est déja mort, ${this.name} ne peut pas attaquer!`
            }
        }

    //Donne le nom, hp, atk et xp de
    describe () {
        return `${this.name} a ${this.hp} pv, ${this.atk} points d'attaque, ${this.potion} potion(s) et ${this.xp} xp.`
    }

    //TODO : tu remplace heal par usePotion
    // au cas ou t'ai d'autres potions
    // tu fais une methode AddHealth (et peut etre RemoveHealth)
    // que t'appelle ensuite en fonction de la potion choisie
    //Boire une potion
    heal () {

        //Si la personne peut boire une potion
        if (this.hp < this.maxhp) {

            //Verifie si il reste une potion, puis en retire une et soigne si il en reste
            if (this.potion === 0) {
                return `${this.name} n'a plus de potion!`
            }
            else {
                this.potion --;

                //Si la potion ne soigne pas totallement
                if (this.hp + potion.soins < this.maxhp) {
                    this.hp += potion.soins;
                    return `${this.name} bois une potion et récupère ${potion.soins} pv.`
                }

                //Si la potion remonte les hp au max
                else {
                    let soinsReduced = this.maxhp - this.hp;
                    this.hp += soinsReduced;
                    return `${this.name} bois une potion et récupère ${soinsReduced} pv.`

                }
            }
        }

        //Si la personne est morte
        else if (this.hp === 0) {
            return `${this.name} est mort.`
        }
        //Si les hp sont au max
        else {
            return `${this.name} est déja au maximum de sa santé!`
        }
    }

    //Level up?
    levelUp() {
        if (player.xp > 99) {
            //Echange 100 xp pour 10 atk
            player.atk += 10;
            player.xp -= 100;
            //Empèche xp d'être négatif
            if (player.xp < 0) {
                player.xp = 0;
            }
        }
    }

}

let potion = {
    soins: 50
};

let player = new Character("Roger", "100", "30", 0);
let monster = new Character("Filsdepute", "50", "20", 10);

console.log(player.describe());
console.log(monster.describe());

// console.log(player.attack(monster));
// console.log(monster.attack(player));
// console.log(player.attack(monster));
//
// console.log(player.describe());
//
console.log(player.heal());
//
// console.log(player.describe());
//
console.log(player.attackPfs(monster));
console.log(monster.attackPfs(player));
//
//
// console.log(player.describe());
// console.log(monster.describe());