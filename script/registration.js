/* ------------------------------------------------*/
/*       validazione form registrazione            */
/* ------------------------------------------------*/

$(document).on("keyup change", "#password,#password-repeat", function(){passwordMatch()});

$(document).ready(function(){
        $("#password").on("keyup change", function() {
            var password = this.value;
            checkStrength(password);
            $('#pass-strength').show();
            $('#pass-strength').text(result);
    });
});

function checkStrength(password){
    var totStrength=0;
    if (password.length>4){
        totStrength++;
    }
    if (password.length>10){
        totStrength++;
    }
    if (password.match(/\d/)){ //numeri
        totStrength++;
    }
    if (password.match(/\s/)){//spazi vuoti
        totStrength++;
    }
    if (password.match(/[A-Z]/)){//lettere maiuscole
        totStrength++;
    }
    
    if (totStrength===0){
        result="password non valida";
        $('#pass-strength').css({"border-color":"#FF0000","background-color":"#F75D59"});
    }
    else if (totStrength===1){
        result="sicurezza password: molto debole";
        $('#pass-strength').css({"border-color":"#FF0000","background-color":"#F75D59"});
    }
    else if (totStrength===2){
        result="sicurezza password: debole";
        $('#pass-strength').css({"border-color":"#F88017","background-color":"#FF7F50"});
    }
    else if (totStrength===3){
        result="sicurezza password: media";
        $('#pass-strength').css({"border-color":"#F88017","background-color":"#FF7F50"});
    }
    else if (totStrength===4){
        result="sicurezza password: forte";
        $('#pass-strength').css({"border-color":"#00FF00","background-color":"#BCE954"});
    }
    else if (totStrength===5){
        result="sicurezza password: molto forte";
        $('#pass-strength').css({"border-color":"#00FF00","background-color":"#BCE954"});
    }
}

function passwordMatch(){
    var pass1=$('#password').val();
    var pass2=$('#password-repeat').val();
    
    if (pass1!=="" && pass2!=="" && pass1===pass2){
        $('#pass-match').hide();
        $("#password").addClass("input-field-ok");
        $("#password-repeat").addClass("input-field-ok");
    }
    else {
        $("#password").removeClass("input-field-ok");
        $("#password-repeat").removeClass("input-field-ok");
        $('#pass-match').show();
        $('#pass-match').text("Le due password non coincidono");
        $('#pass-match').addClass("input-message-error");
    }
}



$(document).on('blur', "#username", function() { validateUsername()}); 

function validateUsername(){
	var user = $("#username").val();
	if(user === ''){
            $('#username-err').show();
            $("#username-err").text("Inserisci un username");
            $("#username").removeClass("input-field-ok");
            $('#username-err').addClass("input-message-error");
	} 
        else{
		checkUsernameOnDatabase(user);
	}
}

function checkUsernameOnDatabase( usernameP ) {
	$.ajax({
		type: "POST",
		url: "index.php?control=ajaxCall&task=checkUsername",
		dataType: "json",
                data: {"user":usernameP},
                complete: function(result){
                    JSON.stringify(result);
                    if ( result.responseText==="false"){
                        $('#username-err').hide();
                        $('#username').addClass("input-field-ok");
                    }
                    else if ( result.responseText==="true") {
                        var message="username non disponibile";
                        $('#username').removeClass("input-field-ok");
                        $('#username-err').addClass("input-message-error");
                        $('#username-err').text(message);
                        $('#username-err').show();
                    }
                }
	});
}

$(document).ready(function(){ //fa il reset di tutit i campi 
    $('#reset').click(function(){
        $('*').removeClass("input-field-ok"); //rimuove i bordi verdi da tutti i campi
        $('.no-input,#pass-strength,#pass-match').hide(); //nasconde tutti i messaggi di info/errore sotto ai campi
    });
});

$(document).on('blur',"#nameReg",function(){validateName()});

