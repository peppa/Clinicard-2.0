<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 19:12:11
         compiled from "Smarty_dir\templates\body_insertPatient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2806354afb70d10b2d9-94593830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b2407f8f3e469233ad47afd7d9228ea4404721c' => 
    array (
      0 => 'Smarty_dir\\templates\\body_insertPatient.tpl',
      1 => 1423332382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2806354afb70d10b2d9-94593830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afb70d13f753_85450560',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afb70d13f753_85450560')) {function content_54afb70d13f753_85450560($_smarty_tpl) {?><div class="title">
    <p>INSERISCI I DATI DEL PAZIENTE</p>
</div>

<div class="spacing"></div>

<form method="POST">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Nome</label></p>
            <p><input class="input-field" id="nameDB" type="text" name="name"/></p>
            <p id="name-err-DB" class="no-input" hidden>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Cognome</label></p>
            <p><input class="input-field" id="surnameDB" type="text" name="surname"/></p>
            <p id="surname-err-DB" class="no-input" hidden>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Sesso</label></p>
            <p>
                <input type="radio" name="gender" value="M"> M
                <input type="radio" name="gender" value="F"> F
            </p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Data di nascita</label></p>
            <p><input id="dateBirthDB" class="input-field" type="date" name="dateBirth" /></p>
            <p id="dateB-err-DB" class="no-input" hidden><p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Codice Fiscale</label></p>
            <p><input class="input-field" id="cfDB" type="text" name="CF"/></p>
            <p id="cf-err-DB" class="no-input" hidden></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Data della visita</label></p>
            <p><input class="input-field" id="dateCheckDB" type="date" name="dateCheck" /></p>
            <p id="dateC-err-DB" class="no-input" hidden><p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Anamnesi</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="medHistory"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Esame obiettivo</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="medExam"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Conclusioni</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="conclusions"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Prescrizione esami</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="toDoExams"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Terapia</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="terapy"></textarea></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Controllo</label></p>
            <p><textarea class="input-area" rows="4" cols="40" name="checkup"></textarea></p>
        </div>
    </div>
    
    <div class="row-buttons">
        <p> 
            <button id="insertNew" class="controlButton disabled" type="submit" formaction="index.php?control=manageDB&action=insert&sent=y" disabled/>invia dati</button>
            <button id="reset" class="controlButton" type="reset"/>reset</button>
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB"/>annulla</button>
            
        </p>
    </div>
</form>

<div class="spacing"></div><?php }} ?>
