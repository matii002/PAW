<?php
require_once dirname(__FILE__).'/core/Config.class.php';
$conf = new Config();
include dirname(__FILE__).'/config.php';//ustawiamy konfigurację

// &getConf()odwołanie do zmiennej a nie do wartości, zwraca referencję
//Po to aby zmienna $conf była globalna
function &getConf(){
    global $conf;
    return $conf;
}

require_once getConf()->root_path.'/core/Messages.class.php';
$msgs = new Messages();

//Po to aby zmienna $msg była globalna
function &getMessages(){
    global $msgs;
    return $msgs;
}
$smarty = null;

function &getSmarty(){
    global $smarty;
    if(!isset($smarty)){
        include_once getConf()->root_path.'/lib/smarty/libs/Smarty.class.php';
        $smarty = new Smarty();
        $smarty->assign('conf',getConf());
        $smarty->assign('msgs',getMessages());
        $smarty->setTemplateDir(array(
            'one' => getConf()->root_path.'/app/views',
            'two' => getConf()->root_path.'/app/views/templates'
        ));
    }
    return $smarty;
}
require_once getConf()->root_path.'/core/functions.php';
$action = getFromRequest('action');