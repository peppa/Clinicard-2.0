<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 12:50:10
         compiled from "Smarty_dir\templates\body_confirmDelCheck.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1130854b2db6483ab40-03391165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77a5caaded891d57a52295a3927be0c2aedd8eb4' => 
    array (
      0 => 'Smarty_dir\\templates\\body_confirmDelCheck.tpl',
      1 => 1423309616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1130854b2db6483ab40-03391165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b2db6486ac72_50692984',
  'variables' => 
  array (
    'cf' => 0,
    'ch' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2db6486ac72_50692984')) {function content_54b2db6486ac72_50692984($_smarty_tpl) {?><div class="title warning">
    <p>Confermi di voler cancellare la visita selezionata ?</p>
    <p>Non sar&aacute possibile recuperare i dati in futuro</p>
</div>
<div id="last-check" hidden>
    <p>Cancellando l'ultima visita verr&agrave cancellato dall'archivio</p>
    <p>anche il paziente stesso</p>
</div>

<div class="spacing"></div>

<form method="POST" class="center">
    <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=delCheck&conf=yes&p=<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
&ch=<?php echo $_smarty_tpl->tpl_vars['ch']->value;?>
">conferma</button>
    <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=getFullData&p=<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
&ch=<?php echo $_smarty_tpl->tpl_vars['ch']->value;?>
">annulla</button>
</form>
    
<div class="spacing"></div><?php }} ?>
