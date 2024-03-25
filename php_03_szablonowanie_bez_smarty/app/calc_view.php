<?php
include _ROOT_PATH.'/templates/top.php';
?>
<div style="width:90%; margin: 2em 2em 2em 20em;">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
    <form action="<?php print(_APP_URL);?>/app/calc.php" method="GET">
        <fieldset>
            <label for="id1">Kwota kredytu: </label>
            <input id="id1" type="text" name="credit" value="<?php out($credit) ?>"/><br />
            <label for="id2">Ilość lat: </label>
            <input id="id2" type="text" name="years" value="<?php out($years) ?>"/><br />
            <label for="id3">Oprocentowanie (%):</label>
            <input id="id3" type="text" name="interestRate" value="<?php out($interestRate) ?>"/><br />
            <input type="submit" value="Oblicz ratę" class="pure-form pure-form-stacked" />
        </fieldset>
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
    <?php if (isset($result)){ ?>
    <p><?php echo 'Miesięczna rata kredytu: '.$result; ?></p>

<?php } ?>
<?php
include _ROOT_PATH.'/templates/bottom.php';
?>