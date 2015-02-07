<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 18:53:30
         compiled from "Smarty_dir\templates\body_newVisit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2335854afb70510fb95-09268577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee1611217f8435a8c6e8bacb01252d3fe4e0c70' => 
    array (
      0 => 'Smarty_dir\\templates\\body_newVisit.tpl',
      1 => 1423331608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2335854afb70510fb95-09268577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afb705148766_20238305',
  'variables' => 
  array (
    'name' => 0,
    'surname' => 0,
    'CF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afb705148766_20238305')) {function content_54afb705148766_20238305($_smarty_tpl) {?><div class="title">
    <p>PAZIENTE: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['CF']->value;?>
</p>
</div>

<div class="spacing"></div>

<!--<form class="button-form" method="POST" action="index.php?control=manageDB&action=newVisit&sent=y&p=<?php echo md5($_smarty_tpl->tpl_vars['CF']->value);?>
">
    <table>        
        <tr>
            <td class="field-label">Data visita:</td>
            <td> <input class="input-field" type="date" name="dateCheck" /> </td>
        </tr>
        
        <tr>
            <td class="area-label"> Anamnesi: </td>
            <td> <textarea class="input-area" rows="5" cols="60" name="medHistory"></textarea>
        </tr>
        
        <tr>
            <td class="area-label"> Esame obiettivo: </td>
            <td> <textarea class="input-area" rows="5" cols="60" name="medExam"></textarea>
        </tr>
        
        <tr>
            <td class="area-label"> Conclusioni: </td>
            <td> <textarea class="input-area" rows="5" cols="60" name="conclusions"></textarea>
        </tr>
        
        <tr>
            <td class="area-label"> Prescrizione esami: </td>
            <td> <textarea class="input-area" rows="5" cols="60" name="toDoExams"></textarea>
        </tr>
        
        <tr>
            <td class="area-label"> Terapia: </td>
            <td> <textarea class="input-area" rows="5" cols="60" name="terapy"></textarea>
        </tr>
        
        <tr>
            <td class="area-label"> Controllo: </td>
            <td> <textarea class="input-area" rows="5" cols="60" name="checkup"></textarea>
        </tr>
        
        <tr>
            <td> <button class="button" type="submit"/>invia dati</button> </td>
            <td> <button class="button" type="reset"/>reset</button> </td>
        </tr>
    </table>
</form>-->

<form method="POST">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Data della visita</label></p>
            <p><input id="dateChDB" class="input-field" type="date" name="dateCheck" /></p>
            <p id="dateCh-err-DB" class="no-input" hidden><p>
            
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
    
    <div class="row">
        <p> <button id="insertNewCh" class="controlButton disabled" type="submit" formaction="index.php?control=manageDB&action=newVisit&sent=y&p=<?php echo md5($_smarty_tpl->tpl_vars['CF']->value);?>
" disabled/>invia dati</button>
            <button id="reset" class="controlButton" type="reset"/>reset</button>
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=getChecks&p=<?php echo md5($_smarty_tpl->tpl_vars['CF']->value);?>
"/>annulla</button>
        </p>
    </div>
</form>
    
<div class="spacing"></div><?php }} ?>
