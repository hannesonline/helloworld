<?php

class form{
	    
    public function get_form(){

        $fields = $this->input_fields();

		$fields[] = "<input type=\"submit\""
			." value='Programm starten'"
			.">";

		$all_fields = implode("<br>", $fields);

        $form = <<<ENDE
        
<form method="post">

	<input type="hidden" name="cmd" value="calculate">
	$all_fields
    
</form>

ENDE;

        return $form;
        
    }

    public static function value_from_request($name){
        $val_html = isset($_REQUEST[$name])?" value=\"".htmlentities($_REQUEST[$name])."\"":"";
        return $val_html;
    }
    
    private function input_fields(){
        $fields = array();
        
        #$fields[] = "Name: <input id='focus' type='text' name='name'".self::value_from_request('name').">";
        
        return $fields;
    }
                
    
}
