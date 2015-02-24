<?php
// just add new entries to array
$urls = array(
	'http://mac4.ixcglobal.com:8081/multitel.do',
	'http://mac5.ixcglobal.com:8081/multitel.do',
	'http://mac6.ixcglobal.com:8081/multitel.do',
	'http://mac7.ixcglobal.com:8081/multitel.do',
	'http://mac8.ixcglobal.com:8081/multitel.do',
	'http://mac9.ixcglobal.com:8081/multitel.do',
	);
$postData = http_build_query($_POST);

foreach($urls AS $url) {
	
	$opts = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $postData
	    ));
	    
	    $context  = stream_context_create($opts);
	    $result = file_get_contents($url, false, $context);
}


?>