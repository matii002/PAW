<?php
require_once 'Config.class.php';
$conf = new Config();

$conf->server_name = 'localhost:80';
$conf->app_root = '/php_kontroler_glowny';
$conf->root_path = dirname(__FILE__);
$conf->app_url = $conf->server_name.$conf->app_root;
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/app/ctrl.php?action=';