<?php include _ROOT_PATH.'/templates/top.php';?>
<div style="width:90%; margin: 2em auto;">
<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="GET">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol>';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</div>
<?php include _ROOT_PATH.'/templates/bottom.php';?>