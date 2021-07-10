<?php
/* Smarty version 3.1.39, created on 2021-07-10 07:22:51
  from '/Library/WebServer/Documents/210622flight/templates/tagupd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e94acbbeb823_56146618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e5fa52584e653de84ec598c4ffcc762dfe1379' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/tagupd.tpl',
      1 => 1625901769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e94acbbeb823_56146618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52012025260e94acbbe3696_50361558', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_52012025260e94acbbe3696_50361558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_52012025260e94acbbe3696_50361558',
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
  <a href="/210622flight/tagupdexeCatid/<?php echo $_smarty_tpl->tpl_vars['tagid']->value;?>
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
