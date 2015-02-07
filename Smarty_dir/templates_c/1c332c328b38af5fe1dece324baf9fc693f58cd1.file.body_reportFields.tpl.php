<?php /* Smarty version Smarty-3.1.18, created on 2015-02-05 22:23:24
         compiled from "Smarty_dir\templates\body_reportFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2350554afc3350a03e2-30743108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c332c328b38af5fe1dece324baf9fc693f58cd1' => 
    array (
      0 => 'Smarty_dir\\templates\\body_reportFields.tpl',
      1 => 1423171402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2350554afc3350a03e2-30743108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afc3350deda8_12794434',
  'variables' => 
  array (
    'patLink' => 0,
    'checkLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afc3350deda8_12794434')) {function content_54afc3350deda8_12794434($_smarty_tpl) {?>
		<div class="title">
                    <p>Scegli i campi da stampare</p>
		</div>

<div class="spacing"></div>

<form id="printReportForm" class="center" method="POST"  target="_blank">
    <!-- Nome e Cognome, CF e Data di nascita vengono mostrati sempre -->
    <div class="DBTable" id="report-fields">
    <table>
        <tr>
            <td>
                <input type="checkbox" name="allFields" id="select-all"/>
            </td>
            <td>
                Tutti
            </td>
        </tr>
        
        <tr>
            <td class="checkbox">
                <input type="checkbox" name="dateCheck" class="checkbox-field"/>
            </td>
            <td>
                Data della visita
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="checkbox" name="medHistory" class="checkbox-field"/>
            </td>
            <td>
                Anamnesi
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="checkbox" name="medExam" class="checkbox-field"/>
            </td>
            <td>
                Esame Obiettivo
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="checkbox" name="conclusions" class="checkbox-field"/>
            </td>
            <td>
                Conclusioni
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="checkbox" name="toDoExams" class="checkbox-field"/>
            </td>
            <td>
                Prescrizione esami
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="checkbox" name="terapy" class="checkbox-field"/>
            </td>
            <td>
                Terapia
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="checkbox" name="checkup" class="checkbox-field"/>
            </td>
            <td>
                Controllo
            </td>
        </tr>
    </table>
    </div>
    <div class="spacing"></div>
    <button id="printReport" class="controlButton disabled" type="submit" disabled formaction="index.php?control=manageDB&action=printReport&fields=sent&pat=<?php echo $_smarty_tpl->tpl_vars['patLink']->value;?>
&ch=<?php echo $_smarty_tpl->tpl_vars['checkLink']->value;?>
" target="_blank">Stampa</button>
    <!--<button id="printReport" class="controlButton" type="submit" formaction="index.php?control=manageDB&action=getFullData&p=<?php echo $_smarty_tpl->tpl_vars['patLink']->value;?>
&ch=<?php echo $_smarty_tpl->tpl_vars['checkLink']->value;?>
">Annulla</button>-->
</form>

<div class="center">
    <a href="index.php?control=manageDB&action=getFullData&p=<?php echo $_smarty_tpl->tpl_vars['patLink']->value;?>
&ch=<?php echo $_smarty_tpl->tpl_vars['checkLink']->value;?>
"><button id="printReport" class="controlButton">Indietro</button></a>
</div>
    
<div class="spacing"></div>    

    <?php }} ?>
