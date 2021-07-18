<?php
/* Smarty version 3.1.39, created on 2021-07-18 00:44:33
  from '/Library/WebServer/Documents/210622flight/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f37971837834_82158336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a4c874d41132f74e6b9c826ecf646264327347' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/post.tpl',
      1 => 1626569070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f37971837834_82158336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96637059660f37971827027_75497462', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_96637059660f37971827027_75497462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_96637059660f37971827027_75497462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="../../tag/<?php echo $_smarty_tpl->tpl_vars['rowtag']->value['id'];?>
">return to tag</a>
<br>
<a href="/210622flight/tag/<?php echo $_smarty_tpl->tpl_vars['rowtag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rowtag']->value['title'];?>
</a>
<br>
<?php echo $_smarty_tpl->tpl_vars['rowpost']->value['text'];?>

<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
  <a href="../../tag/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['tagtitle'];?>
</a>
  <a href="../../tagrm/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
/<?php echo $_smarty_tpl->tpl_vars['rowtag']->value['id'];?>
">(x)</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<form action="../../tagaddexe" method="post">
  <input type="hidden" name="tagid" value="<?php echo $_smarty_tpl->tpl_vars['rowtag']->value['id'];?>
">
  <input type="hidden" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['rowpost']->value['id'];?>
">
  <input type="text" name="title">
  <input type="submit" value="send">
</form>

<?php
}
}
/* {/block "body"} */
}
