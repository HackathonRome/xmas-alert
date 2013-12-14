<?php
	$page = $_SERVER['PHP_SELF'];
	$sec = "2";
	header("Refresh: $sec; url=$page");
?>
	<img class = "live" src = "live.jpg"/>
	<style>
		.live {	
			width: 340px;
			height: 300px;
		}
	</style>
