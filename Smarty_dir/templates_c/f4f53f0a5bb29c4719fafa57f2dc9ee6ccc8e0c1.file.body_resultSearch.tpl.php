<?php /* Smarty version Smarty-3.1.18, created on 2015-02-05 18:33:15
         compiled from "Smarty_dir\templates\body_resultSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839954b2b300821269-79263500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f53f0a5bb29c4719fafa57f2dc9ee6ccc8e0c1' => 
    array (
      0 => 'Smarty_dir\\templates\\body_resultSearch.tpl',
      1 => 1423053015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839954b2b300821269-79263500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b2b30086ad49_99874233',
  'variables' => 
  array (
    'message' => 0,
    'numResults' => 0,
    'rows' => 0,
    'patient' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2b30086ad49_99874233')) {function content_54b2b30086ad49_99874233($_smarty_tpl) {?><div class="title">
    <p><?php echo strtoupper($_smarty_tpl->tpl_vars['message']->value);?>
</p>
</div>

<div class="spacing"></div>

<!--
<ul>
<?php if ($_smarty_tpl->tpl_vars['numResults']->value!=0) {?>
<?php  $_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['patient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->key => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
?>
<li> <?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['patient']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['patient']->value['cf'];?>
 <?php echo $_smarty_tpl->tpl_vars['patient']->value['dateBirth'];?>

<button><a href="index.php?control=manageDB&action=getChecks&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
">vai </a></button>
<button><a href="index.php?control=manageDB&action=modPat&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
">modifica </a></button>
<button><a href="index.php?control=manageDB&action=delPat&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
">elimina </a></button>
</li>
<br>
<?php } ?>
</ul>
<?php }?>-->

<?php if ($_smarty_tpl->tpl_vars['numResults']->value!=0) {?>
<div class="DBTable">
<table>
    <tbody>
        <tr>
            <td>Nome</td>
            <td>Cognome</td>
            <td>Codice Fiscale</td>
            <td>Data di nascita</td>
            <td>Sesso</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['patient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['patient']->key => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['surname'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['cf'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['dateBirth'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['gender'];?>
</td>
                <td><a href="index.php?control=manageDB&action=getChecks&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
"><button class="navButton">vai</button></a></td>
                <td><a href="index.php?control=manageDB&action=modPat&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
"><button class="navButton">modifica</button></a></td>
                <td><a href="index.php?control=manageDB&action=delPat&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
"><button class="navButton">elimina</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<?php }?>

<div class="spacing"></div><?php }} ?>
