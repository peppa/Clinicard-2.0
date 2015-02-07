/* ------------------------------------------------*/
/*         validazione inserimento visita         */
/* ------------------------------------------------*/

$(document).on('blur','#dateChDB',function(){valiDateChDB()});

function valiDateChDB(){
    var date=$('#dateChDB').val();
    
    if (date===""){
        var message="Inserisci la data della visita";
        $("#dateChDB").removeClass("input-field-ok");
        $('#dateCh-err-DB').addClass("input-message-error");
        $('#dateCh-err-DB').text(message);
        $('#dateCh-err-DB').show();
    }
    else{
        var year=$('#dateChDB').val().split('-')[0];
        
        if (year>2100 || year<1900){//se uso input type date il controllo su giorno e mese non serve            
            var message="il formato della data non e' corretto";
            $("#dateChDB").removeClass("input-field-ok");
            $('#dateCh-err-DB').addClass("input-message-error");
            $('#dateCh-err-DB').text(message);
            $('#dateCh-err-DB').show();
        }
        else{
            $('#dateCh-err-DB').hide();
            $("#dateChDB").addClass("input-field-ok");
        }
    }
}

$(document).on('blur','.input-area',function(){validateAreas()});

function validateAreas(){ //questi campi sono facoltativi
    $('.input-area').each(function(){
        if ($(this).val()!==""){
            $(this).addClass("input-field-ok");
        }
        else {
            $(this).removeClass("input-field-ok");
        }
    });
}

$(document).on('blur','#dateChDB',function(){activateButtonInsCh()});

function activateButtonInsCh(){
    completed=checkFormCompletedCh();
    if (completed===true) {
        $('#insertNewCh').removeAttr("disabled");
        $('#insertNewCh').removeClass("disabled");        
    }
}

function checkFormCompletedCh(){
    var completed = false;
    if($("#dateChDB").val().length > 0)
    {
            completed = true;
    }

    return completed;
}

$(document).on('click','#reset',function(){resetFields()})

function resetFields(){
    $('*').removeClass("input-field-ok");
    $('.no-input').hide();
}



