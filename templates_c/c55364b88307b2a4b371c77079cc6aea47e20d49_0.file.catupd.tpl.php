<?php
/* Smarty version 3.1.39, created on 2021-07-18 16:34:05
  from '/Library/WebServer/Documents/210622flight/templates/catupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f457fd6fd6a6_05164189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55364b88307b2a4b371c77079cc6aea47e20d49' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/catupd.tpl',
      1 => 1625903148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f457fd6fd6a6_05164189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139723424060f457fd6f62a6_33978508', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_139723424060f457fd6f62a6_33978508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_139723424060f457fd6f62a6_33978508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="/210622flight/catupdexe" method="post">
  <input type="hidden" name="updid" value="<?php echo $_smarty_tpl->tpl_vars['updid']->value;?>
">
 <div class="flex">
  <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
  <input type="submit" value="send">
  <a href="/210622flight/catdel/<?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['catid'];?>
">delete</a>
 </div>
</form>
<form action="/210622flight/insexeWithCatid" method="post">
  <input type="hidden" name="parentidfield" value="<?php echo $_smarty_tpl->tpl_vars['updid']->value;?>
">
 <div class="flex">
  tagins: <input type="text" name="title">
  <input type="submit" value="send">
 </div>
</form>

<?php
}
}
/* {/block "body"} */
}
