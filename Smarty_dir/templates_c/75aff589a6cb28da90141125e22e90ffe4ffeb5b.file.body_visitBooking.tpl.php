<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 12:49:56
         compiled from "Smarty_dir\templates\body_visitBooking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151054d4a8bfbf19e7-17582166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75aff589a6cb28da90141125e22e90ffe4ffeb5b' => 
    array (
      0 => 'Smarty_dir\\templates\\body_visitBooking.tpl',
      1 => 1423309616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151054d4a8bfbf19e7-17582166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d4a8bfc2a8a0_43948231',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4a8bfc2a8a0_43948231')) {function content_54d4a8bfc2a8a0_43948231($_smarty_tpl) {?><!-- calendario di google calendar caricato direttamente da li
<div>
    <iframe src="https://www.google.com/calendar/embed?title=Visite&amp;height=600&amp;wkst=2&amp;hl=it&amp;bgcolor=%23ffffff&amp;src=carlo.clinicard%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FRome" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
  -->
 
<div id="popup-form" class="popup">
    <form id="Visit-Form" method="POST" action="">
      <div class="row">
          <div class="row-element">
              <p class="label"><label>Nome</label></p>
              <p><input class="input-field" id="name" type="text" name="name" placeholder="Nome"></p>
              <p id="name-err" class="no-input" hidden></p>
          </div>
      </div>

      <div class="row">
          <div class="row-element">
              <p class="label"><label>Cognome</label></p>
              <p><input class="input-field" id="surname" type="text" name="surname" placeholder="Cognome"/></p>
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
              <p class="label"><label>Data visita</label></p>
              <p><input class="input-field" id="dataVisita" type="text" name="email" placeholder="Data Visita"/></p>
              <p id="data-err" class="no-input" hidden></p>
          </div>
      </div>
      

      <div class="row-buttons">
          <p> <button class="controlButton" id="registration-button" type="submit"/>Salva</button>
              <button class="controlButton" id="reset" type="reset"/>reset</button>
          </p>
      </div>

  </form>
      
</div>
  
  
<!-- The calendar will be placed here -->
<div id='calendar' draggable="false"></div>


<?php }} ?>
