<?php
/* Smarty version 3.1.39, created on 2021-07-18 01:25:26
  from '/Library/WebServer/Documents/210622flight/templates/postupdFromShtn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f38306818e18_16571826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eca0d14751036ed3c97551604cb6b84bd42bc60' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/postupdFromShtn.tpl',
      1 => 1626571195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f38306818e18_16571826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41525323960f383068152c9_01971190', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_41525323960f383068152c9_01971190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_41525323960f383068152c9_01971190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="/210622flight/postupdFromShtnexe" method="post">
  <input type="hidden" name="shtnid" value="<?php echo $_smarty_tpl->tpl_vars['shtnid']->value;?>
">
  <input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
  <textarea name="text"><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</textarea>
  <input type="submit" value="send">
</form>

<?php
}
}
/* {/block "body"} */
}
