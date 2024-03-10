<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$credit = $_REQUEST ['credit'];
$years = $_REQUEST ['years'];
$interestRate = $_REQUEST ['interestRate'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if (!(isset($credit) && isset($years) && isset($interestRate))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages1 [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $credit == "") {
	$messages1 [] = 'Nie podano liczby (Kwota kredytu)';
}
if ( $years == "") {
	$messages1 [] = 'Nie podano liczby (Ilość lat)';
}
if ( $interestRate == "") {
	$messages1 [] = 'Nie podano liczby (Oprocentowanie)';
}
//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages1 )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $credit )) {
		$messages1 [] = 'Kwota kredytu - wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $years )) {
		$messages1 [] = 'Ilość lat - wartość nie jest liczbą całkowitą';
	}	
	if (! (is_numeric( $interestRate ) || is_float($interestRate))) {
		$messages1 [] = 'Oprocentowanie - wartość nie jest liczbą';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages1 )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$credit = intval($credit);
	$years = intval($years);
	$interestRate = 1+(floatval($interestRate)/100);
	$result_1 = ($credit*$interestRate)/($years*12);
	$interestRate_1 = ($interestRate-1)*100;
}
include 'calc_view.php';