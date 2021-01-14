<?php

function menu(){

    global $agi, $mode_debug;
    $bye = 0; // variable bye 
    while (true) {  //https://www.php.net/manual/es/control-structures.while.php
        
        agiLog('Menu - principal');
    
        if ($bye === 3){
            if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Loop: Final: ->'.$bye.'<-');
            $agi->noop('Loop: Final: ->'.$bye.'<-');
            $agi->stream_file('/audio/hemos_detectado_un_problema_vuelva_a_intentar_en_unas_horas_hasta_luego','#');
            exit;
        }
        //audio (ivr-escuela-demo-bienvenido.wav): 
        // Le damos la bienvenida al Instituto Inmaculada Concepción. Si conoce el número de interno, márquelo ahora.
     
        // - Para comunicarse con la comunidad religiosa, marque 1.
        // - Para secretaría inicial y primaria, marque 2.
        // - Para secretaría secundaria y profesorado, marque 3.
        // - Para preceptoría secundaria, 4.
        // - Para administración, marque 5.
        // - O aguarde y será atendido.
     
        $result = $agi->get_data('/audio/ivr-escuela-demo-bienvenido', 3000, 1);
        $dtmf = $result['result']; 
     
        switch ($dtmf) { //https://www.php.net/manual/es/control-structures.switch.php
     
            case 1:
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Opción 1 - Comunidad Religiosa');
                $agi->noop('Opción 1 - Comunidad Religiosa');
                $agi->stream_file('/audio/1-comunidad_religiosa','#');
                $agi->exec_dial('IAX2','100');
                $billsec = get_var('ANSWEREDTIME');
                $dialstatus = get_var('DIALSTATUS');
                $agi->noop('ANSWEREDTIME: ->'.$billsec.'<- / DIALSTATUS: ->'.$dialstatus.'<-');
                break;
            case 2:
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Opción 2 - Secretaría Inicial y Primaria');
                $agi->noop('Opción 2 - Secretaría Inicial y Primaria');
                $agi->stream_file('/audio/2-secretaria_inicial_y_primaria','#');
                break;
            case 3:
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Opción 3 - Secretaría Secundaria y Profesorado');
                $agi->noop('Opción 3 - Secretaría Secundaria y Profesorado');
                $agi->stream_file('/audio/3-secretaria_secundaria_y_profesorado','#');
                break;
            case 4:
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Opción 4 - Preceptoría Secundaria');
                $agi->noop('Opción 4 - Preceptoría Secundaria');
                $agi->stream_file('/audio/4-preceptoria_secundaria','#');
                break;
            case 5:
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Opción 5 - Administración');
                $agi->noop('Opción 5 - Administración');
                $agi->stream_file('/audio/5-administración','#');
                break;
            case '-1':
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Llamada Abortada');
                $agi->noop('Llamada Abortada');
                exit();
            default:
                if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('TimeOut: Aguarde y será atendido');
                $agi->noop('TimeOut: Aguarde y será atendido');
                $agi->stream_file('/audio/6-un_momento_por_favor_su_llamada_sera_transferida_a_uno_de_nuestros_asesores','#');
                $agi->set_music(true,'irv-escuela-demo');
                sleep(30);
                break;
     
        }
        $bye++;
        if($mode_debug != "TRUE" OR $mode_debug != "true") agiLog('Loop: Número: ->'.$bye.'<-');
        $agi->noop('Loop: Número: ->'.$bye.'<-');
    }

}

?>
