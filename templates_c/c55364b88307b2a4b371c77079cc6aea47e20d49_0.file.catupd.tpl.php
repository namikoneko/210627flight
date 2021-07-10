<?php
/* Smarty version 3.1.39, created on 2021-07-10 07:18:17
  from '/Library/WebServer/Documents/210622flight/templates/catupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e949b982ebd0_54761521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55364b88307b2a4b371c77079cc6aea47e20d49' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/catupd.tpl',
      1 => 1625901269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e949b982ebd0_54761521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38069427160e949b98207b9_54039741', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_38069427160e949b98207b9_54039741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_38069427160e949b98207b9_54039741',
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
  ins: <input type="text" name="title">
  <input type="submit" value="send">
 </div>
</form>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
  <a href="/210622flight/tagupdexeCatid/<?php echo $_smarty_tpl->tpl_vars['updid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
  <br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block "body"} */
}
