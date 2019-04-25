<?php
	function getIp(){
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	$ip = getIp();
	echo $ip;
?>
