<?php
	if (isset($_GET['callback'])) {
		$callback="callback";
	}
	$callback =$_GET['callback'] ;//得到回调函数名
	$data = array('我是data.php','demo1',$callback);//要返回的数据
	echo $callback.'('.json_encode($data).')';//输出
?>
