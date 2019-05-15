document.getElementById("button").addEventListener("click",function(){ // va chercher dans le document l'élément avec l'id = "" lorsque l'on clique dessus:
var oldParagrapheElt = document.getElementById("newDialog");// créé une variable en reprenant l'élément qui a la classe ""
var newParagrapheElt = document.createElement("div");// créé une variable et lui donne la forme d'une div
newParagrapheElt.id = "newDialog";// Donne l id a la variable div
newParagrapheElt.textContent = "okokok";
document.getElementById("newDialog").replaceChild(newParagrapheElt, oldParagrapheElt);// va chercher dans le document le conteneur identifié, et remplace son contenu 
});