<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
class CalcCtrl
{
    private $msgs;
    private $form;
    private $result;
    private $hide_intro;
    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro= false;

    }
//pobranie parametrów
    function getParams(){
        $this->form->credit = isset($_REQUEST['credit']) ? $_REQUEST['credit'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
        $this->form->interestRate = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;
    }

//walidacja parametrów z przygotowaniem zmiennych dla widoku
    function validate(){
        // sprawdzenie, czy parametry zostały przekazane
        //! jeżeli nie (true) czyli return true | ! jeżeli nie (false) czyli return false
        if ( ! (isset($this->form->credit) && isset($this->form->years) && isset($this->form->interestRate))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }
        else{
            $this->hide_intro = true;//schowaj intro, gdy przyszły pola formularza
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ( $this->form->credit == "") {
            $this->msgs->addError('Nie podano liczby (Kwota kredytu)');
        }
        if ( $this->form->years == "") {
            $this->msgs->addError('Nie podano liczby (Ilość lat)');
        }
        if ( $this->form->interestRate == "") {
            $this->msgs->addError('Nie podano liczby (Oprocentowanie)');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        if (!$this->msgs->isError()){
            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric($this->form->credit)) {
                $this->msgs->addError('Kwota kredytu - wartość nie jest liczbą całkowitą');
            }
            if (! is_numeric($this->form->years)) {
                $this->msgs->addError('Ilość lat - wartość nie jest liczbą całkowitą');
            }
            if (! is_numeric($this->form->interestRate)) {
                $this->msgs->addError('Oprocentowanie - wartość nie jest liczbą całkowitą');
            }
        }
    return ! $this->msgs->isError();//jeśli brak błędów zwróc true
    }

    function process(){
        $this->getParams();
        if($this->validate()){
            $this->form->years = intval($this->form->years);
            $this->form->credit = intval($this->form->credit);
            $this->form->interestRate = floatval($this->form->interestRate);
            $this->msgs->addInfo('Parametry poprawne');
                //wykonanie operacji
                $tmp = $this->form->interestRate;
                $this->form->interestRate = ($this->form->interestRate)/100;
                $this->result->result = ($this->form->credit*(1+$this->form->interestRate))/(($this->form->years)*12);
                $this->form->interestRate = $tmp;
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }

    public function generateView()
    {
        Global $conf;//dlatego żeby zmienna była dostępna poza funkcją
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description',"Profesjonalna strona z szablonowaniem SMARTY");
        $smarty->assign('page_header','Szablony Smarty');
        $smarty->assign('hide_intro',$this->hide_intro);

        $smarty->assign('form',$this->form);
        $smarty->assign('result',$this->result);
        $smarty->assign('msgs',$this->msgs);


        $smarty->display($conf->root_path.'/app/calc_view.tpl');
    }
}