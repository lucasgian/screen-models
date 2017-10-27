<?php 

require_once "structor.php";

if(isset($_GET['url']))
	$url = $_GET['url'];

else
	$url = "index";


Page::view($url);

?>