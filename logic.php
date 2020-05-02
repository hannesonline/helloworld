<?php

require_once 'strings.php';
require_once 'dates.php';

class logic
{

    public function do_calculate(){
        return $this->calculate(
                $this->val_from_request('name')
            );
    }
    
    public static function val_from_request($name, $default=null){
        return isset($_REQUEST[$name])?$_REQUEST[$name]:$default;
    }
    
    private function calculate($name){
        $output = "";
        #$output .= "Hallo $name!".NEUE_ZEILE;
        #$output .= dates::zeitgeber().NEUE_ZEILE;
        #$output .= "Dein Name rückwärts: ".($name_rueckwaerts = strrev($name)).NEUE_ZEILE;
        #$output .= "Noch schöner: ".strings::name_schoener($name_rueckwaerts).NEUE_ZEILE;


        $output .= "Hello world!";

        
        $output = "<pre>$output</pre>";
        return $output;
        
    }
    
}

