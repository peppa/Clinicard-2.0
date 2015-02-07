<?php /* Smarty version Smarty-3.1.18, created on 2015-02-05 23:15:07
         compiled from "Smarty_dir\templates\body_modPatient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947154b3e4304b9a19-64274816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791835d4d91134e27dc51b0e061fe418787d5c6d' => 
    array (
      0 => 'Smarty_dir\\templates\\body_modPatient.tpl',
      1 => 1423174482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947154b3e4304b9a19-64274816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b3e430507b41_37792904',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3e430507b41_37792904')) {function content_54b3e430507b41_37792904($_smarty_tpl) {?><div class="title">
    <p>MODIFICA I DATI DEL PAZIENTE</p>
</div>

<div class="spacing"></div>

<!--<form clas method="POST" class="mod-pat" action="index.php?control=manageDB&action=modPat&mod=completed&p=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">
    <table>
        
        <tr>
            <td class="field-label"> Nome: </td>
            <td> <input class="input-field" type="text" name="name" id="name-pat"/> </td>
        </tr>
        
        <tr>
            <td class="field-label"> Cognome: </td>
            <td> <input class="input-field" type="text" name="surname" id="surname-pat"/> </td>
        </tr>
        
        <tr>
            <td class="field-label">Sesso: </td>
            <td>
                <input type="radio" name="gender" id="male" value="M"> M 
                <input type="radio" name="gender" id="female" value="F"> F 
            </td>
        </tr>
        
        <tr>
            <td class="field-label">Data di nascita:</td>
            <td> <input class="input-field" type="date" name="dateBirth" id="dateB-pat" /> </td>
        </tr>
        
        <tr>
            <td class="field-label"> Codice Fiscale: </td>
            <td> <input class="input-field" type="text" name="CF" id="cf-pat"/> </td>
        </tr>
        
        <tr>
            <td></td>
        </tr>
        
        <tr>
            <td> <button class="button" type="submit"/>invia dati</button> </td>
            <td> <button class="button" type="reset"/>reset</button> </td>
        </tr>
        
    </table>
</form>-->

<form id="modPatient" method="POST">
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Nome</label></p>
            <p><input class="input-field" type="text" name="name" id="modName"/></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Cognome</label></p>
            <p><input class="input-field" type="text" name="surname" id="modSurname"/></p>
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
            <p><input class="input-field" type="date" name="dateBirth" id="modDateB"/></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Codice Fiscale</label></p>
            <p><input class="input-field" type="text" name="CF" id="modCF"/></p>
        </div>
    </div>
    
    <div class="row-buttons">
        <p> <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=modPat&mod=completed&p=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"/>invia dati</button>
            <button class="controlButton" type="reset"/>reset</button> 
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB"/>annulla</button> 
        </p>
    </div>
</form>
    
<div class="spacing"></div><?php }} ?>
