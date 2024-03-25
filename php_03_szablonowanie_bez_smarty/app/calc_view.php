<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
include _ROOT_PATH.'/templates/top.php';
?>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css"><!-- dla wyloguj i inna chroniona -->
<div style="width:90%; margin: 2em 2em 2em 20em;">
	<!-- <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a> -->
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
    <form action="<?php print(_APP_URL);?>/app/calc.php" method="GET" class="pure-form pure-form-stacked">
        <fieldset style="pading:10px 10px 10px 30px;width:300px;">
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
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		    foreach ( $messages as $key => $msg ) {
			    echo '<li>'.$msg.'</li>';
            }
		    echo '</ol>';
	    }
    }
    ?>
    <?php if (isset($result)){ ?>
    <p style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;"><?php echo 'Miesięczna rata kredytu: '.$result; ?></p>

<?php } ?>
<?php
include _ROOT_PATH.'/templates/bottom.php';
?>