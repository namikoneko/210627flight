<?php
/* Smarty version 3.1.39, created on 2021-07-17 08:59:44
  from '/Library/WebServer/Documents/210622flight/templates/shtns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f29c00971a74_99714849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1212a6b3b7eeda3fb287c7eef8763ad27da67e16' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/shtns.tpl',
      1 => 1626512381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f29c00971a74_99714849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192675837460f29c0096a136_42772035', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_192675837460f29c0096a136_42772035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_192675837460f29c0096a136_42772035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <a href="/210622flight/tags">return to tags</a>
   <form action="shtninsexe" method="post">
    <div class="flex">
     shtn: <input type="text" name="title">
     <input type="submit" value="send">
    </div>
   </form>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <a href="shtn/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
