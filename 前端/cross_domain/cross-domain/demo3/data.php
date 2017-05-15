<?php
	//echo "本地server";

	$crossUrl = 'http://localhost:8080/data.php';   //向其他域下发出请求
	$res = file_get_contents($crossUrl);
	echo $res; 

?>
