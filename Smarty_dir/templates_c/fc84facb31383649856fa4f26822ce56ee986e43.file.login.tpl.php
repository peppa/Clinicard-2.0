<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 16:25:02
         compiled from "Smarty_dir\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172854afb6192cae96-97217704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc84facb31383649856fa4f26822ce56ee986e43' => 
    array (
      0 => 'Smarty_dir\\templates\\login.tpl',
      1 => 1423063369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172854afb6192cae96-97217704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afb619307c53_36308970',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afb619307c53_36308970')) {function content_54afb619307c53_36308970($_smarty_tpl) {?><div id="loginTPL" hidden>
  <form class="log" method="POST" action="index.php?control=login">

    <div>
        <p><input id="userLogin" class="input-field-login" type="text" name="username" placeholder="username"></p>
        <p><input id="passLogin" class="input-field-login" type="password" name="password" placeholder="password"></p>
        <p><input id="" type="checkbox" name="keepLogged" value="yes">Ricordami <input id="login" type="submit" value="Accedi"></p>
    </div>
<!--
    <div>
      <input type="checkbox" name="keepLogged" value="yes"> Ricordami
    </div>-->   

  </form>

</div>
<!--
<div>
  <form method="POST" action="index.php?control=recoverPass">
    <a href=""> Password dimenticata ? </a>
  </form>
</div>--><?php }} ?>
