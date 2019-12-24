<?php
$base = "S3cr3tdir";
if(isset($_SERVER["HTTPS"]))	{
	include_once($base_files."PDO_config.php");
	$pages = [""=>0];
	$files = ["main_page.php"];
		$request_uri_wo_query = strtok($_SERVER["REQUEST_URI"],'?');
		$request_uri = explode("/",ltrim($request_uri_wo_query,"/"));
	if(isset($pages[$request_uri[0]]))	{
		include($base.$files[$pages[$request_uri[0]]]);
	}
	else	{
		include($base."404.php");
	}
}
else	{
	header("Location: https://".$_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"],TRUE,301);
}
?>
