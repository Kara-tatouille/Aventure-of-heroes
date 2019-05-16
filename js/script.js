

//Buttons
const buttonStart = document.getElementById('btnStart');
const buttonForest = document.getElementById('btnForest');
const buttonPlain = document.getElementById('btnPlain');
const buttonCaveFromPlains = document.getElementById('btnCaveFromPlains');
const buttonHarborFromPlains = document.getElementById('btnHarborFromPlains');
const buttonCaveFromForest = document.getElementById('btnCaveFromForest');
const buttonHarborFromForest = document.getElementById('btnHarborFromForest');
const buttonJungleFromCave = document.getElementById('btnJungleFromCave');
const buttonSwampFromCave = document.getElementById('btnSwampFromCave');
const buttonJungleFromHarbor = document.getElementById('btnJungleFromHarbor');
const buttonSwampFromHarbor = document.getElementById('btnSwampFromHarbor');
const buttonCastleFromJungle = document.getElementById('btnCastleFromJungle');
const buttonCastleFromSwamp = document.getElementById('btnCastleFromSwamp');

//Divs
const divIntro = document.getElementById('intro');
const divTavern = document.getElementById('tavern');
const divForest = document.getElementById('forest');
const divPlain = document.getElementById('plains');
const divCave = document.getElementById('cave');
const divHarbor = document.getElementById('harbor');
const divJungle = document.getElementById('jungle');
const divSwamp = document.getElementById('swamp');
const divCastle = document.getElementById('castle');

//Aller à la Taverne depuis l'intro
buttonStart.addEventListener('click', function(){
    divIntro.classList.add('noDisplay');
    divTavern.classList.remove('noDisplay');
});

//Aller dans la Forêt depuis la Taverne
buttonForest.addEventListener('click', function(){
    divTavern.classList.add('noDisplay');
    divForest.classList.remove('noDisplay');
    //let childForest = document.getElementsByClassName('');
});

//Aller dans les plaines depuis la Taverne
buttonPlain.addEventListener('click', function(){
    divTavern.classList.add('noDisplay');
    divPlain.classList.remove('noDisplay');
});

//Aller dans le souterrain depuis les Plaines
buttonCaveFromPlains.addEventListener('click', function() {
    divPlain.classList.add('noDisplay');
    divCave.classList.remove('noDisplay');
});

//Aller dans le port depuis les Plaines
buttonHarborFromPlains.addEventListener('click', function() {
    divPlain.classList.add('noDisplay');
    divHarbor.classList.remove('noDisplay');
});

//Aller dans le souterrain depuis la Forêt
buttonCaveFromForest.addEventListener('click', function() {
    divForest.classList.add('noDisplay');
    divCave.classList.remove('noDisplay');
});

//Aller dans le port depuis la Forêt
buttonHarborFromForest.addEventListener('click', function() {
    divForest.classList.add('noDisplay');
    divHarbor.classList.remove('noDisplay');
});

//Aller dans le marécage depuis le Port
buttonSwampFromHarbor.addEventListener('click', function() {
    divHarbor.classList.add('noDisplay');
    divSwamp.classList.remove('noDisplay');
});

//Aller dans la jungle depuis le Port
buttonJungleFromHarbor.addEventListener('click', function() {
    divHarbor.classList.add('noDisplay');
    divJungle.classList.remove('noDisplay');
});

//Aller dans le marécage depuis le Souterrain
buttonSwampFromCave.addEventListener('click', function() {
    divCave.classList.add('noDisplay');
    divSwamp.classList.remove('noDisplay');
});

//Aller dans le jungle depuis le Souterrain
buttonJungleFromCave.addEventListener('click', function() {
    divCave.classList.add('noDisplay');
    divJungle.classList.remove('noDisplay');
});

//Aller défier le Boss depuis le Marécage
buttonCastleFromSwamp.addEventListener('click', function() {
    divSwamp.classList.add('noDisplay');
    divCastle.classList.remove('noDisplay');
});

//Aller défier le Boss depuis la Jungle
buttonCastleFromJungle.addEventListener('click', function() {
    divJungle.classList.add('noDisplay');
    divCastle.classList.remove('noDisplay');
});