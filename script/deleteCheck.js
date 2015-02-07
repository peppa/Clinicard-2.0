/* ------------------------------------------------*/
/*            controllo ultima visita              */
/* ------------------------------------------------*/

$(document).ready(function(){
    checkLastVisit();
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


