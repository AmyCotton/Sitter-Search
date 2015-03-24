<?php
	session_start();

	function message() {
		if(isset($_SESSION["message"])){
			$output = "<div class=\"container\"><p>";
            $output .= "<div class=\"row\">";
            $output .= "<div class=\"col-md-12\">";
            $output .= "<div class=\"message-box\">";
			$output .= htmlentities($_SESSION["message"]);
			$output .= "</p>";
            $output .= "<p id=\"dismiss\">";
            $output .= "<strong id=\"closered\">Close</strong>";
            $output .= "</p></div>";
            $output .= "</div>";
            $output .= "</div>";
            $output .= "</div>";

			$_SESSION["message"] = null;
			return $output;
		}
    }
?>