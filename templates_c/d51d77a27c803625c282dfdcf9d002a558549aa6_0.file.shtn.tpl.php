<?php
/* Smarty version 3.1.39, created on 2021-07-22 02:07:17
  from '/Library/WebServer/Documents/210622flight/templates/shtn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f8d2d55ddb18_40602074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd51d77a27c803625c282dfdcf9d002a558549aa6' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/shtn.tpl',
      1 => 1626919633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f8d2d55ddb18_40602074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167592921360f8d2d55ca636_91607583', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_167592921360f8d2d55ca636_91607583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_167592921360f8d2d55ca636_91607583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <a href="/210622flight/shtns">return to shtns</a>
  <a href="/210622flight/tags">return to tags</a>
  <p>
    <?php echo $_smarty_tpl->tpl_vars['rowshtn']->value['title'];?>

    <a href="/210622flight/shtnupd/<?php echo $_smarty_tpl->tpl_vars['rowshtn']->value['id'];?>
">update</a>
    <a href="/210622flight/shtndel/<?php echo $_smarty_tpl->tpl_vars['rowshtn']->value['id'];?>
">delete</a>
  </p>

<form action="/210622flight/postinsexeFromShtn/<?php echo $_smarty_tpl->tpl_vars['rowshtn']->value['id'];?>
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
    <p>
      <?php echo $_smarty_tpl->tpl_vars['row']->value['posttext'];?>

      <a href="/210622flight/post/1/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">post</a>
      <a href="/210622flight/postupdFromShtn/<?php echo $_smarty_tpl->tpl_vars['row']->value['shtnid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">update</a>
      <a href="/210622flight/postdelFromShtn/<?php echo $_smarty_tpl->tpl_vars['row']->value['shtnid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['postid'];?>
">delete</a>
    </p>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "body"} */
}
