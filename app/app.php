<?php
require("tools/Datas.php");

if(isset($_GET['name'])){
	$result = Datas::find_ITEM("PASSWORD", "applist", array( '["NAME"] == '.$_GET['name'] , '["INFO"]["public"] == 1' ));
	if(count($result) !== 1){
		echo "<h1>ERROR : Simple App don't find app with this name</h1>";
	}
	else {
		var_dump($result);
	}
}
?>
