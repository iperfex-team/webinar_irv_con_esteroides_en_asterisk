<?php
    // Get a channel variable
    function get_var($value)
    {
        global $agi;
            //http://phpagi.sourceforge.net/phpagi2/docs/phpAGI/AGI.html#get_variable
            $r = $agi->get_variable( $value );
            if ($r['result'] == 1) {
                $result = $r['data'];
                    return trim($result);
        }
            return '';
    }

    //log
    function agiLog($msg){
        global $agi;
        $uniqueid  = $agi->request['agi_uniqueid'];
        $agi->verbose($uniqueid ." - ".  $msg, 1);
    }
?>
