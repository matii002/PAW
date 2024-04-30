<?php
/* Smarty version 4.5.1, created on 2024-03-23 15:03:08
  from 'C:\xampp\htdocs\szablonowanie_projekt\app\security\login_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65fee11c70bb99_53311967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46794101b110f8e184e407686cdb9d79b4bd141c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szablonowanie_projekt\\app\\security\\login_view.php',
      1 => 1711202580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fee11c70bb99_53311967 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
 include _ROOT_PATH.'/templates/top.php';<?php echo '?>'; ?>

<div style="width:90%; margin: 2em auto;">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
<form action="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/login.php" method="GET" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php echo '<?php'; ?>

//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
<?php echo '?>'; ?>

</div>
<?php echo '<?php'; ?>
 include _ROOT_PATH.'/templates/bottom.php';<?php echo '?>';
}
}
