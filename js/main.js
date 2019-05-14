class Character {

    constructor (name, hp, atk, xp) {
        this.name = name;
        this.maxhp = hp;
        this.hp = hp;
        this.atk = atk;
        this.xp = xp;
        this.potion = 3;
    }

    attack (target) {
        //Vérifie si la cible à de la vie
        if (target.hp > 0) {

            //Si l'attaque ne tue pas la cible
            if (target.hp - this.atk > 0) {
                target.hp -= this.atk;
                return `${this.name} attaque ${target.name} et lui inflige ${this.atk} dmg!`
            }

            //Si l'attaque tue
            else {
                target.hp = 0;
                this.xp += target.xp;
                return `${this.name} a tué ${target.name} et gagne ${target.xp} xp!`
            }
        }
        else {
            return `${target.name} est déja mort!`
        }
    }

    //Donne le nom, hp, atk et xp de
    describe () {
        return `${this.name} a ${this.hp} pv, ${this.atk} points d'attaque, ${this.potion} potion(s) et ${this.xp} xp.`
    }

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
}

let potion = {
    soins: 50
};

let player = new Character("Roger", "100", "30", 0);
let monster = new Character("Filsdepute", "50", "20", 10);

console.log(player.describe());
console.log(monster.describe());

console.log(player.attack(monster));
console.log(monster.attack(player));
console.log(player.attack(monster));

console.log(player.describe());

console.log(player.heal());

console.log(player.describe());
