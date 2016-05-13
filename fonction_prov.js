function objet_XMLHttpRequest(){
    var mavariable = null;
    if(window.XMLHttpRequest || window.ActiveXObject){
        if(window.ActiceXObject){
            try{
                mavariable = new ActiveXObject('Msxml2, XMLHTTP');
            }catch (e){
                mavariable = new  ActiveXObject('Microsoft, XMLHTTP');
            }
        }else{
            mavariable = new XMLHttpRequest();
        }
    }else{
        alert('navigateur incompatible');
    }
    return mavariable;
}

function teste_ajax(){
    var mavariable = objet_XMLHttpRequest();
    var pseudo = document.getElementById('pseudo').value,
        message = document.getElementById('message').value;

    if(pseudo == ''){
        alert('pseudo ?');
        return false;
    }
    if(message == ''){
        alert('message?');
        return false;
    }
     mavariable.open('POST', 'traitement_prov.php', true);
    mavariable.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    mavariable.send('pseudo='+pseudo+'&message='+message);

    mavariable.onreadystatechange = function () {
        if(mavariable.readyState == 4 && mavariable.status == 200){
            document.getElementById('mondiv').innerHTML = mavariable.responseText;
            document.getElementById('pseudo').value = '';
            document.getElementById('message').value = '';
        }
    };

}