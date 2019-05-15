document.getElementById("button").addEventListener("click",function(){ // va chercher dans le document l'élément avec l'id = "" lorsque l'on clique dessus:
var olddivElt = document.getElementById("newDialog");// créé une variable en reprenant l'élément qui a la classe ""
var newdivElt = document.createElement("div");// créé une variable et lui donne la forme d'une div
newdivElt.id = "newDialog";// Donne l id a la variable div
newdivElt.textContent = "okokok";
document.getElementById("newDialog").replaceChild(newdivElt, olddivElt);// va chercher dans le document le conteneur identifié, et remplace son contenu 
});