<?php
/* Smarty version 3.1.39, created on 2021-07-17 08:48:06
  from '/Library/WebServer/Documents/210622flight/templates/shtnupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f2994680fce0_65559895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05fc7e9889a32a27dcc7c005c019ce161a2c87ff' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/shtnupd.tpl',
      1 => 1626511492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f2994680fce0_65559895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74276001560f2994680be65_11421819', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_74276001560f2994680be65_11421819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_74276001560f2994680be65_11421819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="/210622flight/shtnupdexe" method="post">
  <input type="hidden" name="shtnid" value="<?php echo $_smarty_tpl->tpl_vars['shtnid']->value;?>
">
  <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
  <input type="submit" value="send">
</form>

<?php
}
}
/* {/block "body"} */
}
