<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';
//pobranie parametrów
function getParams(&$form){
	$form['credit'] = isset($_REQUEST['credit']) ? $_REQUEST['credit'] : null;
	$form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$form['interestRate'] = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['credit']) && isset($form['years']) && isset($form['interestRate']))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;

		//nie pokazuj wstępu strony gdy trwają obliczenia, unikasz przesuwaniu strony
		$hide_intro = true;

		$infos[] = 'Przekazano parametry.';
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['credit'] == "") {
		$msgs [] = 'Nie podano liczby (Kwota kredytu)';
	}
	if ( $form['years'] == "") {
		$msgs [] = 'Nie podano liczby (Ilość lat)';
	}
    if ( $form['interestRate'] == "") {
        $msgs [] = 'Nie podano liczby (Oprocentowanie)';
    }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $msgs )==0){
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['credit'] )) {
			$msgs [] = 'Kwota kredytu - wartość nie jest liczbą całkowitą';
		}
		if (! is_numeric( $form['years'])) {
			$msgs [] = 'Ilość lat - wartość nie jest liczbą całkowitą';
		}
		if (! is_numeric( $form['interestRate'])) {
			$msgs [] = 'Oprocentowanie - wartość nie jest liczbą całkowitą';
		}
	}
	if (count ( $msgs ) > 0) return false;
	else return true;
}

function process(&$form, &$infos, &$msgs, &$result){
	Global $role;
	$form['credit'] = intval($form['credit']);
	$form['years'] = intval($form['years']);
    $form['interestRate'] = floatval($form['interestRate']);
    if($role == 'admin'){
        //wykonanie operacji
        $tmp = $form['interestRate'];
        $form['interestRate'] = $form['interestRate']/100;
        $result = ($form['credit']*(1+$form['interestRate']))/($form['years']*12);
        $form['interestRate'] = $tmp;
    }
    else{
        $msgs[] = "Nie masz uprawnień! Tylko admin ma dostęp do kalkulatora!";
    }
}

//definicja zmiennych kontrolera
$form = null;
$result = null;
$infos = array();
$messages = array();
$hide_intro = false;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ) { // gdy brak błędów
	process($form,$infos,$messages,$result);
}
$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('app_root',_APP_ROOT);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description',"Profesjonalna strona z szablonowaniem SMARTY");
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');
