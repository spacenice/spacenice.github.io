<?php
$url = "https://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'];
if (isset($_GET['debug'])) {
	echo $_SERVER['SERVER_PORT'], $url; exit;
}
if ($_SERVER['SERVER_PORT'] == 80) {
	header("Location:{$url}");
} else {
	echo "ok";
}
?>	
