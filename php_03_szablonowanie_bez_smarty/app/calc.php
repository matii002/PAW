<?php
require_once dirname(__FILE__).'/../config.php';
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$credit,&$years,&$interestRate){
	$credit = isset($_REQUEST['credit']) ? $_REQUEST['credit'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interestRate = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$credit,&$years,&$interestRate,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($credit) && isset($years) && isset($interestRate))) {
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $credit == "") {
		$messages [] = 'Nie podano liczby (Kwota kredytu)';
	}
	if ( $years == "") {
		$messages [] = 'Nie podano liczby (Ilość lat)';
	}
    if ( $interestRate == "") {
        $messages [] = 'Nie podano liczby (Oprocentowanie)';
    }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $credit )) {
		$messages [] = 'Kwota kredytu - wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Ilość lat - wartość nie jest liczbą całkowitą';
	}
    if (! is_numeric( $interestRate )) {
        $messages [] = 'Oprocentowanie - wartość nie jest liczbą całkowitą';
    }

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$credit, &$years, &$interestRate, &$messages, &$result){
	global $role;
	
	//konwersja parametrów na int/float
	$credit = intval($credit);
	$years = intval($years);
    $interestRate = floatval($interestRate);
    if($role == 'admin'){
        //wykonanie operacji
        $tmp = $interestRate;
        $interestRate = $interestRate/100;
        $result = ($credit*(1+$interestRate))/($years*12);
        $interestRate = $tmp;
    }
    else{
        $messages[] = "Nie masz uprawnień! Tylko admin ma dostęp do kalkulatora!";
    }
}

//definicja zmiennych kontrolera
$credit = null;
$years = null;
$interestRate = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($credit,$years,$interestRate);
if ( validate($credit,$years,$interestRate,$messages) ) { // gdy brak błędów
	process($credit,$years,$interestRate,$messages,$result);
}

include 'calc_view.php';