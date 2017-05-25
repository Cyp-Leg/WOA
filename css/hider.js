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
  if(document.getElementById("other").style.display == "none")
  {
    document.getElementById("other").style.display = "block";
  }
  else document.getElementById("other").style.display = "none";
  document.getElementById("event").style.display = "none";
  document.getElementById("product").style.display = "none";
  document.getElementById("user").style.display = "none";
}

function afficherUsers(){
  if(document.getElementById("user").style.display == "none")
  {
    document.getElementById("user").style.display = "block";
  }
  else document.getElementById("user").style.display = "none";
  document.getElementById("other").style.display = "none";
}


function explaination(){
  alert('Hébergez votre image gratuitement (Hostingpics.com, casimage.net, etc..) et déposez le lien vers l\'image ici (exemple : https://img15.hostingpics.net/pics/exemple.jpg)');
}
