<?php
$log = fopen("logs.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
$timestamp = date("Y-m-d H:i:s");

fwrite($log, "[$timestamp] IP: $ip | Agent: $useragent | Referrer: $referrer\n");
fclose($log);

// Redirect to your fake 404 page
header("Location: /404.html");
exit;
?>
