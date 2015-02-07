<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 13:00:08
         compiled from "Smarty_dir\templates\headers\header_visitBooking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821554d4a8bfc4cd42-24446850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38eaedc45d52d398f4f7a0beb5692511e9f5abdc' => 
    array (
      0 => 'Smarty_dir\\templates\\headers\\header_visitBooking.tpl',
      1 => 1423310401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821554d4a8bfc4cd42-24446850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d4a8bfc4f3d0_15076044',
  'variables' => 
  array (
    'isMedic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4a8bfc4f3d0_15076044')) {function content_54d4a8bfc4f3d0_15076044($_smarty_tpl) {?><!-- calendar's css -->
<link rel='stylesheet' href='lib/js/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' href='lib/js/jquery-ui/jquery-ui.theme.css' />
<link rel='stylesheet' href='lib/datetimepicker/jquery.datetimepicker.css' />
<link href="css/calendar.css" rel="stylesheet" type="text/css"  media="all" />

<!-- used lib -->
<script type='text/javascript' src='lib/js/jquery-2.1.3'></script>
<script type='text/javascript' src='lib/js/jquery-ui/jquery-ui.js'></script>
<script type='text/javascript' src='lib/js/fullcalendar/lib/moment.min.js'></script>
<script type='text/javascript' src='lib/js/fullcalendar/fullcalendar.js'></script>
<script type='text/javascript' src='lib/js/fullcalendar/lang/it.js'></script>
<script type='text/javascript' src='lib/js/bPopup.js'></script>
<script type='text/javascript' src='lib/datetimepicker/jquery.datetimepicker.js'></script>

<!-- personal scripts -->
<?php if ($_smarty_tpl->tpl_vars['isMedic']->value) {?>
    <script type='text/javascript' src="lib/js/script/calendario_medico.js"></script>
<?php } else { ?>
    <script type='text/javascript' src="lib/js/script/calendario_utente.js"></script>
<?php }?>



 <!-- needs to be -->

<!-- Google Calendar dependencies.. 
<script type='text/javascript' src='lib/js/fullcalendar/gcal.js'></script>

--><?php }} ?>
