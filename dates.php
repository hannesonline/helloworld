<?php

class dates
{
    
    public static function zeitgeber(){

        $uhrzeit = date("H:i");
        
        $zeit_string = "Es ist $uhrzeit.";
        
        $stunde = date("H");
        
        $uhrzeit_kommentar = "";
        if($stunde >= 20/*Uhr*/){
            $uhrzeit_kommentar = "Whaaa! schon so spät!";
        }
        if($stunde < 12/*Uhr*/){
            $uhrzeit_kommentar = "Guten Morgen!";
        }
        
        if($uhrzeit_kommentar){
            $zeit_string .= " ".$uhrzeit_kommentar;
        }
        
        return $zeit_string;
    }
    
}

