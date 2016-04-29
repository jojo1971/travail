//Fonction d'instance permettant de vérifier si le navigateur supporte l'objet XMLHTTPRequest
function objet_XMLHttpRequest() {
//On déclare une variable "mavariable" à null
    var mavariable = null;
//Teste si le navigateur prend en charge les XMLHttpRequest
    if (window.XMLHttpRequest || window.ActiveXObject) {
// Si Internet Explorer alors on utilise les ActiveX
        if (window.ActiveXObject) {
//On teste IE7 ou supérieur
            try {
                mavariable = new ActiveXObject("Msxml2.XMLHTTP");
            }
//Si une erreur est levée, alors c'est IE 6 ou inférieur
            catch (e) {
                mavariable = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
//Navigateurs récents (Firefox, Opéra, Chrome, Safari, ...)
        else {
            mavariable = new XMLHttpRequest();
        }
    }
//XMLHttpRequest non supporté par le navigateur
    else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }
//On retourne l'objet mavariable
    return mavariable;
}




function teste_ajax() {

//On déclare une variable
    var mavariable = objet_XMLHttpRequest();

//récupération des données
    var pseudo = encodeURIComponent(document.getElementById("pseudo").value);
    var message = encodeURIComponent(document.getElementById("message").value);

//Si le pseudo est vide
    if (pseudo == '') {
//On lance une alert
        alert('Pseudo vide!');
//On stop tout
        return false;
    }
//idem pour le message
    if (message == '') {
        alert('Message vide!');
        return false;
    }

//On assigne une fonction à la propriété onreadystatechange
    mavariable.onreadystatechange = function () {
//Si l'attribut readyState renvoie 4 et que l'attribut status renvoie 200
        if (mavariable.readyState == 4 && mavariable.status == 200) {
//On affiche le résultat chargé dans l'attribut responseText qui est affiché dans un div nommé "mondiv"
            document.getElementById("mondiv").innerHTML = mavariable.responseText;
//On vide le champ message
            document.getElementById("message").value = '';
        }
    };

    //On déclare la méthode d'envoie
    mavariable.open("POST", "traitement.php", true);
//On assigne un header
    mavariable.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//On envoie
    mavariable.send("pseudo=" + pseudo + "&message=" + message);
}