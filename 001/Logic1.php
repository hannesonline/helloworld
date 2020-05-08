<?php
class Logic1 implements Logic {
	public function get_body() {
		$output = "";


		//=========== Hier geht's los: ===========

		//Kommentare ("//") werden vom Compiler nicht beachtet.

		//Mit "echo" gibt man etwas aus.
		//Alle Befehle werden mit einem Semikolon beendet.

		echo "Hello world.";


		//Variablen beginnen mit "$".

		$zaehler = 2;


		//Mit "for" kann man einen Befehl wiederholen.
		//Z.B. 10 mal:

		for ($i = 0; $i < 10; $i++) {

			$zaehler = $zaehler + 2;

			//"\n" ist ein Zeilenumbruch.
			//Mit "." können Strings aneinandergehängt werden.
			//echo "\n" . $zaehler;
		}


		return $output;
	}
}