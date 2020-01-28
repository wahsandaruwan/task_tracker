<?php
    //Return a fontawesome icon
    function icon($code){
        $i = '<i class = "fa fa-'.$code.'"></i>';
        return $i;
    }

    //Convert timestamp into nicer format
    function date_change($date){
        return date('M j Y g:i A', $date);
    }

    //Convert time into nicer format
    function time_change($seconds){
        $h = floor(($seconds/60)/60);
        $m = round(($seconds/60) - ($h * 60));
        return $h.' hrs : '.$m.' mins';
    }

    function save($data){
        $json = json_encode($data);
        $file = fopen("data.json","w");
        fwrite($file,$json);
    }
?>