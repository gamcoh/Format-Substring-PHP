<?php
function sub($string="", $index=0, $badgeEnabled=false){

	// if parameters's format are wrong
	if ($string == "" || $index < 0) {
		return false;
	}

	// if the lentgh of the String is 
	// equal to the Index, so that means
	// that there is no need for suspensions
	// points because we don't cut enough the String
	if (strlen($string) <= $index) {
		return substr($string, 0, $index);
	}
	
	// if Badge is enabled.
	// the Badge is like an information button
	// enabled by mouse hover. (by Twitter bootstrap)
	if ($badgeEnabled) {
		return substr($string, 0, $index) . " ... " . '<span class="badge enable-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$string.'"><i class="fa fa-lightbulb-o"></i></span>';
	}

	// else ..
	return substr($string, 0, $index) . " ... ";
}
