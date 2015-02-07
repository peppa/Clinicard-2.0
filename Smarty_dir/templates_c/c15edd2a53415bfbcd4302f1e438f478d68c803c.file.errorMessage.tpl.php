<?php /* Smarty version Smarty-3.1.18, created on 2015-02-06 11:42:23
         compiled from "Smarty_dir\templates\errorMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057854b54405784ee6-24966395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15edd2a53415bfbcd4302f1e438f478d68c803c' => 
    array (
      0 => 'Smarty_dir\\templates\\errorMessage.tpl',
      1 => 1423219340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057854b54405784ee6-24966395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b544057b48a3_66847031',
  'variables' => 
  array (
    'message' => 0,
    'addButton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b544057b48a3_66847031')) {function content_54b544057b48a3_66847031($_smarty_tpl) {?><div class="center">
    <div class="errormsg">
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['addButton']->value==true) {?>
        <button id="errorBack" class="controlButton">Indietro</button>
    <?php }?>
</div>

<div class="spacing"></div><?php }} ?>
