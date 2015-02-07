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
        //var day=$('#dateChDB').val().split('-')[2];
        //var month=$('#dateChDB').val().split('-')[1];
        var year=$('#dateChDB').val().split('-')[0];
        
        if (year>2100 || year<1900){
            //se uso input type date il controllo su giorno e mese non serve
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

// Finche tutti gli script stanno sullo stesso file quello di inerisci paziente
// funziona anche per inserisci visita

//$(document).on('blur','.input-area',function(){validateAreas()});
//
//function validateAreas(){ //questi campi sono facoltativi
//    $('.input-area').each(function(){
//        if ($(this).val()!==""){
//            $(this).addClass("input-field-ok");
//        }
//        else {
//            $(this).removeClass("input-field-ok");
//        }
//    });
//}

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

    if (window.location.href.match(/newVisit/)){ //questo comando non serve se il file viene diviso in più file
	if($("#dateChDB").val().length > 0)
	{
		completed = true;
	}

	return completed;
    }
}



