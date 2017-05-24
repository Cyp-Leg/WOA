/*var affichage = document.getElementById('connexionBoutton');

affichage.onclick = function(){
  if(document.getElementById('connexion').style.display == "none"){
    document.getElementById('connexion').style.display = "block";
    document.getElementById('inscription').style.display = "none";
  }
  else{
    document.getElementById('connexion').style.display = "none";
  }
}*/


/*d'ailleurs tu peux aussi faire function afficherConnection(){
 document.getElementByID("newNom") etc
}
 et dans ce cas là bon bouton doit avoir ça id="modifierNom" onclick="afficherNom();"

Sinon dans le cas que je t'avais envoyé avant tu mets juste l'id dans le bouton : id="inscriptionBoutton"*/


function afficherEvenement(){
  document.getElementById("event").style.display = "block";
}

function afficherProduit(){
  document.getElementById("product").style.display = "block";
}
