<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Liczba 1: </label>
	<input id="id_x" type="text" name="x" value="<?php if(isset($x)) echo $x; ?>" /><br />
	<label for="id_op">Operacja: </label>
	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
	</select><br />
	<label for="id_y">Liczba 2: </label>
	<input id="id_y" type="text" name="y" value="<?php if(isset($y)) echo $y; ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

<form action="<?php print(_APP_URL);?>/app/calcCredit.php" method="post">
<fieldset style="pading:10px 10px 10px 30px;width:300px;">
	<legend>Kalkulator kredytowy</legend>
	<label for="id1">Kwota kredytu: </label>
	<input id="id1" type="text" name="credit" value="<?php if(isset($credit)) echo $credit;?>"/><br />
	<label for="id2">Ilość lat: </label>
	<input id="id2" type="text" name="years" value="<?php if(isset($years)) echo $years;?>"/><br />
	<label for="id3">Oprocentowanie:</label>
	<input id="id4" type="text" name="interestRate" value="<?php if(isset($interestRate)) echo isset($interestRate_1);?>"/><br />
	<input type="submit" value="Oblicz ratę" />
</fieldset>
</form>

<?php
if (isset($messages1)) {
	if (count ( $messages1 ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages1 as $key1 => $msg1 ) {
			echo '<li>'.$msg1.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result_1)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata kredytu:: '.$result_1; ?>
</div>
<?php } ?>

</body>
</html>