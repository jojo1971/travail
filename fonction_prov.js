var object_XMLHTTPRequest = function(){
    var mavariable = null;

    if(window.XMLHTTPRequest || window.ActiveXObject){
        if(window.ActiveXObject){
            try{
                mavariable =new ActiveXObject('msxml2', 'XMLHTTP');
            }catch (e){
                mavariable = new ActiveXObject('Microsoft', 'XMLHTTP');
            }
        }else{
            mavariable = new XMLHttpRequest();
        }
    }else{
        alert('navigateur incompatible !');
        return null;
    }
};


