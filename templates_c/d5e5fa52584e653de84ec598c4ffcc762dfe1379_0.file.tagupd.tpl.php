<?php
/* Smarty version 3.1.39, created on 2021-06-27 03:00:23
  from '/Library/WebServer/Documents/210622flight/templates/tagupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d7e9c78fe0f6_61417715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e5fa52584e653de84ec598c4ffcc762dfe1379' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/tagupd.tpl',
      1 => 1624762817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d7e9c78fe0f6_61417715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127056103960d7e9c78f9e35_25601882', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_127056103960d7e9c78f9e35_25601882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_127056103960d7e9c78f9e35_25601882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="../tagupdexe" method="post">
  <input type="hidden" name="tagid" value="<?php echo $_smarty_tpl->tpl_vars['tagid']->value;?>
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
