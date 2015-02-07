<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 09:51:56
         compiled from "Smarty_dir\templates\ConfigurationPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83254d4eccc709a03-84339834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90e633f2d48c7e7a1773b5781418ad2e212cce8' => 
    array (
      0 => 'Smarty_dir\\templates\\ConfigurationPage.tpl',
      1 => 1423298952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83254d4eccc709a03-84339834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d4eccc731884_60813056',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4eccc731884_60813056')) {function content_54d4eccc731884_60813056($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<link href="css/myStyle.css" rel="stylesheet" type="text/css">
        <link href="css/style4.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="mainContent">
        <div class="title">
            <h2>CLINICARD</h2>
            <h4>PAGINA DI INSTALLAZIONE</h4>
        </div>
    <form method="POST" action="index.php">
        <div class="row">
        <div class="row-element">
            <p class="label"><label>Username:</label></p>
            <p><input class="input-field" type="text" name="userConfig"></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Password:</label></p>
            <p><input class="input-field" type="password" name="passConfig"/></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Host:</label></p>
            <p><input class="input-field" type="text" name="hostConfig"/></p>
        </div>
    </div>
    
    <div class="row">
        <div class="row-element">
            <p class="label"><label>Database (deve essere gi&agrave; stato creato):</label></p>
            <p><input class="input-field"type="text" name="DBConfig"/></p>
        </div>
    </div>
        
        <div class="row-buttons">
        <p> <button class="controlButton" type="submit"/>Invia</button>
            <button class="controlButton" type="reset"/>Reset</button>
        </p>
    </div>
        
    </form>
    </div>
</body><?php }} ?>
