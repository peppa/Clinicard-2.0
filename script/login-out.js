/* ------------------------------------------------*/
/*                login-logout                     */
/* ------------------------------------------------*/

$(document).ready(function(){showLoginBox()});

function showLoginBox(){
    $.ajax({
            type: "GET",
            url: "index.php?control=ajaxCall&task=checkLoggedIn",
            dataType: "json",
            complete: function(result){
                if (result.responseJSON===false || $.cookie("username")===undefined){
                    $('#logoutTPL').hide();
                    $('#loginTPL').show();
                }
                else {
                    $('#loginTPL').hide();
                    $('#login-error').hide();
                    $('#logoutTPL').show();
                    $('#show-username').html("Ciao "+$.cookie("username"));
                }
            }
    });
}
//
$(document).on('click','#login',function(){handleLogin()});

function handleLogin(){
    username=$('#userLogin').val();
    password=$('#passLogin').val();
    if ($('#rememberLogin').prop('checked')===true){
        remember=true;
    }
    else {
        remember=false;
    }
    
    $.ajax({
            type: "GET",
            url: "index.php?control=ajaxCall&task=login",
            dataType: "text",
            data: {"user":username,"pass":password,"remember":remember},
            complete: function(result){
                if (result.responseText==="true"){
                    if (remember===true){
                        $.cookie("username",username,{expires: 60}); //valido in tutto il dominio
                    }
                    else {
                        $.cookie("username",username) //scade con la sessione
                    }
                    $('#loginTPL').hide();
                    $('#login-error').hide();
                    $('#logoutTPL').show();
                    $('#show-username').html("Ciao "+$.cookie("username"));
                    location.reload();
                }
                else if (result.responseText==="false"){
                    $('#login-error').show();
                    $('#login-error').html("Username o password non corretti");
                }
            }
    });
}

$(document).on('click','#logout',function(){handleLogout()});

function handleLogout(){
    $.ajax({
            type: "GET",
            url: "index.php?control=ajaxCall&task=logout",
            complete: function(){
                $('#logoutTPL').hide();
                $('#loginTPL').show();
                $.removeCookie("username");
                location.reload();
            }
    })
}


