<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 15:54:08
         compiled from "Smarty_dir\templates\body_patientChecks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416354afb24e83f279-99955385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c81d47528002a9988bd3db20992ebde298043800' => 
    array (
      0 => 'Smarty_dir\\templates\\body_patientChecks.tpl',
      1 => 1423061643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416354afb24e83f279-99955385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afb24e889572_10153234',
  'variables' => 
  array (
    'name' => 0,
    'surname' => 0,
    'PatChecks' => 0,
    'visit' => 0,
    'pat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afb24e889572_10153234')) {function content_54afb24e889572_10153234($_smarty_tpl) {?><div class="title">
    <p>Tutte le visite del paziente <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
:</p>
</div>
    
<!--<div class="CSSCSSTableGenerator">
    <table>
        <tbody>
            <tr>
                <td>Data della visita</td>
                <td></td>
            </tr>
        <?php  $_smarty_tpl->tpl_vars['visit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PatChecks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visit']->key => $_smarty_tpl->tpl_vars['visit']->value) {
$_smarty_tpl->tpl_vars['visit']->_loop = true;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['visit']->value;?>

                </td>
                <td>
                    <a href="index.php?control=manageDB&action=getFullData&p=<?php echo $_smarty_tpl->tpl_vars['pat']->value;?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['visit']->value);?>
"><button class="a_demo_four">vai</button></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>-->
        
<div class="DBTable" id="patient-checks">
<table>
    <tbody>
        <tr>
            <td>Data della visita</td>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['visit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PatChecks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visit']->key => $_smarty_tpl->tpl_vars['visit']->value) {
$_smarty_tpl->tpl_vars['visit']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['visit']->value;?>
</td>
                <td><a href="index.php?control=manageDB&action=getFullData&p=<?php echo $_smarty_tpl->tpl_vars['pat']->value;?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['visit']->value);?>
"><button class="navButton">vai</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>

<div class="spacing"></div>

<!--<form method="POST" class="center">
    <p>-->
<div class=center>
    <a href="index.php?control=manageDB&action=newVisit&p=<?php echo $_smarty_tpl->tpl_vars['pat']->value;?>
"><button class="controlButton">Aggiungi visita</button></a>
    <a href="index.php?control=manageDB"><button class="controlButton">Home</button></a>
</div>
    <!--</p>
</form>-->
    
<div class="spacing"></div><?php }} ?>
