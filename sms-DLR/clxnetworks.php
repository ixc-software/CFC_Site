<?php
// just add new entries to array
$urls = array(
	'http://mac4.ixcglobal.com:8081/clxnetworks.do?',
	'http://mac5.ixcglobal.com:8081/clxnetworks.do?',
	'http://mac6.ixcglobal.com:8081/clxnetworks.do?',
	'http://mac7.ixcglobal.com:8081/clxnetworks.do?',
	'http://mac8.ixcglobal.com:8081/clxnetworks.do?',
	'http://mac9.ixcglobal.com:8081/clxnetworks.do?',
	);
$getData = http_build_query($_REQUEST);

foreach($urls AS $url) {
	    
	    $result = file_get_contents($url.$getData, false, $context);
}


?>