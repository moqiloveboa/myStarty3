<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16-11-19
 * Time: 下午11:07
 */

define("ROOT_PATH",dirname(dirname(dirname(__FILE__))). "/" );

require  ROOT_PATH .'smarty/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir( dirname(dirname(__FILE__)) ."/tpl");
$smarty->setConfigDir( dirname(dirname(__FILE__)) . "/etc");
$smarty->setCompileDir( dirname(dirname(__FILE__)) . "/data");

$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";