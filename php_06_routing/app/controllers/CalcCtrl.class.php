<?php
namespace app\controllers;
use app\forms\CalcForm;//wskazujemy przestrzeń nazw którą chcemy użyć

use app\transfer\CalcResult;
class CalcCtrl
{
    private $form;
    private $result;
    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

//pobranie parametrów
    function getParams()
    {
        $this->form->credit = getFromRequest('credit');
        $this->form->years = getFromRequest('years');
        $this->form->interestRate = getFromRequest('interestRate');
    }

//walidacja parametrów z przygotowaniem zmiennych dla widoku
    function validate()
    {
        // sprawdzenie, czy parametry zostały przekazane
        //! jeżeli nie (true) czyli return true | ! jeżeli nie (false) czyli return false
        if (!(isset($this->form->credit) && isset($this->form->years) && isset($this->form->interestRate))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }
        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->credit == "") {
            getMessages()->addError('Nie podano liczby (Kwota kredytu)');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano liczby (Ilość lat)');
        }
        if ($this->form->interestRate == "") {
            getMessages()->addError('Nie podano liczby (Oprocentowanie)');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        if (!getMessages()->isError()) {
            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (!is_numeric($this->form->credit)) {
                getMessages()->addError('Kwota kredytu - wartość nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->years)) {
                getMessages()->addError('Ilość lat - wartość nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->interestRate)) {
                getMessages()->addError('Oprocentowanie - wartość nie jest liczbą całkowitą');
            }
        }
        return !getMessages()->isError();//jeśli brak błędów zwróc true
    }

    function action_calcCompute()
    {
        $this->getParams();
        if ($this->validate()) {
            $this->form->years = intval($this->form->years);
            $this->form->credit = intval($this->form->credit);
            $this->form->interestRate = floatval($this->form->interestRate);
            getMessages()->addInfo('Parametry poprawne.');
            //obliczenia kredytu
            $tmp = $this->form->interestRate;
            $this->form->interestRate = ($this->form->interestRate) / 100;
            $this->result->result = ($this->form->credit * (1 + $this->form->interestRate)) / (($this->form->years) * 12);
            $this->form->interestRate = $tmp;
            getMessages()->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }
    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }
    public function generateView(){
        global $user;
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('page_description', "Profesjonalna strona z szablonowaniem SMARTY");
        getSmarty()->assign('page_header', 'Role');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);
        getSmarty()->display('calc_view.tpl');
    }
}