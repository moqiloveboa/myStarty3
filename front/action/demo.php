<?php
define("INC_PATH",dirname(dirname(__FILE__))   . "/etc/");
define("PUBLIC_PATH", dirname(dirname(dirname(__FILE__))) . "/public/" );
include_once INC_PATH."init.inc.php";

$smarty->assign("title","my smarty");
$smarty->assign("content","my name is LoveBoA");

$img_path =  PUBLIC_PATH . "images/" . "xcn.jpg";
$smarty->assign("img_path",$img_path);

$smarty->display("test.html");