<?php
$path = "assets/images/";
?>

<div align="center">


<table id="Table_01" width="961" height="769" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="8">
			<img src="assets/images/weapon_01.png" width="960" height="119" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="119" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8">
			<img src="assets/images/weapon_02.png" width="17" height="649" alt=""></td>
		<td rowspan="4">
		<div align="center" style="padding-left: 10px; padding-right: 10px;">
			<img style="vertical-align:middle" src="assets/ranks/1.jpg" /> CHICK002
		</div>
		</td>
		<td rowspan="8">
			<img src="assets/images/weapon_04.png" width="186" height="649" alt=""></td>
		<td>
			<?php
			if(!isset($_GET["tab"]) or $_GET["tab"]==0){
				$can1Hover=false;
				$Tab1URL = 'assets/images/weapon_05_active.png';
			} else{
				$can1Hover=true;
				$Tab1URL = 'assets/images/weapon_05.png';
			}
			?>
			<a href="./"><img src="<?=$Tab1URL?>" width="132" height="35" alt="" onmouseleave="this.src='<?=$Tab1URL?>'" <?php if($can1Hover==true){echo "onmouseover=\"this.src='assets/images/weapon_05_hover.png'\"";} ?> /></a></td>
		<td>
			<?php
			if(isset($_GET["tab"]) and $_GET["tab"]==1){
				$can2Hover=false;
				$Tab2URL = 'assets/images/weapon_06_active.png';
			} else{
				$can2Hover=true;
				$Tab2URL = 'assets/images/weapon_06.png';
			}
			?>
			<a href="./?tab=1"><img src="<?=$Tab2URL?>" width="135" height="35" alt="" onmouseleave="this.src='<?=$Tab2URL?>'" <?php if($can2Hover==true){echo "onmouseover=\"this.src='assets/images/weapon_06_hover.png'\"";} ?> /></a></td>
		<td>
			<img src="assets/images/weapon_07.png" width="135" height="35" alt=""></td>
		<td colspan="2" rowspan="2">
			<img src="assets/images/weapon_08.png" width="121" height="36" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="assets/images/weapon_09.png" width="402" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="assets/images/weapon_10.png" width="523" height="44" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="44" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="assets/images/weapon_11.png" width="523" height="7" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="7" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="assets/images/weapon_12.png" width="234" height="418" alt=""></td>
		<td colspan="4">
			<iframe src="core/render/items.php?tab=<?=intval(filter_input(INPUT_GET, 'tab'))?>" style="width:99%;height:100%;"></iframe>
		<td rowspan="4">
			<img src="assets/images/weapon_14.png" width="17" height="562" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="396" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="3">
			<img src="assets/images/weapon_15.png" width="506" height="166" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="22" alt=""></td>
	</tr>
	<tr>
		<td>
		<div style="padding:5px 10px;">
			<!--<img src="assets/images/weapon_16.png" width="234" height="65" alt=""></td>-->
			POINT : <b>0</b><br />
			CASH : <b>0</b><br />
		</div>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="65" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="assets/images/weapon_17.png" width="234" height="79" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="1" height="79" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="assets/images/spacer.gif" width="17" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="234" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="186" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="132" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="135" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="135" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="104" height="1" alt=""></td>
		<td>
			<img src="assets/images/spacer.gif" width="17" height="1" alt=""></td>
		<td></td>
	</tr>
</table>


</div>