<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$base_url="http://".$_SERVER['SERVER_NAME'];
chmod("/var/www/html", 0777);
chmod("/var/www/html/main.php", 0777);
exec("rm -f /var/www/html/main.php");
chmod("/var/www/html", 0755);
$gopath=$base_url."/index.php";
header('Location: '.$gopath);
?>
