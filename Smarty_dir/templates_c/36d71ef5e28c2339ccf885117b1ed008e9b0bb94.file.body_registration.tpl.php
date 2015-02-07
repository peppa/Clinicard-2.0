<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 13:00:13
         compiled from "Smarty_dir\templates\body_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2020454afc1e4c2cff3-32459926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36d71ef5e28c2339ccf885117b1ed008e9b0bb94' => 
    array (
      0 => 'Smarty_dir\\templates\\body_registration.tpl',
      1 => 1423309616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020454afc1e4c2cff3-32459926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afc1e4c5f2a4_57314826',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afc1e4c5f2a4_57314826')) {function content_54afc1e4c5f2a4_57314826($_smarty_tpl) {?><div class="title">
    <p>COMPILA LA FORM PER REGISTRARTI</p>
</div>

<div class="spacing"></div>

<!--<form class="button-form" method="POST" action="index.php?control=Registration&action=addUser">
    <table>
        <tr>
            <td><label class="field-label">Nome</label></td>
            <td><input class="input-field" type="text" name="name" placeholder="Nome"></td>
        </tr>

        <tr>
            <td><label class="field-label">Cognome</label></td>
            <td><input class="input-field" type="text" name="surname" placeholder="Cognome"></td>
        </tr>

        <tr>
            <td><label class="field-label">Codice Fiscale</label></td>
            <td><input class="input-field" type="text" name="CF" placeholder="Codice Fiscale"></td>
        </tr>


        <tr>
            <td><label class="field-label">Indirizzo Email</label></td>
            <td><input class="input-field" type="email" name="email" placeholder="Inserici email"></td>
        </tr>


        <tr>
            <td><label class="field-label">Username</label></td>
            <td><input class="input-field" type="text" name="username" placeholder="Username"></td>
        </tr>

        <tr>
            <td><label class="field-label">Password</label></td>
            <td><input class="input-field" type="password" name="password" placeholder="Password"></td>
        </tr>

        <tr>
            <td><button class="button" type="submit">Registrati</button></td>
        </tr>
        
    </table>
</form>-->

<form id="registration-form" method="POST" action="index.php?control=Registration&action=addUser">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Nome</label></p>
            <p><input class="input-field" id="nameReg" type="text" name="name" placeholder="Nome"></p>
            <p id="name-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Cognome</label></p>
            <p><input class="input-field" id="surnameReg" type="text" name="surname" placeholder="Cognome"/></p>
            <p id="surname-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Codice Fiscale</label></p>
            <p><input class="input-field" id="cfReg" type="text" name="CF" placeholder="Codice Fiscale"/></p>
            <p id="cf-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Indirizzo Email</label></p>
            <p><input class="input-field" id="email" type="text" name="email" placeholder="Email"/></p>
            <p id="email-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Username</label></p>
            <p><input class="input-field" id="username" name="username" placeholder="Username" autocomplete="off"></p>
            <p id="username-err" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Password</label></p>
            <p><input class="input-field" id="password" type="password" name="password1" placeholder="Password"></p>
            <p id="pass-strength" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Ripeti password</label></p>
            <p><input class="input-field" id="password-repeat" type="password" name="password2" placeholder="Password"></p>
            <p id="pass-match" hidden></p>
        </div>
    </div>
    
    <div class="row-buttons">
        <p> <button class="controlButton disabled" id="registration-button" type="submit"/>Registrati</button>
            <button class="controlButton" id="reset" type="reset"/>reset</button>
        </p>
    </div>
</form>

<div class="spacing"></div><?php }} ?>
