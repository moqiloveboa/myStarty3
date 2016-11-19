<?php
/* Smarty version 3.1.30, created on 2016-11-19 16:43:44
  from "/opt/lampp/htdocs/mySmarty3/front/tpl/test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583073303bebc3_58691654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4d030ae3d82e10e5894adcef015aaa90b49df0' => 
    array (
      0 => '/opt/lampp/htdocs/mySmarty3/front/tpl/test.html',
      1 => 1479570221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583073303bebc3_58691654 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</h2>
    <h3><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</h3>
    <img src="<?php echo $_smarty_tpl->tpl_vars['img_path']->value;?>
" alt="xcn" style="width: 300px;height: auto;">
</body>
    <?php echo '<script'; ?>
>
        if (true){ alert(new Date()); }
    <?php echo '</script'; ?>
>
</html><?php }
}
