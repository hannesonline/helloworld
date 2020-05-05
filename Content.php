<?php

require_once "Logic.php";

class Content {

	const project = "Meine Welt";

	private $title = null;
	private $body = "";

	private static $chapters = array(
		"1" => "Kapitel 1: Hello world!",
	);

	/**
	 * @var Logic $logic
	 */
	private $logic = null;

	public function show(){

		if (isset($_REQUEST['chapter'])){
			$this->body = $this->get_body($_REQUEST['chapter']);
		}else{
			$this->body = $this->get_toc();
		}

		echo $this->html_page();

	}

	private function get_toc(){
		$toc = "";

		$toc_options = array();
		foreach (self::$chapters as $nr => $title){
			$toc_options[] = "<option value='$nr'>$title</option>";
		}
		$toc_options = implode("\n", $toc_options);

		$toc.="<form method='get'>
<select name='chapter'>
	$toc_options
</select>
<input type='submit' value='Kapitel laden'>
</form>";
		return $toc;
	}

	private function get_body($chapter){
		switch ($chapter){
			case 1:
				require_once "001/Logic1.php";
				$this->logic = new Logic1();
				break;
			default:
				break;
		}
		if($this->logic===null){
			return "Unbekanntes Kapitel!";
		}

		flush();
		ob_flush();
		ob_start();
		$body = $this->logic->get_body();
		$body_echo = ob_get_clean();

		if($body_echo){
			$body = "<pre>$body_echo</pre><hr>".$body;
		}

		$this->title = self::$chapters[$chapter];

		return $body;
	}

	private function get_title(){

		$title = self::project;
		if($this->title){
			$title = $this->title . " - " . $title;
		}

		return $title;
	}

	private function html_page(){
		$html = "";

		$title = $this->get_title();

		$html .= "<!DOCTYPE html>
<html>
<head>
	<title>$title</title>
	<meta charset=\"utf-8\">
</head>
<body>
$this->body
</body>
</html>";

		return $html;
	}

}