<?php 

//This redirects the user back to the index with their results once they search for a location.
    
function redirectTo($toPage) {
        header("Location: " . $toPage);
        exit; 
    }

//This is the code that adds the timestamp onto each post on the index. This code sets the layout and also the timezone that I am in.

class convertToAgo {
    function convert_datetime($str) {
//sets the timezone to GMT
	   date_default_timezone_set('Europe/London');
//explode breaks a string into an array
   		list($date, $time) = explode(' ', $str);
    	list($year, $month, $day) = explode('-', $date);
    	list($hour, $minute, $second) = explode(':', $time);
    	$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
    	return $timestamp;
//this function converts into a timestamp in the "2015-01-01 12:12:12" format
    }
    function makeAgo($timestamp){
        
//This sets the units that the timestamp should use. For example year is set to 12 as there are 12 months in a year
	
   		$difference = time() - $timestamp;
   		$periods = array("sec", "min", "hr", "day", "week", "month", "year", "decade");
   		$lengths = array("60","60","24","7","4.35","12","10");
   		for($x = 0; $difference >= $lengths[$x]; $x++){
   			$difference /= $lengths[$x];
   			$difference = round($difference);
        }
        
   		if($difference != 1) $periods[$x].= "s";
   			$text = "$difference $periods[$x] ago";
   			return $text;
//this function gives out the differences between the time and the timestamp-time
    }
} 

?>