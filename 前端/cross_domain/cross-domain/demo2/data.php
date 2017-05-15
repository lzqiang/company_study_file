<?php
	header("Access-Control-Allow-Origin: *");
	$data = array('我是data.php','demo2','11212');//要返回的数据
	echo '('.json_encode($data).')';//输出
?>
