<?php
session_start();
?>
<link rel="stylesheet" href="../../assets/css/pb.css">
<link rel="stylesheet" href="../../assets/css/weapons.css">

<div class="wrapper">

<?php
require("../modules/aom.database.php");
require("../config.php");
require("../config.weapons.php");
$db = new aomFramework\database($_CONFIG["database"]["host"],$_CONFIG["database"]["user"],$_CONFIG["database"]["pass"],$_CONFIG["database"]["dbname"]);
$sqlInfo = "SELECT * FROM inventory WHERE user_id=? AND item_type=?";
$getInfo = $db->getRows($sqlInfo,array($_SESSION[$_CONFIG["session"]["uid"]],intval(filter_input(INPUT_GET, 'tab'))));
foreach($getInfo as $row){
?>
<div class="box">
<div align="center" class="canvasWeapon">
<div class="icon <?=$_PB[$row['item_id']]['class']?>"></div>
</div>
<hr /><div align="center" class="nameFont weaponTitle"><b><?=$_PB[$row['item_id']]['name']?></b></div><hr />
<div class="detailFont padding">ระยะเวลาคงเหลือ : <b><?php if($row['item_period']<=0){ echo 'ถาวร'; } else{ echo "{$row['item_period']} วัน";} ?></b></div>
</div>
<?php
}
?>

</div>