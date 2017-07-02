<?php
session_start();
require("core/config.php");

include("core/render/style.php");
if(isset($_SESSION[$_CONFIG["session"]["uid"]]) and is_numeric($_SESSION[$_CONFIG["session"]["uid"]])){
	include("core/render/inventory.php");
} else{
	include("core/render/login.php");
}
?>