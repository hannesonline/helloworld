<!DOCTYPE html>
<html>
<head>
	<title>Meine Welt</title>
	<meta charset="utf-8">
	<script src="javascript.js"></script>
</head>
<body onload="onload();setfocus('focus');">
<?php

define("NEUE_ZEILE", "\n");

require_once "form.php";
require_once "logic.php";

$form_class = new form();

$form_html = $form_class->get_form();
echo $form_html;

if (isset($_REQUEST["cmd"])&&$_REQUEST["cmd"]=="calculate"){

    echo "<hr>";
    
    $logic = new logic();
    
    $output = $logic->do_calculate();
    echo $output;
    
}

?>
</body>
</html>