/* ------------------------------------------------*/
/*            controllo ultima visita              */
/* ------------------------------------------------*/

//il file va richiamato quando viene caricato il tpl confirmDelCheck

$(document).ready(function(){
    if (window.location.href.match(/delCheck/)){ //non serve se viene diviso il file
        checkLastVisit();
    }
});

function checkLastVisit(){
    var encCF=window.location.href.split('p=')[1].split('&')[0];
    
    $.ajax({
        type: "POST",
        url: "index.php?control=ajaxCall&task=checkLastVisit",
        dataType: "json",
        data: {"encCF":encCF},
        success: function(result){
            //numResult=JSON.stringify(result).responseJSON;
            if (result["num"]===1){
                $('#last-check').show();
            }
        }
    });
}


