<?php
/* Smarty version 3.1.39, created on 2021-07-18 01:11:29
  from '/Library/WebServer/Documents/210622flight/templates/tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f37fc1ded705_55231366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd85c0f208e493ffbb76be746f56aa5b51db5cd31' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/tag.tpl',
      1 => 1626570687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f37fc1ded705_55231366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205131350860f37fc1dd91c7_58778076', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_205131350860f37fc1dd91c7_58778076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_205131350860f37fc1dd91c7_58778076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="flex gap-2">
  <a href="/210622flight/tags">return to tags</a>
  <a href="/210622flight/shtns">return to shtns</a>
  <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

  <a href="../tagupd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">update</a>
  <a href="../tagdel/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">delete</a>
   <form action="/210622flight/postfindtag/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" method="get">
    <div class="flex">
     find: <input type="text" name="q">
     <input type="submit" value="send">
    </div>
   </form>
</div>
<form action="../postinsexe/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" method="post">
  <textarea name="text"></textarea>
  <input type="submit" value="send">
</form>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['row']->value['posttext'];?>

  <a href="../post/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">post</a>
  <a href="../postupd/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">update</a>
  <a href="../postdel/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">delete</a>
  <a href="/210622flight/postup/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">up</a>
  
  <a href="/210622flight/shtn/<?php echo $_smarty_tpl->tpl_vars['row']->value['shtnid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['shtntitle'];?>
</a>
  <a href="/210622flight/postcp/<?php echo $_smarty_tpl->tpl_vars['row']->value['tagid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">copy</a>
  <br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block "body"} */
}
