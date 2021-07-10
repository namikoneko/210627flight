<?php
/* Smarty version 3.1.39, created on 2021-07-10 08:28:50
  from '/Library/WebServer/Documents/210622flight/templates/postfind.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e95a4274c9c4_81636248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702da6024df10eec78c95ecf15fe01f7be9ecca1' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/postfind.tpl',
      1 => 1625905687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e95a4274c9c4_81636248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182019496660e95a42740a98_73044285', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_182019496660e95a42740a98_73044285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_182019496660e95a42740a98_73044285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="/210622flight/tags">return to tags</a>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
<p>
  <?php echo $_smarty_tpl->tpl_vars['row']->value['posttext'];?>

  <a href="tag/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['tagtitle'];?>
</a>
</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block "body"} */
}
