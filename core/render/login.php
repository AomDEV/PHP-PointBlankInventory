<form action="" method="post">
<center style="margin-top:20px;"><div class="box" style="max-width:300px;padding-bottom: 20px;">
<h2>LOGIN</h2>
<div class="box" style="margin-bottom: 10px;">
<?php
if(isset($_POST) and isset($_POST[$_CONFIG["session"]["uid"]])){
	require("core/modules/aom.database.php");
	$db = new aomFramework\database($_CONFIG["database"]["host"],$_CONFIG["database"]["user"],$_CONFIG["database"]["pass"],$_CONFIG["database"]["dbname"]);
	$sql = "SELECT * FROM account WHERE username=?";
	$checkNum = $db->getNumber($sql,array($_POST[$_CONFIG["session"]["uid"]]));
	if($checkNum>=1){
		$getInfo = $db->getRow($sql,array($_POST[$_CONFIG["session"]["uid"]]));
		$_SESSION[$_CONFIG["session"]["uid"]] = $getInfo["uid"];
		echo '<p>OK!</p>';
	} else{
		echo '<p>Not found username!</p>';
	}
}
?>
</div>
<div><input style="margin-left:10px;margin-right:10px;width:90%;" type="text" name="<?=$_CONFIG["session"]["uid"]?>" placeholder="USERNAME" autocomplete="off" /></div>
<div style="margin-top:10px;"><button type="submit">LOGIN</button> <button>CANCEL</button></div>
</div></center>
</form>