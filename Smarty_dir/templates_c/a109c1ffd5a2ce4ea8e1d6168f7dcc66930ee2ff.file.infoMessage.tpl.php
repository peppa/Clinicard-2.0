<?php /* Smarty version Smarty-3.1.18, created on 2015-02-05 23:26:39
         compiled from "Smarty_dir\templates\infoMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2296454b542593b9ea3-96161539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a109c1ffd5a2ce4ea8e1d6168f7dcc66930ee2ff' => 
    array (
      0 => 'Smarty_dir\\templates\\infoMessage.tpl',
      1 => 1423060509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2296454b542593b9ea3-96161539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b542593f30d5_85128054',
  'variables' => 
  array (
    'message' => 0,
    'addButton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b542593f30d5_85128054')) {function content_54b542593f30d5_85128054($_smarty_tpl) {?><div class="center"> <!-- per adesso è uguale a errorMessage.tpl, vanno messi gli identificatori dentro al div -->
    <div class="infomsg">
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['addButton']->value==true) {?>
        <a href="index.php?control=manageDB"><button class="controlButton">torna alla Home</button></a>
    <?php }?>
</div>

<div class="spacing"></div><?php }} ?>
