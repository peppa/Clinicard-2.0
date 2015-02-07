<?php /* Smarty version Smarty-3.1.18, created on 2015-02-04 15:58:20
         compiled from "Smarty_dir\templates\body_patientDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3140254afc2f24f9db2-17705084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45a202a5de8008d0f1560f83088bbec837aa0794' => 
    array (
      0 => 'Smarty_dir\\templates\\body_patientDetail.tpl',
      1 => 1423061898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3140254afc2f24f9db2-17705084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54afc2f2576517_35274672',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afc2f2576517_35274672')) {function content_54afc2f2576517_35274672($_smarty_tpl) {?><!--
		<br>
		Scheda del paziente <?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>

		<br>
                Data della visita: <?php echo $_smarty_tpl->tpl_vars['info']->value['dateCheck'];?>

		<br>
                <br>
                <br>

		<form method="POST">

			<div>

		Nome: <?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>

		<br>
		Cognome: <?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>

		<br>
		Sesso: <?php echo $_smarty_tpl->tpl_vars['info']->value['gender'];?>

		<br>
		DataNascita: <?php echo $_smarty_tpl->tpl_vars['info']->value['dateBirth'];?>

		<br>
		Codice Fiscale: <?php echo $_smarty_tpl->tpl_vars['info']->value['CF'];?>

		<br>
		Data Visita: <?php echo $_smarty_tpl->tpl_vars['info']->value['dateCheck'];?>

		<br>
		Anamnesi: <?php echo $_smarty_tpl->tpl_vars['info']->value['medHistory'];?>

		<br>
		Esame Obiettivo: <?php echo $_smarty_tpl->tpl_vars['info']->value['medExam'];?>

		<br>
		Conclusione: <?php echo $_smarty_tpl->tpl_vars['info']->value['conclusions'];?>

		<br>
		Prescrizione Esami: <?php echo $_smarty_tpl->tpl_vars['info']->value['toDoExams'];?>

		<br>
		Terapia: <?php echo $_smarty_tpl->tpl_vars['info']->value['terapy'];?>

		<br>
		Controllo: <?php echo $_smarty_tpl->tpl_vars['info']->value['checkup'];?>


	</div>

	<br>
	<br>


		<button type="submit" formaction="index.php?control=manageDB&action=modCheck&p=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['dateCheck']);?>
">modifica</button>
		<button type="submit" class="print-report" formaction="index.php?control=manageDB&action=printReport&pat=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['dateCheck']);?>
">stampa report</button>
		<button type="submit" formaction="index.php?control=manageDB&action=delCheck&p=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['dateCheck']);?>
">cancella</button>
	</form>-->
        
        
        <div class="title">
            <p>SCHEDA DEL PAZIENTE <?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>
</p>
            <p>DATA DELLA VISITA: <?php echo $_smarty_tpl->tpl_vars['info']->value['dateCheck'];?>
</p>
        </div>
        
<div class="DBTable" id="patient-detail" >
<table>
    <tbody>
        <tr>
            <td>Campo</td> <td>Valore</td>
        </tr>
        
        <tr>
            <td>Nome</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</td>
        </tr>
        <tr>
            <td>Cognome</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>
</td>
        </tr>
        <tr>
            <td>Sesso</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['gender'];?>
</td>
        </tr>
        <tr>
            <td>Data di nascita</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['dateBirth'];?>
</td>
        </tr>
        <tr>
            <td>Codice Fiscale</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['CF'];?>
</td>
        </tr>
        <tr>
            <td>Data della visita</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['dateCheck'];?>
</td>
        </tr>
        <tr>
            <td>Anamnesi</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['medHistory'];?>
</td>
        </tr>
        <tr>
            <td>Esame Obiettivo</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['medExam'];?>
</td>
        </tr>
        <tr>
            <td>Conclusioni</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['conclusions'];?>
</td>
        </tr>
        <tr>
            <td>Esami Prescritti</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['toDoExams'];?>
</td>
        </tr>
        <tr>
            <td>Terapia</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['terapy'];?>
</td>
        </tr>
        <tr>
            <td>Controllo</td> <td><?php echo $_smarty_tpl->tpl_vars['info']->value['checkup'];?>
</td>
        </tr>
    </tbody>
</table>
</div>
        
<div class="spacing"></div>

<div class="title">
    <p>SCEGLI UN'AZIONE</p>
</div>


<!--<form method="POST" class="center">-->
<div class="center">
    <a href="index.php?control=manageDB&action=modCheck&p=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['dateCheck']);?>
"><button class="controlButton">modifica</button></a>
    <a href="index.php?control=manageDB&action=printReport&pat=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['dateCheck']);?>
"><button class="controlButton"class="print-report">stampa report</button></a>
    <a href="index.php?control=manageDB&action=delCheck&p=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
&ch=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['dateCheck']);?>
"><button class="controlButton" id="deleteCheck">cancella</button></a>
    <a href="index.php?control=manageDB&action=getChecks&p=<?php echo md5($_smarty_tpl->tpl_vars['info']->value['CF']);?>
"><button class="controlButton">indietro</button></a>
</div>
<!--</form>-->

<div class="spacing"></div>
<?php }} ?>
