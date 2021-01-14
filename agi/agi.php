#!/usr/bin/php
<?php

set_time_limit(30); // Utilizaremos esta función al comienzo de nuestro script definiendo el tiempo máximo de ejecución en segundos. Por lo tanto, con este método el nuevo límite afectará única y exclusivamente al script dónde lo utilicemos.
ob_implicit_flush(false); // Deshabilitará el volcado implícito.
ini_set('memory_limit', -1); // Define memoria ilimitada para cada proceso.
ini_set('register_argc_argv', 1);

$mode_debug = getenv('MODE_PRODUCTION');

//modo debug
if( $mode_debug == "TRUE" OR $mode_debug == "true"){
    //MODE PRODUCTION
    error_reporting(0);
}else{
    //MODE DEVELOPMENT 
    //Notificar todos los errores de PHP.
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1); 
    error_reporting(-1);
}

date_default_timezone_set(getenv('TIMEZONE'));
require_once (dirname(__FILE__)."/libs/define.php"); // Importa el phpagi.php para luego inicializarlo. 


$agi = new AGI(); // Inicializa la clase AGI en la variable $agi.

agiLog('.: FASTAGI - IVR ESCUELA DEMO :.');

$agi->set_variable('CHANNEL(language)', getenv('LANGUAGE_AUDIO') ); // Cambia el lenguaje del canal a es "español" (SET VARIABLE) https://www.voip-info.org/set-variable/
$agi->answer(); // Atiende la llamada. 
$action  = $agi->request['agi_arg_1'];

switch ($action) {
    case 'ejemplo1':
        menu();
        exit();
    break;
    
    case 'ejemplo2':
        menu2();
        exit();
    break;

    default:
        $agi->noop('default exit');
    break;
}
 
$agi->hangup();

?>
