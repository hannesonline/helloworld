<?php
class Logic2 implements Logic {
	public function get_body() {
		$output = "";


		$output .= "Klicke auf die Seite " . HTML::A("http://localhost/phptest.php");

		//TODO:...


		return $output;
	}
}