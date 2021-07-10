<?php
/* Smarty version 3.1.39, created on 2021-07-10 00:10:27
  from '/Library/WebServer/Documents/210622flight/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e8e57387a695_68936048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d53c772fe51a4d17aa15c3aacf5a3eacefa27c4' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/layout.tpl',
      1 => 1625875825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e8e57387a695_68936048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype>
<html>
<head>

<?php echo '<script'; ?>
 src="https://unpkg.com/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="/libs/css/tailwind.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">
</head>
<body>

<div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154711850760e8e573879c34_61519762', "body");
?>

</div>

</body>
</html>
<?php }
/* {block "body"} */
class Block_154711850760e8e573879c34_61519762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_154711850760e8e573879c34_61519762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default body<?php
}
}
/* {/block "body"} */
}
