document.getElementById("button").addEventListener("click",function(){ // va chercher dans le document l'élément avec l'id = "" lorsque l'on clique dessus:
document.querySelector(".text").remove();
document.getElementById("newDialog").innerHTML = "<p> À votre table, vous essayez d'élaborer un plan d'action, mais à force de vous agacer et de grommeler vous laissez échapper votre épée, qui tombe au sol.</p><p>Vous la ramassez et en vous relevant, un vieil homme se tient devant votre table.</p><p>Il a remarqué que vous étiez un aventurier et vous demande ce pour quoi vos faites tant de bruit.</p><p>Vous lui racontez donc votre histoire.</p><p>L'homme touché de ce récit vous propose de vous aider mais à cause de son certain âge sa mémoire lui fait défaut, il n'arrive notamment pas à ce souvenir du chemin exact mais il vous évoque la possibilité d'explorer les zones alentour afin de débuter votre périple en quête de revanche.</p>"; 

});
