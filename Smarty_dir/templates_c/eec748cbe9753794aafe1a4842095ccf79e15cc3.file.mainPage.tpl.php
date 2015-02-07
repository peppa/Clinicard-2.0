<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 10:28:27
         compiled from "Smarty_dir\templates\mainPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:780854afb0ab0257b0-68725298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec748cbe9753794aafe1a4842095ccf79e15cc3' => 
    array (
      0 => 'Smarty_dir\\templates\\mainPage.tpl',
      1 => 1423300961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '780854afb0ab0257b0-68725298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afb0ab02bb77_41264744',
  'variables' => 
  array (
    'header' => 0,
    'isDoctor' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afb0ab02bb77_41264744')) {function content_54afb0ab02bb77_41264744($_smarty_tpl) {?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
	<title>Clinicard</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="css/myStyle.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="css/myStyle_2.css" rel="stylesheet" type="text/css"  media="all" />
        <meta name="keywords" content="clinicard" />
        
        <script src="./lib/js/jquery-2.1.3.min.js"></script>
        <script src="./lib/js/jquery.cookie.js"></script>
        <script src="./script/cookies.js"></script>
        <script src="./script/login-out.js"></script>
        
        <?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

        <?php }?>
        
        <noscript>
            <div id="script-disabled" class="errormsg">
                Per avere a disposizione tutte le funzionalit&agrave; di questa applicazione web &egrave necessario abilitare
                Javascript. Qui ci sono tutte le <a href="http://www.enable-javascript.com/it/"
                target="_blank"> istruzioni su come abilitare JavaScript nel tuo browser</a>.
            </div>
        </noscript>
        
        <div id="cookie-disabled" class="errormsg" hidden>
            I cookie sono disabilitati. Affinch&egrave; questa applicazione funzioni al meglio &egrave; necessario
            che siano attivati.
        </div>
        
        <div id="cookie-bar" hidden>
            <p>Questa applicazione web utilizza i cookie. Proseguendo acconsenti al loro utilizzo.<a href="" id="cookie-accepted" class="cb-enable">Ho capito</a></p>
        </div>


    </head>
    
    <body>
        <div class="header">
            <div class="wrap">
                <div class="logo">
                    <a href="index.php"><img src="images/logo_mine.png" title="logo" /></a>
                </div>

<!-- login -->
                <div class="log">
                    <div id="loginTPL" hidden>
                        <div>
                            <p id="login-error" class="no-input input-message-error" hidden><p>
                            <p><input id="userLogin" class="input-field-login" type="text" name="username" placeholder="username"></p>
                            <p><input id="passLogin" class="input-field-login" type="password" name="password" placeholder="password"></p>
                            <p><input id="rememberLogin" type="checkbox" name="keepLogged" value="yes">Ricordami <input id="login" value="Accedi"></p>
                        </div>
                    </div>

                <div id="logoutTPL" hidden>
                    <!--<form method="POST" action="index.php?control=logout">-->
                        <p id="show-username"></p>
                        <p><input id="logout"value="Esci"></p>
                   <!-- </form>-->
                </div>  

                </div>





            </div>
            <div class="clear"> </div>
        </div>

        <div class="topnav">
            <ul id="topnav">
                <li class="nav_top">
                    <a href="index.php">Home</a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['isDoctor']->value)) {?>
                <li class="nav_top">
                    <a href="index.php?control=manageDB">Pazienti</a>
                </li>
                <?php } else { ?>
                <li class="nav_top">
                    <a href="index.php?control=Services">Serivizi</a>
                </li>
                <?php }?>
                <li class="nav_top">
                    <a href="index.php?control=VisitBooking">Prenota visita</a>
                </li>
                <li class="nav_top">
                    <a href="index.php?control=Registration">Registrazione</a>
                </li>

                <li class="nav_top">
                    <a href="index.php?control=Contacts">Contatti</a>
                </li>
            </ul>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['body']->value;?>


        <div class="separate"></div>
        <div class="footer">
            <div class="left-content">
                <a href="index.php"><img src="images/logo_footer.png" title="logo" /></a>
            </div>
            <div class="contactInfo">
                <p><text class="footerCategory">Indirizzo:</text> via del tutto eccezionale n.&infin;</p>
                <p><text class="footerCategory">Telefono:</text>  101-8008555</p>
                <p><text class="footerCategory">Email:</text>  clinicard@gmail.com</p>
            </div>
            <div class="shareButtons">
                <a href=""><img alt="follow me on twitter" src="//login.create.net/images/icons/user/twitter_30x30.png" border=0></a>
                <a href=""><img alt="follow me on twitter" src="//login.create.net/images/icons/user/twitter-b_30x30.png" border=0></a>
                <a href=""><img alt="follow me on facebook" src="//login.create.net/images/icons/user/facebook_30x30.png" border=0></a>
            </div>
            <div class="right-content">
                <p>Healthy  &#169	 All Rights Reserved | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
            </div>
            <div class="clear"> </div>
        </div>

    </body>
</html>

<?php }} ?>
