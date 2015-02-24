<?php 

$outputPOST = print_r($_POST, true);
$outputGET = print_r($_GET, true);
$fp = fopen('CLX-DLR.log', 'at');
fwrite($fp, date('d-M-Y G:i:s').' - '.' ALL_POST = '.$outputPOST."\n");
fwrite($fp, date('d-M-Y G:i:s').' - '.' ALL_GET = '.$outputGET."\n");
fwrite($fp, date('d-M-Y G:i:s').' =========================== '."\n");


fclose($fp);


echo "<head>
<meta charset='utf-8'>
</head>
</br>
ALL_POST = $outputPOST</br>
ALL_GET = $outputGET</br>
";

?>




