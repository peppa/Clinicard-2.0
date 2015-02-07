/* ------------------------------------------------*/
/*              prefill modPatient                 */
/* ------------------------------------------------*/

$(document).ready(function(){        
    urlString=window.location.href; //prende l'url della pagina corrente
    splitUrlArray = urlString.split('='); //divide l'url in base al carattere specificato
    var EncCF=splitUrlArray[3]; //prende l'ultimo elemento dell'array (md5 del codice fiscale)
    
    $.ajax({
        type: "POST",
        url: "index.php?control=ajaxCall&task=preFillPat",
        dataType: "json",
        data: {"cf":EncCF},
        success: function(array){
            $('#modName').val(array["name"]);
            $('#modSurname').val(array["surname"]);
            $('#modDateBirth').val(array["dateB"]);
            $('#modCF').val(array["CF"]);
            if (array["gender"]==="M"){
                 $(':radio[value="M"]').attr('checked', 'checked');
            }
            else {
                $(':radio[value="F"]').attr('checked', 'checked');
            }
        }
    });
});


