function afficherEvenement(){
  if(document.getElementById("event").style.display == "none")
  {
    document.getElementById("event").style.display = "block";
  }
  else document.getElementById("event").style.display = "none";
  document.getElementById("product").style.display = "none";
  document.getElementById("other").style.display = "none";
}

function afficherProduit(){
  if(document.getElementById("product").style.display == "none")
  {
    document.getElementById("product").style.display = "block";
  }
  else document.getElementById("product").style.display = "none";
  document.getElementById("event").style.display = "none";
  document.getElementById("other").style.display = "none";
}

function afficherTout(){
  if(doument.getElementById("other").style.diplay == "none")
  {
    doument.getElementById("other").style.diplay = "block";
  }
  else doument.getElementById("other").style.diplay = "none";
  document.getElementById("event").style.display = "none";
  document.getElementById("product").style.display = "none";
}
