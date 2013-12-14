<?php
	if(file_exists("on")) {
		$status =  "true";
	}
	else {
		$status = "false";
	}
	header("Content-type: text/javascript");
?>
status = <?= $status ?>;
