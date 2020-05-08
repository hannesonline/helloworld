<?php

class HTML {

	public static function A($href, $innerHTML = null) {

		if ($innerHTML === null) {
			$innerHTML = $href;
		}

		return "<a href=\"" . htmlentities($href) . "\">" . $innerHTML . "</a>";

	}

}