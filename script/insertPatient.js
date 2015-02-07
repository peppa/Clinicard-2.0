/* ------------------------------------------------*/
/*         validazione inserimento pazienti        */
/* ------------------------------------------------*/

$(document).on('blur','#nameDB',function(){validateNameDB()});

function validateNameDB(){
    var name=$('#nameDB').val();
    
    if (name===""){
        var message="Inserisci il nome del paziente";
        $("#nameDB").removeClass("input-field-ok");
        $('#name-err-DB').addClass("input-message-error");
        $('#name-err-DB').text(message);
        $('#name-err-DB').show();
    }
    else if(name.match(/[^A-Za-z\s\']/)){
        var message="Il nome puo' contenere solo lettere e spazi";
        $("#nameDB").removeClass("input-field-ok");
        $('#name-err-DB').addClass("input-message-error");
        $('#name-err-DB').text(message);
        $('#name-err-DB').show();
    }
    else {
        $("#nameDB").addClass("input-field-ok");
        $('#name-err-DB').hide();
    }
}

$(document).on('blur',"#surnameDB",function(){validateSurnameDB()});

function validateSurnameDB(){
    var cognome=$('#surnameDB').val();
    if (cognome===""){
        var message="Inserisci il cognome del paziente";
        $("#surnameDB").removeClass("input-field-ok");
        $('#surname-err-DB').addClass("input-message-error");
        $('#surname-err-DB').text(message);
        $('#surname-err-DB').show();
    }
    else if(cognome.match(/[^A-Za-z\s\']/)){
        var message="Il cognome puo' contenere solo lettere e spazi";
        $("#surnameDB").removeClass("input-field-ok");
        $('#surname-err-DB').addClass("input-message-error");
        $('#surname-err-DB').text(message);
        $('#surname-err-DB').show();
    }
    else {
        $("#surnameDB").addClass("input-field-ok");
        $('#surname-err-DB').hide();
    }
}

$(document).on('blur','#dateBirthDB',function(){valiDateBirthDB()});

function valiDateBirthDB(){
    var date=$('#dateBirthDB').val();
    
    if (date===""){
        var message="Inserisci la data di nascita completa del paziente";
        $("#dateBirthDB").removeClass("input-field-ok");
        $('#dateB-err-DB').addClass("input-message-error");
        $('#dateB-err-DB').text(message);
        $('#dateB-err-DB').show();
    }
    else{
        var year=$('#dateBirthDB').val().split('-')[0];
        
        if (year>2100 || year<1900){
            //se uso input type date il controllo su giorno e mese non serve
            var message="il formato della data non e' corretto";
            $("#dateBirthDB").removeClass("input-field-ok");
            $('#dateB-err-DB').addClass("input-message-error");
            $('#dateB-err-DB').text(message);
            $('#dateB-err-DB').show();
        }
        else{
            $('#dateB-err-DB').hide();
            $("#dateBirthDB").addClass("input-field-ok");
        }
    }
}

$(document).on('blur',"#cfDB",function(){validateCfDB()});

function validateCfDB(){
    var cf=$('#cfDB').val();
    if (cf===""){
        var message="Inserisci il codice fiscale del paziente";
        $("#cfDB").removeClass("input-field-ok");
        $('#cf-err-DB').addClass("input-message-error");
        $('#cf-err-DB').text(message);
        $('#cf-err-DB').show();
    }
    else if(cf.match(/[^A-Z0-9]/)){
        var message="Il codice fiscale puo' contenere solo lettere maiuscole e numeri";
        $("#cfDB").removeClass("input-field-ok");
        $('#cf-err-DB').addClass("input-message-error");
        $('#cf-err-DB').text(message);
        $('#cf-err-DB').show();
    }
    else if(cf.length!==16){
        var message="Il codice fiscale deve essere di 16 cifre";
        $("#cfDB").removeClass("input-field-ok");
        $('#cf-err-DB').addClass("input-message-error");
        $('#cf-err-DB').text(message);
        $('#cf-err-DB').show();
    }
    else {
        checkCFonDatabase(cf);
    }
}

function checkCFonDatabase(cf){
    $.ajax({
		type: "POST",
		url: "index.php?control=ajaxCall&task=checkCFPatient",
		dataType: "json",
                data: {"cf":cf},
                complete: function(result){
                    JSON.stringify(result);
                    if ( result.responseText==="true" ){
                        var message="Esiste gia' un paziente con questo codice fiscale nell'archivio";
                        $('#cfDB').removeClass("input-field-ok");
                        $('#cf-err-DB').addClass("input-message-error");
                        $('#cf-err-DB').text(message);
                        $('#cf-err-DB').show();                        
                    }
                    else{
                        $('#cf-err-DB').hide();
                        $('#cfDB').addClass("input-field-ok");
                    }
                }
	});
}
    

$(document).on('blur','#dateCheckDB',function(){valiDateCheckDB()});

function valiDateCheckDB(){
    var date=$('#dateCheckDB').val();
    
    if (date===""){
        var message="Inserisci la data della visita";
        $("#dateCheckDB").removeClass("input-field-ok");
        $('#dateC-err-DB').addClass("input-message-error");
        $('#dateC-err-DB').text(message);
        $('#dateC-err-DB').show();
    }
    else{
        var year=$('#dateCheckDB').val().split('-')[0];
        
        if (year>2100 || year<1900){
            var message="il formato della data non e' corretto";
            $("#dateCheckDB").removeClass("input-field-ok");
            $('#dateC-err-DB').addClass("input-message-error");
            $('#dateC-err-DB').text(message);
            $('#dateC-err-DB').show();
        }
        else{
            $('#dateC-err-DB').hide();
            $("#dateCheckDB").addClass("input-field-ok");
        }
    }
}

$(document).on('blur','.input-area',function(){validateAreas()});

function validateAreas(){ //tutti i campi textarea sono facoltativi
    $('.input-area').each(function(){
        if ($(this).val()!==""){
            $(this).addClass("input-field-ok");
        }
        else {
            $(this).removeClass("input-field-ok");
        }
    });
}

$(document).on('blur','.input-field',function(){activateButtonInsPat()});

function activateButtonInsPat(){
    completed=checkFormCompletedPat();
    if (completed===true) {
        $('#insertNew').removeAttr("disabled");
        $('#insertNew').removeClass("disabled");        
    }
}

function checkFormCompletedPat(){
    var completed = false;
    if($("#nameDB").val().length > 0 && 
       $("#surnameDB").val().length > 0 &&
       $("#dateBirthDB").val().length > 0 &&
       $("#cfDB").val().length > 0 &&
       $("#dateCheckDB").val().length > 0)
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