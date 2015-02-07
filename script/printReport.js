/* ------------------------------------------------*/
/*                 stampa report                   */
/* ------------------------------------------------*/

$(document).on('click','.checkbox-field,#select-all',function(){activateReportButton()});

function activateReportButton(){
    check=false;
    $('.checkbox-field').each(function(){
        if (this.checked===true){
            check=true;
        }
    });
    if (check===true){
        $('#printReport').removeClass("disabled");
        $('#printReport').removeAttr("disabled");
    }
    else { //altrimenti una volta attivato il bottone lo resta sempre
        $('#printReport').addClass("disabled");
        $('#printReport').attr("disabled","disabled");
    }
}

$(document).ready(function(){ //spunta tutti i checkbox
        $('#select-all').click(function() {
            if(this.checked){
                $('.checkbox-field').each(function(){
                    this.checked=true;
                });
            }
            else{
                $('.checkbox-field').each(function(){
                    this.checked=false;
                });
            }
        });
        });


