<?php
/* Smarty version 3.1.39, created on 2021-06-27 08:31:37
  from '/Library/WebServer/Documents/210622flight/templates/postupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d8376940edd4_29120481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be9f116c51dcde314c8832d852dbcd20d2a8561' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/postupd.tpl',
      1 => 1624782689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d8376940edd4_29120481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77672700760d83769409b33_20905471', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_77672700760d83769409b33_20905471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_77672700760d83769409b33_20905471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<br>
<form action="../../postupdexe" method="post">
  <input type="hidden" name="tagid" value="<?php echo $_smarty_tpl->tpl_vars['tagid']->value;?>
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
