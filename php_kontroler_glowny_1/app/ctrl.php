<?php
require_once dirname(__FILE__).'/../config.php';

//Pobranie nazwy action
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

//Wykonanie akcji

switch($action){
    default:
        include_once $conf->root_path.'/app/Calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        include_once $conf->root_path.'/app/Calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
}