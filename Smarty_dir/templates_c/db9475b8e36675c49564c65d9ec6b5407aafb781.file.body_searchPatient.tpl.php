<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 15:51:25
         compiled from "Smarty_dir\templates\body_searchPatient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747054b2b2fcda07d5-23684853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9475b8e36675c49564c65d9ec6b5407aafb781' => 
    array (
      0 => 'Smarty_dir\\templates\\body_searchPatient.tpl',
      1 => 1423061431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747054b2b2fcda07d5-23684853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b2b2fcdc8046_03177855',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2b2fcdc8046_03177855')) {function content_54b2b2fcdc8046_03177855($_smarty_tpl) {?><div class="title">
    <p>RICERCA PAZIENTI</p>
</div>

<div class="spacing"></div>

<form class="center" method="POST" >
    <div>
        <p> <input id="search" class="input-field" type="text" name="keyValue" placeholder="inserici nome, cognome o cf"> </p>
        <p> 
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB&action=search">cerca</button>
            <button class="controlButton" type="submit" formaction="index.php?control=manageDB">annulla</button>
        </p>
    </div>
</form>

<div class="spacing"></div>
<div class="spacing"></div><?php }} ?>
