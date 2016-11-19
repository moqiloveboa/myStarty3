<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16-11-19
 * Time: 下午11:37
 */

define("INC_PATH",dirname(__FILE__)   . "/front/etc/");
include_once INC_PATH."init.inc.php";

$smarty->assign("title","my smarty");
$smarty->assign("content","my name is LoveBoA");

$img_path = "./public/images/" . "xcn.jpg";
$smarty->assign("img_path",$img_path);

$smarty->display("test.html");



exit();