function validateName(){
    var name=$('#nameReg').val();
    if (name===""){
        var message="Inserisci il tuo nome";
        $("#nameReg").removeClass("input-field-ok");
        $('#name-err').addClass("input-message-error");
        $('#name-err').text(message);
        $('#name-err').show();
    }
    else if(name.match(/[^A-Za-z\s\']/)){ //lettere upp e low, spazi, apostrofo
        var message="Il nome puo' contenere solo lettere e spazi";
        $("#nameReg").removeClass("input-field-ok");
        $('#name-err').addClass("input-message-error");
        $('#name-err').text(message);
        $('#name-err').show();
    }
    else {
        $("#nameReg").addClass("input-field-ok");
        $('#name-err').hide();
    }
}

$(document).on('blur',"#surnameReg",function(){validateSurname()});

function validateSurname(){
    var surname=$('#surnameReg').val();
    if (surname===""){
        var message="Inserisci il tuo cognome";
        $("#surnameReg").removeClass("input-field-ok");
        $('#surname-err').addClass("input-message-error");
        $('#surname-err').text(message);
        $('#surname-err').show();
    }
    else if(surname.match(/[^A-Za-z\s\']/)){ //lettere upp e low, spazi, apostrofo
        var message="Il cognome puo' contenere solo lettere e spazi";
        $("#surnameReg").removeClass("input-field-ok");
        $('#surname-err').addClass("input-message-error");
        $('#surname-err').text(message);
        $('#surname-err').show();
    }
    else {
        $("#surnameReg").addClass("input-field-ok");
        $('#surname-err').hide();
    }
}

$(document).on('blur',"#cfReg",function(){validateCF()});

function validateCF(){
    var cf=$('#cfReg').val();
    if (cf===""){
        var message="Inserisci il tuo codice fiscale";
        $("#cfReg").removeClass("input-field-ok");
        $('#cf-err').addClass("input-message-error");
        $('#cf-err').text(message);
        $('#cf-err').show();
    }
    else if(cf.match(/[^A-Z0-9]/)){ //lettere maiuscole e numeri
        var message="Il codice fiscale puo' contenere solo lettere maiuscole e numeri";
        $("#cfReg").removeClass("input-field-ok");
        $('#cf-err').addClass("input-message-error");
        $('#cf-err').text(message);
        $('#cf-err').show();
    }
    else if(cf.length!==16){
        var message="Il codice fiscale deve essere di 16 cifre";
        $("#cfReg").removeClass("input-field-ok");
        $('#cf-err').addClass("input-message-error");
        $('#cf-err').text(message);
        $('#cf-err').show();
    }
    else {
        checkCFonDB(cf);
    }
}

function checkCFonDB(cf){
    $.ajax({
            type: "POST",
            url: "index.php?control=ajaxCall&task=checkCFUser",
            dataType: "json",
            data: {"cf":cf},
            complete: function(result){
                JSON.stringify(result);
                if ( result.responseJSON===false ){
                    var message="Esiste gia' un utente registrato con questo codice fiscale";
                    $('#cfReg').removeClass("input-field-ok");
                    $('#cf-err').addClass("input-message-error");
                    $('#cf-err').text(message);
                    $('#cf-err').show();                        
                }
                else{
                    $('#cf-err').hide();
                    $('#cfReg').addClass("input-field-ok");
                }
            }
    });
}

$(document).on('blur',"#email",function(){validaEmail()});

function validaEmail(){
    var email=$('#email').val();
    if (email===""){
        var message="inserisci la tua email";
        $('#email').removeClass("input-field-ok");
        $('#email-err').addClass("input-message-error");
        $('#email-err').text(message);
        $('#email-err').show();
    }
    else {
        checkEmailOnDatabase(email);
    }
}

function checkEmailOnDatabase(email){
    $.ajax({
		type: "POST",
		url: "index.php?control=ajaxCall&task=checkEmail",
		dataType: "json",
                data: {"mail":email},
                complete: function(result){
                    JSON.stringify(result);
                    if ( result.responseText==="false"){
                        $('#email-err').hide();
                        $('#email').addClass("input-field-ok");
                    }
                    else if ( result.responseText==="true") {
                        var message="questo indirizzo email e' gia' in uso";
                        $('#email').removeClass("input-field-ok");
                        $('#email-err').addClass("input-message-error");
                        $('#email-err').text(message);
                        $('#email-err').show();
                    }
                }
});
}

$(document).on('blur',':text,:password',function(){activateButtonReg()});

function activateButtonReg(){
    completed=isFormRegCompleted();
    if (completed===true) {
        $('#registration-button').removeAttr("disabled");
        $('#registration-button').removeClass("disabled");        
    }
}

function isFormRegCompleted(){
    var completed = false;
    if($("#nameReg").val().length > 0 && 
       $("#surnameReg").val().length > 0 &&
       $("#username").val().length > 0 &&
       $("#cfReg").val().length > 0 &&
       $("#email").val().length > 0 &&
       $("#password").val().length > 0 &&
       $("#password-repeat").val().length > 0)
    {
            completed = true;
    }
    return completed;
}

//serve per tornare indietro alla form nel caso in cui c'è un errore nei dati inseriti
$(document).on('click',"#errorBack", function(){window.history.back()});

