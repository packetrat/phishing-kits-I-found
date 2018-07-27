<?php
/*
Determine User Browser
*/
function getBrowser($userAgent) {
  // Create list of browsers with browser name as array key and user agent as value. 
	$browsers = array(
     	'Chrome' => 'Google Chrome',
		'Safari' => 'Safari',
		'Opera' => 'Opera',
		'Mozilla Firefox'=> '(Firebird)|(Firefox)', // Use regular expressions as value to identify browser
		'Galeon' => 'Galeon',
		'Mozilla'=>'Gecko',
		'MyIE'=>'MyIE',
		'Lynx' => 'Lynx',
		'Netscape' => '(Mozilla/4\.75)|(Netscape6)|(Mozilla/4\.08)|(Mozilla/4\.5)|(Mozilla/4\.6)|(Mozilla/4\.79)',
		'Konqueror'=>'Konqueror',
		'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)',
        'Internet Explorer 10' => '(MSIE 9\.[0-9]+)',
		'Internet Explorer 9' => '(MSIE 9\.[0-9]+)',
		'Internet Explorer 8' => '(MSIE 8\.[0-9]+)',
        'Internet Explorer 7' => '(MSIE 7\.[0-9]+)',
		'Internet Explorer 6' => '(MSIE 6\.[0-9]+)',
		'Internet Explorer 5' => '(MSIE 5\.[0-9]+)',
		'Internet Explorer 4' => '(MSIE 4\.[0-9]+)',
	);

	foreach($browsers as $browser=>$pattern) { // Loop through $browsers array
    // Use regular expressions to check browser type
		if(eregi($pattern, $userAgent)) { // Check if a value in $browsers array matches current user agent.
			return $browser; // Browser was matched so return $browsers key
		}
	}
	return 'Unknown'; // Cannot find browser so return Unknown
}
?>