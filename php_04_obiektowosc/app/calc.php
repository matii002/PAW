<?php
require_once dirname(__FILE__).'/../config.php';
global $conf;
require_once $conf->root_path.'/app/CalcCtrl.class.php';

$ctrl = new CalcCtrl();
$ctrl->process();