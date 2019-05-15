let forest = document.getElementById("#foret");
let plains = document.getElementById("#plaine");
let intro = document.getElementById("#intro");

document.querySelector(".choix1").addEventListener("click",function () {
    plains.classList.add("noDisplay");
    forest.classList.remove("noDisplay");
});

document.querySelector(".choix2").addEventListener("click",function () {
    intro.classList.add("noDisplay");
    plains.classList.remove("noDisplay");
});