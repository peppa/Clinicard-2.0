<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 19:07:04
         compiled from "Smarty_dir\templates\body_DB.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144954afb0aea3a164-39768823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f62ef778cdc02c7852c0e51b7a8ba204c26b82d' => 
    array (
      0 => 'Smarty_dir\\templates\\body_DB.tpl',
      1 => 1423332174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144954afb0aea3a164-39768823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afb0aea7f954_56060461',
  'variables' => 
  array (
    'people' => 0,
    'patient' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afb0aea7f954_56060461')) {function content_54afb0aea7f954_56060461($_smarty_tpl) {?><div class="title">
    <p>PAGINA DI GESTIONE DELL'ARCHIVIO DEI PAZIENTI</p>
</div>


<div class="center">
    <a href="index.php?control=manageDB&action=insert"><button type="submit" class="controlButton" id="insert-pat">inserisci</button></a>
</div>



<div class="center">
    <a href="index.php?control=manageDB&action=search"><button type="submit" class="controlButton"id="search-pat">cerca</button></a>
</div>


<!-- show all patients in DB -->
<div class="title">
    <p>TUTTI I PAZIENTI NELL'ARCHIVIO</p>
</div>

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
 $_from = $_smarty_tpl->tpl_vars['people']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
"><button class="navButton">vai</button> </a></td>
                <td><a href="index.php?control=manageDB&action=modPat&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
"><button class="navButton">modifica</button></a></td>
                <td><a href="index.php?control=manageDB&action=delPat&p=<?php echo $_smarty_tpl->tpl_vars['patient']->value['link'];?>
"><button class="navButton">elimina</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
    
<div class="spacing"></div>


<?php }} ?>
