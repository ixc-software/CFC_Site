<?php
// just add new entries to array
$urls = array(
	'http://mac4.ixcglobal.com:8081/multitel.do?',
	'http://mac5.ixcglobal.com:8081/multitel.do?',
	'http://mac6.ixcglobal.com:8081/multitel.do?',
	'http://mac7.ixcglobal.com:8081/multitel.do?',
	'http://mac8.ixcglobal.com:8081/multitel.do?',
	'http://mac9.ixcglobal.com:8081/multitel.do?',
	);
$getData = http_build_query($_REQUEST);

foreach($urls AS $url) {
	    
	    $result = file_get_contents($url.$getData, false, $context);
}


?>